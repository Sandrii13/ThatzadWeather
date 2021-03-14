
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

    <div class="row justify-content-center p-5">
        <div class="col-12 text-center">
            <img class="logo" src="../img/Bitmap.png" alt="logo">
        </div>
        <div class="col-4 col-md-4 pr-2"><p class="txtDet float-right float-md-right">¡Que la lluvia no te pare!</p></div>
    </div>

    <div class="row justify-content-center">
        <div class="col col-7 col-md-7 mr-3 fondo">
            <div class="info float-left float-md-left p-5 mr-5">
                <p>Código postal: <strong>08860</strong></p>
                <p>Ciudad: <strong>Castelldefels</strong></p>
            </div>
            <div class="info float-right float-md-right p-5 mr-5">
                <img src="../img/search-location.png" alt="search"> <input type="text" id="search" placeholder="Buscar otra zona">
            </div>
        </div>
        <div class="col col-3 col-md-3 ml-3 fondo">
            <div class="p-5">
                <p class="text-center top">Top 5 de las zonas más frías según tus búsquedas</p>
            </div>
                <table>
                    <tr>
                        <td>
                            <span class="mr-5">1.</span>
                            <span class="grados ml-5 mr-5">3°</span>
                            <span class="datos float-right float-md-right ml-5">
                                CP: <strong>08860</strong><br>
                                Ciudad: <strong>Barcelona</strong>
                            </span>
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="mr-5">2.</span>
                            <span class="grados ml-5 mr-5">3°</span>
                            <span class="datos float-right float-md-right ml-5">
                                CP: <strong>08860</strong><br>
                                Ciudad: <strong>Barcelona</strong>
                            </span>
                            <hr>
                        </td>
                    </tr>
                </table>
        </div>
    </div>

</div>


    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>

