
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        var $ncp = "{{$cp}}";
        function tiempo($code){
            $.ajax({
                url: "http://api.openweathermap.org/data/2.5/forecast?q="+$code+",es&appid=a055be268d02630cdc77d26a344e67d5",
                success: function(result) {
                    console.log(result);
                    //Temperatura principal
                    ciudad = result.city.name;
                    nowlogo = result.list[0].weather[0].icon;
                    estado = result.list[0].weather[0].main;
                    grado = Math.round((result.list[0].main.temp - 273));
                    //Temperatura siguiente hora 1
                    hora = result.list[1].dt_txt;
                    horaP = hora.substr(19 -8);
                    horaFinal = horaP.substr(-8, 5);
                    nowlogo2 = result.list[1].weather[0].icon;
                    estado1 = result.list[1].weather[0].main;
                    grado1 = Math.round((result.list[1].main.temp - 273));
                    //Temperatura siguiente hora 2
                    hora1 = result.list[2].dt_txt;
                    horaP1 = hora1.substr(19 -8);
                    horaFinal1 = horaP1.substr(-8, 5);
                    nowlogo3 = result.list[2].weather[0].icon;
                    estado2 = result.list[2].weather[0].main;
                    grado2 = Math.round((result.list[2].main.temp - 273));
                    //Temperatura siguiente hora 3
                    hora2 = result.list[3].dt_txt;
                    horaP2 = hora2.substr(-8);
                    horaFinal2 = horaP2.substr(-8, 5);
                    nowlogo4 = result.list[3].weather[0].icon;
                    estado3 = result.list[3].weather[0].main;
                    grado3 = Math.round((result.list[3].main.temp - 273));
                    //Dia de la semana 1
                    week = [ "Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"]
                    dia = result.list[0].dt_txt;
                    diaFinal = dia.substr(-19, 10);
                    ndia = new Date(diaFinal);
                    semana = ndia.getDay();
                    diaNom = week[semana];
                    console.log(diaNom);
                    //Dia de la semana 2
                    dia1 = result.list[8].dt_txt;
                    diaFinal1 = dia1.substr(-19, 10);
                    ndia1 = new Date(diaFinal1);
                    semana1 = ndia1.getDay();
                    diaNom1 = week[semana1];
                    dnowlogo1 = result.list[8].weather[0].icon;
                    destado1 = result.list[8].weather[0].main;
                    dgrado1 = Math.round((result.list[8].main.temp - 273));
                    //Dia de la semana 3
                    dia2 = result.list[12].dt_txt;
                    diaFinal2 = dia2.substr(-19, 10);
                    ndia2 = new Date(diaFinal2);
                    semana2 = ndia2.getDay();
                    diaNom2 = week[semana2];
                    dnowlogo2 = result.list[12].weather[0].icon;
                    destado2 = result.list[12].weather[0].main;
                    dgrado2 = Math.round((result.list[12].main.temp - 273));
                    //Dia de la semana 4
                    dia3 = result.list[20].dt_txt;
                    diaFinal3 = dia3.substr(-19, 10);
                    ndia3 = new Date(diaFinal3);
                    semana3 = ndia3.getDay();
                    diaNom3 = week[semana3];
                    dnowlogo3 = result.list[20].weather[0].icon;
                    destado3 = result.list[20].weather[0].main;
                    dgrado3 = Math.round((result.list[20].main.temp - 273));
                    //Dia de la semana 5
                    dia4 = result.list[29].dt_txt;
                    diaFinal4 = dia4.substr(-19, 10);
                    ndia4 = new Date(diaFinal4);
                    semana4 = ndia4.getDay();
                    diaNom4 = week[semana4];
                    dnowlogo4 = result.list[29].weather[0].icon;
                    destado4 = result.list[29].weather[0].main;
                    dgrado4 = Math.round((result.list[29].main.temp - 273));
                    //Principal
                    $("#nCiudad").html(ciudad);
                    $("#nowLogo").html('<img class="plogo" src="http://openweathermap.org/img/wn/'+nowlogo+'@2x.png" alt="' + nowlogo + '">');
                    $("#estado").html(estado);
                    $("#grado").html(grado);
                    //Hora 1
                    $("#nowLogo2").html('<img class="plogo" src="http://openweathermap.org/img/wn/'+nowlogo+'.png" alt="' + nowlogo + '">');
                    $("#estado2").html(estado);
                    $("#grado2").html(grado);
                    //Hora 2
                    $("#horaFinal").html(horaFinal);
                    $("#logo1").html('<img class="plogo" src="http://openweathermap.org/img/wn/'+nowlogo2+'.png" alt="' + nowlogo2 + '">');
                    $("#estado3").html(estado1);
                    $("#grado3").html(grado1);
                    //Hora 3
                    $("#horaFinal1").html(horaFinal1);
                    $("#logo2").html('<img class="plogo" src="http://openweathermap.org/img/wn/'+nowlogo3+'.png" alt="' + nowlogo3 + '">');
                    $("#estado4").html(estado2);
                    $("#grado4").html(grado2);
                    //Hora 4
                    $("#horaFinal2").html(horaFinal2);
                    $("#logo3").html('<img class="plogo" src="http://openweathermap.org/img/wn/'+nowlogo4+'.png" alt="' + nowlogo4 + '">');
                    $("#estado5").html(estado3);
                    $("#grado5").html(grado3);
                    //Dia 1
                    $("#dia1").html(diaNom);
                    $("#dlogo1").html('<img class="plogo" src="http://openweathermap.org/img/wn/'+nowlogo+'.png" alt="' + nowlogo + '">');
                    $("#destado1").html(estado);
                    $("#dgrado1").html(grado);
                    //Dia 2
                    $("#dia2").html(diaNom1);
                    $("#dlogo2").html('<img class="plogo" src="http://openweathermap.org/img/wn/'+dnowlogo1+'.png" alt="' + dnowlogo1 + '">');
                    $("#destado2").html(destado1);
                    $("#dgrado2").html(dgrado1);
                    //Dia 3
                    $("#dia3").html(diaNom2);
                    $("#dlogo3").html('<img class="plogo" src="http://openweathermap.org/img/wn/'+dnowlogo2+'.png" alt="' + dnowlogo2 + '">');
                    $("#destado3").html(destado2);
                    $("#dgrado3").html(dgrado2);
                    //Dia 4
                    $("#dia4").html(diaNom3);
                    $("#dlogo4").html('<img class="plogo" src="http://openweathermap.org/img/wn/'+dnowlogo3+'.png" alt="' + dnowlogo3 + '">');
                    $("#destado4").html(destado3);
                    $("#dgrado4").html(dgrado3);
                    //Dia 5
                    $("#dia5").html(diaNom4);
                    $("#dlogo5").html('<img class="plogo" src="http://openweathermap.org/img/wn/'+dnowlogo4+'.png" alt="' + dnowlogo4 + '">');
                    $("#destado5").html(destado4);
                    $("#dgrado5").html(dgrado4);
                }
            });
        };

        function enviarform(){
            document.getElementById('search').addEventListener('keydown', inputCharacters);
        }
        function inputCharacters(event) {
            console.log(event);
            if (event.key === 13) {
                ocp = $('input:text[name=cp]').val();
                $.ajax({
			        url:"http://api.openweathermap.org/data/2.5/forecast?q="+ocp+",es&appid=a055be268d02630cdc77d26a344e67d5",
			        data:{'ocp':ocp},
			        success:function(result){
				        tiempo(ocp);
			        }
		        })
            }
        }
        tiempo($ncp);
    </script>
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
                    <p class="ciudad m-0">Código postal: <strong>{{$cp}}</strong></p>
                    <p class="ciudad m-0">Ciudad: <strong id="nCiudad"></strong></p>
                </div>
                <div class="col-5 col-md-5 pt-5 offset-1">
                    <form method="post" action="" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <p><img class="lupa" src="../img/search-location.png" alt="search"><input type="text" name='cp' class="p-2" id="search" placeholder="Buscar otra zona"></p>
                    </form>
                </div>
            </div>

            <div class="row pt-5 justify-content-center">
                <div class="col-2 text-center">Ahora
                    <div class="row pt-4 justify-content-center align-items-center">
                        <div class="col-6 col-md-6 p-0">
                            <div id="nowLogo"></div>
                        </div>
                        <div class="col-6 col-md-6 p-0">
                                <p id="estado" class="nombre m-0"></p>
                                <p id="grado" class="bgGrado m-0"></p>
                        </div>

                    </div>
                </div>
                <div class="row vertical float-right p-0 ml-4"></div>
                <div class="col-5 text-center">Próximas horas
                    <div class="row pt-4 all justify-content-center">
                        <div class="col-2 col-md-2 p-1">
                            <p class="mb-0">Ahora</p>
                            <div id="nowLogo2"></div>
                            <p id="estado2"></p>
                            <p><strong id="grado2"></strong></p>
                        </div>
                        <div class="row vertical2 float-right p-0 mr-1 ml-1"></div>
                        <div class="col-2 col-md-2 p-1">
                            <p id="horaFinal" class="mb-0"></p>
                            <div id="logo1"></div>
                            <p id="estado3"></p>
                            <p><strong id="grado3"></strong></p>
                        </div>
                        <div class="row vertical2 float-right p-0 mr-1 ml-1"></div>
                        <div class="col-2 col-md-2 p-1">
                            <p id="horaFinal1" class="mb-0"></p>
                            <div id="logo2"></div>
                            <p id="estado4"></p>
                            <p><strong id="grado4"></strong></p>
                        </div>
                        <div class="row vertical2 float-right p-0 mr-1 ml-1"></div>
                        <div class="col-2 col-md-2 p-1">
                            <p id="horaFinal2" class="mb-0"></p>
                            <div id="logo3"></div>
                            <p id="estado5"></p>
                            <p><strong id="grado5"></strong></p>
                        </div>
                    </div>
                </div>
                <div class="row vertical float-right p-0"></div>
                <div class="col-5 text-center">Próximos 5 días
                    <div  id="myCarousel" class="carousel slide mt-4" data-ride="carousel">

                        <div class="row pt-4 all justify-content-center carousel-inner">
                            <div class="col-2 col-md-2 p-1 item">
                                <p id="dia1" class="mb-0"></p>
                                <div id="dlogo1"></div>
                                <p id="destado1"></p>
                                <p><strong id="dgrado1"></strong></p>
                            </div>
                            <div class="row vertical2 float-right p-0 mr-1 ml-1"></div>
                            <div class="col-2 col-md-2 p-1 item">
                                <p id="dia2" class="mb-0"></p>
                                <div id="dlogo2"></div>
                                <p id="destado2"></p>
                                <p><strong id="dgrado2"></strong></p>
                            </div>
                            <div class="row vertical2 float-right p-0 mr-1 ml-1"></div>
                            <div class="col-2 col-md-2 p-1 item">
                                <p id="dia3" class="mb-0"></p>
                                <div id="dlogo3"></div>
                                <p id="destado3"></p>
                                <p><strong id="dgrado3"></strong></p>
                            </div>
                            <div class="row vertical2 float-right p-0 mr-1 ml-1"></div>
                            <div class="col-2 col-md-2 p-1 v">
                                <p id="dia4" class="mb-0"></p>
                                <div id="dlogo4"></div>
                                <p id="destado4"></p>
                                <p><strong id="dgrado4"></strong></p>
                            </div>
                            <div class="row vertical2 float-right p-0 mr-1 ml-1"></div>
                            <div class="col-2 col-md-2 p-1 item">
                                <p id="dia5" class="mb-0"></p>
                                <div id="dlogo5"></div>
                                <p id="destado5"></p>
                                <p><strong id="dgrado5"></strong></p>
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

