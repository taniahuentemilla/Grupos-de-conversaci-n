<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body{
                background-color:#00CED1;
            }
            header{
                background-color:#00CED1;
                margin-top: 0px;
            }
            .titulo{
                margin-left: 500px;
                
            }
        </style>
        <title>Laravel</title>
        <link rel= "stylesheet" type= "text/css" href="css/estilos.css">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
    <div class="titulo">Colegio de Ayudantes</div>
    <footer> Derechos reservado | Domain- Aprendizaje Profundo</footer>
    <body>
          <div id="footer">
       
          </div> 

        <header id="main-header">
        
        <a id="logo-header" href="#">

            <p class="aviso">   Domain         ¿Quienes somos?       Ir a UCTemuco  </p>
 
		</header><!-- / #main-header -->




        <div class="flex-center position-ref full-height">
            
                <div class="top-right links">
                    @if(session()->get('email'))
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
						<a href="{{ route('livestream') }}">Livestream</a>
                    @endif
                </div>
				@yield('content')
            

            
        </div>
    </body>
</html>
