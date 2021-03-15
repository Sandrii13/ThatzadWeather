
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ThatzadWeather</title>
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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

    <div class="row justify-content-center pb-5">

        <div class="col col-7 col-md-7 mr-3 fondo">
            <div class="row justify-content-center align-items-center">
                <div class="col-4 col-md-4 pt-5 offset-2">
                    <p class="ciudad m-0">Código postal: <strong>08860</strong></p>
                    <p class="ciudad m-0">Ciudad: <strong>Castelldefels</strong></p>
                </div>
                <div class="col-5 col-md-5 pt-5 offset-1">
                    <img class="lupa" src="../img/search-location.png" alt="search"> <input type="text" id="search" placeholder="Buscar otra zona">
                </div>
            </div>

            <div class="row pt-5 justify-content-center">
                <div class="col-2 text-center">Ahora
                    <div class="row pt-4 justify-content-center align-items-center">
                        <div class="col-6 col-md-6 p-0">
                            <i class="fa fa-cloud pt-4"></i>
                        </div>
                        <div class="col-6 col-md-6 p-0">
                            <div>
                                <p class="nombre m-0">Nieve</p>
                                <p class="bgGrado m-0">-3°</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row vertical float-right p-0 ml-4"></div>
                <div class="col-5 text-center">Próximas horas
                    <div class="row pt-4 all justify-content-center">
                        <div class="col-2 col-md-2 p-1">
                            <p>Ahora</p>
                            <i class="fa fa-cloud pt-2"></i>
                            <p>Nieve</p>
                            <p><strong>-3°</strong></p>
                        </div>
                        <div class="row vertical2 float-right p-0 mr-1 ml-1"></div>
                        <div class="col-2 col-md-2 p-1">
                            <p>Hora</p>
                            <i class="fa fa-cloud pt-2"></i>
                            <p>Nieve</p>
                            <p><strong>-3°</strong></p>
                        </div>
                        <div class="row vertical2 float-right p-0 mr-1 ml-1"></div>
                        <div class="col-2 col-md-2 p-1">
                            <p>Hora</p>
                            <i class="fa fa-cloud pt-2"></i>
                            <p>Nieve</p>
                            <p><strong>-3°</strong></p>
                        </div>
                        <div class="row vertical2 float-right p-0 mr-1 ml-1"></div>
                        <div class="col-2 col-md-2 p-1">
                            <p>Hora</p>
                            <i class="fa fa-cloud pt-2"></i>
                            <p>Nieve</p>
                            <p><strong>-3°</strong></p>
                        </div>
                    </div>
                </div>
                <div class="row vertical float-right p-0"></div>
                <div class="col-5 text-center">Próximos 5 días
                    <div  id="myCarousel" class="carousel slide mt-4" data-ride="carousel">

                        <div class="row pt-4 all justify-content-center carousel-inner">
                            <div class="col-2 col-md-2 p-1 item">
                                <p>Día 1</p>
                                <i class="fa fa-cloud pt-2"></i>
                                <p>Nieve</p>
                                <p><strong>-3°</strong></p>
                            </div>
                            <div class="row vertical2 float-right p-0 mr-1 ml-1"></div>
                            <div class="col-2 col-md-2 p-1 item">
                                <p>Día 2</p>
                                <i class="fa fa-cloud pt-2"></i>
                                <p>Nieve</p>
                                <p><strong>-3°</strong></p>
                            </div>
                            <div class="row vertical2 float-right p-0 mr-1 ml-1"></div>
                            <div class="col-2 col-md-2 p-1 item">
                                <p>Día 3</p>
                                <i class="fa fa-cloud pt-2"></i>
                                <p>Nieve</p>
                                <p><strong>-3°</strong></p>
                            </div>
                            <div class="row vertical2 float-right p-0 mr-1 ml-1"></div>
                            <div class="col-2 col-md-2 p-1 v">
                                <p>Día 4</p>
                                <i class="fa fa-cloud pt-2"></i>
                                <p>Nieve</p>
                                <p><strong>-3°</strong></p>
                            </div>
                            <div class="row vertical2 float-right p-0 mr-1 ml-1"></div>
                            <div class="col-2 col-md-2 p-1 item">
                                <p>Día 5</p>
                                <i class="fa fa-cloud pt-2"></i>
                                <p>Nieve</p>
                                <p><strong>-3°</strong></p>
                            </div>

                        </div>

                          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col col-3 col-md-3 ml-3 fondo pb-4">
            <div class="pt-5">
                <p class="text-center top">Top 5 de las zonas más frías según tus búsquedas</p>
            </div>
            <div class="row align-items-center m-0 fila">
                <div class="col-2 col-md-2 text-center"><p class="numero">1.</p></div>
                <div class="col-4 col-md-4 text-center">
                    <p class="grados">3°<p>
                </div>
                <div class="col-6 col-md-6">
                    <p class="datos mb-0">CP: <strong>08860</strong></p>
                    <p class="datos">Ciudad: <strong>Castelldefels</strong></p>
                </div>
            </div><hr class="m-0">
            <div class="row align-items-center m-0 fila">
                <div class="col-2 col-md-2 text-center"><p class="numero">2.</p></div>
                <div class="col-4 col-md-4 text-center">
                    <p class="grados">3°<p>
                </div>
                <div class="col-6 col-md-6">
                    <p class="datos mb-0">CP: <strong>08860</strong></p>
                    <p class="datos">Ciudad: <strong>Castelldefels</strong></p>
                </div>
            </div><hr class="m-0">
            <div class="row align-items-center m-0 fila">
                <div class="col-2 col-md-2 text-center"><p class="numero">3.</p></div>
                <div class="col-4 col-md-4 text-center">
                    <p class="grados">3°<p>
                </div>
                <div class="col-6 col-md-6">
                    <p class="datos mb-0">CP: <strong>08860</strong></p>
                    <p class="datos">Ciudad: <strong>Castelldefels</strong></p>
                </div>
            </div><hr class="m-0">
            <div class="row align-items-center m-0 fila">
                <div class="col-2 col-md-2 text-center"><p class="numero">4.</p></div>
                <div class="col-4 col-md-4 text-center">
                    <p class="grados">3°<p>
                </div>
                <div class="col-6 col-md-6">
                    <p class="datos mb-0">CP: <strong>08860</strong></p>
                    <p class="datos">Ciudad: <strong>Castelldefels</strong></p>
                </div>
            </div><hr class="m-0">
            <div class="row align-items-center m-0 fila">
                <div class="col-2 col-md-2 text-center"><p class="numero">5.</p></div>
                <div class="col-4 col-md-4 text-center">
                    <p class="grados">3°<p>
                </div>
                <div class="col-6 col-md-6">
                    <p class="datos mb-0">CP: <strong>08860</strong></p>
                    <p class="datos">Ciudad: <strong>Castelldefels</strong></p>
                </div>
            </div>
        </div>
    </div>


</div>


    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>

