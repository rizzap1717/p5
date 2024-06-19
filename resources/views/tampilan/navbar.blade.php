<!doctype html>
<html lang="en">

<head>
    <style>
        body{
            background: url(https://media.istockphoto.com/id/530744884/id/foto/gunung-bromo.jpg?s=612x612&w=0&k=20&c=2JiStxxeqkvNJ5KKM6orkOlSvs82UKrwj_v2ucm3O90=);
            background-size: cover;
            background-position: flex;
            background-repeat: no-repeat;
        }
        nav{
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            padding: 10px 90px;
            box-sizing: border-box;
        }
        nav .brand{
            padding: 22px 20px;
            height: 80px;
            float: left;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            color: #fff;
        }
        nav ul{
            list-style: none;
            float: right;
            margin: 0;
            padding: 0;
            display: flex;
        }
        nav ul li a{
            line-height: 80px;
            padding: 12px 30px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
        }
       
        h3{
            padding: 22px 20px;
            height: 80px;
            float: left;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            color: #fff;
        }

    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Wisata</title>
</head>

<body>
    <nav>
        <a class="navbar-brand" href="{{ url('/login') }}"><h3>RIZZ</h3>
        <ul>
            <li><a href="{{route ('kategori.index')}}"></a></li>
            <li><a href="{{route ('lokasi.index')}}"></a></li>
            <li><a href="{{route ('wisata.index')}}"></a></li>
        </ul>
    </nav>
    <selection></selection>
    <!-- Optional JavaScript; choose one of the two! -->

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
