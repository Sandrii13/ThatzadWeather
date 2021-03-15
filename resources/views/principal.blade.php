
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ThatzadWeather</title>
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
     <!-- Styles -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
</head>

<body>
<div class="container-fluid bg">

    <div class="row justify-content-center pt-5">
        <div class="col-12 text-center">
            <img class="logo" src="../img/Bitmap.png" alt="logo">
        </div>
    </div>

    <div class="row justify-content-center pt-5">
        <div class="col-12 col-md-4 text-center">
            <p class="txt">Entérate del tiempo en la zona exacta que te interesa buscando por código postal.</p>
        </div>
    </div>

    <div class="row justify-content-center pt-4">
        <div class="col-12 col-md-4 text-center">
            <input type="text" id="cp" class="form-control p-4" placeholder="Introduce el código postal">
        </div>
    </div>

    <div class="row justify-content-center pt-3">
        <div class="col-12 col-md-4 text-center">
            <label class="btn btn-primary" for="btn-check">Buscar <img class="float-right float-md-right" src="../img/search-location.png" alt="search"> </label>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-2 text-center">
            <p class="txt2 mt-5">¡Que la lluvia no te pare!</p>
        </div>
    </div>
</div>


    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>

