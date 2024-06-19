<!doctype html>
<html lang="en">

<head>

 <style>
   .card {
  width: 190px;
  background: rgb(0, 0, 0);
  backghound-color: black;
  padding: .4em;
  border-radius: 6px;
  margin-left: 650px;
}

.card-image {
  width: 100%;
  height: 5px;
  border-radius: 6px 6px 0 0;
}

.card-image:hover {
  transform: scale(0.98);
}

.category {
  text-transform: uppercase;
  font-size: 0.7em;
  font-weight: 600;
  color: rgb(63, 121, 230);
  padding: 10px 7px 0;
}

.category:hover {
  cursor: pointer;
}

.heading {
  font-weight: 600;
  color: rgb(88, 87, 87);
  padding: 7px;
}

.heading:hover {
  cursor: pointer;
}

.author {
  color: gray;
  font-weight: 400;
  font-size: 11px;
  padding-top: 20px;
}

.name {
  font-weight: 600;
}

.name:hover {
  cursor: pointer;
}
</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Kelompok 1</title>
</head>

<body>
    <!-- NAVBAR -->
    @include('tampilan.navbar')
    <!-- /NAVBAR -->
    <!-- CONTENT -->
    <div class="card" style="width: 18rem;" >
        <div class="card-image"></div>
        <img src="{{ asset('storage/wisatas/' . $wisata->image) }}" class="w-100 rounded">
        <div class="category"> 
            <table>
            <center><h4>{{ $wisata->nama }}</h4></center> </div>
        <div class="heading">
            <p class="tmt-3">
                {!! $wisata->deskripsi !!}
            </p>
            <p class="tmt-3">
               <tr>Nama Alamat : {!! $wisata->alamat !!}</tr> 
            </p>
            <p class="tmt-3">
                <tr>Harga Tiket : Rp.
                {{ number_format($wisata->harga_tiket, 2) }}</tr>
            </p>
            <p class="tmt-3">
                <tr>Kategori :
                    {{$wisata->lokasi->nama_lokasi}}</tr>
            </p>
            <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
                </table>
        </div>
    </div>

            {{-- <div class="container">
                <div class="row mt-5">
                </div>
                <div class="row">
                        <div class="col-5">
                            <div class="card-body">
                                <div class="card" style="width: 18rem;">
                                <img src="{{ asset('storage/wisatas/' . $wisata->image) }}" class="w-100 rounded">
                                <div class="card-content">
                                    <table>
                                <center><h4>{{ $wisata->nama }}</h4></center>
                                <p class="tmt-3">
                                    {!! $wisata->deskripsi !!}
                                </p>
                                <p class="tmt-3">
                                <tr>Nama Alamat : {!! $wisata->alamat !!}</tr> 
                                </p>
                                <p class="tmt-3">
                                    <tr>Harga Tiket : Rp.
                                    {{ number_format($wisata->harga_tiket, 2) }}</tr>
                                </p>
                                <p class="tmt-3">
                                    <tr>Kategori :
                                        {{$wisata->lokasi->nama_lokasi}}</tr>
                                </p>
                                    </table>
                            </div>
                            </div>
                        </div>
                </div>
            </div>
        </div> --}}
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
