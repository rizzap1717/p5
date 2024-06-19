<!doctype html>
<html lang="en">

<head>

 <style>
    .card{
        display: flex;
        transition: transform 0.3s;
        flex-direction: column;
        
    }
    .card:hover{
        transform: translateY(-10px);
    }
    .card-body{
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 20px;
    }
    .card-text{
        font-size: 1rem;
        color: #000000;
    }
</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>RIZZ</title>
</head>

<body>
    <!-- NAVBAR -->
    @include('tampilan.navbar')
    <br>
    
    <!-- /NAVBAR -->
    <!-- CONTENT -->
    <div class="section">
        <div class="container">
            <div class="row mt-5">
            </div>
            <div class="row">
                @foreach ($wisata as $data)
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('storage/wisatas/' .$data->image)}}" width="287px">
                            <div class="card-body">
                                <h4 class="card-title">{{$data->nama_wisata}}</h4>
                                <p class="card-text">{{$data->alamat}}</p>
                                <p class="card-text">{{$data->deskripsi}}</p>
                                <a href="{{route ('wisata.show', $data->id)}}" class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- /CONTENT -->

    <!-- FOOTER -->
    @include('tampilan.footer')
    <!-- /FOOTER -->















    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
