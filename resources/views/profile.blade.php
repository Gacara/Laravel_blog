<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profil</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
         <link rel="stylesheet" type="text/css" href="css/tout/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/tout/font-awesome.min.css" media="screen" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
   
  @extends('posts.main')

@section('content')
<br> <br><br><br>
<div class="container">

   @if (Auth::user()->name == "Visiteur")
<a>Veuillez vous connecter pour accéder à cette fonctionnalité !</a>
<br><br><br>
@else

        <div class="flex-center position-ref full-height">
           
      
            <div class="content">
                <div class="title m-b-md">
                    <h1>Profil</h1>
                </div>
                
    <p style="font-size: 2vw;color:black;">
        @if (Auth::user()->name == "Visiteur")
         <?php echo  Auth::user()->name;?><br>
@else
        Nom : <?php echo  Auth::user()->name;?><br>
        ID : <?php echo  Auth::user()->id;?> <br>
        Email : <?php echo  Auth::user()->email;?>
@endif

    </p>


@endif





                <br>
                <a style='font-size: 1.5vw;margin-left: 35%;' href="{{ URL::action('HomeController@index') }}"> Retour à la liste</a>
            </div>
        </div>
    </body>
</html>
