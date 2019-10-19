<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Upload</title>

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


             .button, input[type="submit"]{
      display: inline-block;
      padding: 8px 20px;
      background-color: #AAAAAA;
      text-decoration: none;
      text-transform: uppercase;
      border: none;
   }

   .button:hover, .button:focus, .button:active,
   input[type="submit"]:hover, input[type="submit"]:focus, input[type="submit"]:active{
      background-color: #3399FF;
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

    <div class="panel panel-primary">

      <div class="panel-heading"><h2>Upload une image</h2></div>

      <div class="panel-body">

   

        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

        </div>

        <img src="images/{{ Session::get('image') }}">

        @endif

  

        @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

  

        <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="row">

  

                <div class="col-md-6">

                    <input type="file" name="image" class="form-control">

                </div>

   

                <div class="col-md-6">

                    <button type="submit" class="btn btn-success">Upload</button>

                </div>

   

            </div>

        </form>

  
 @endif
      </div>
        <a style='font-size: 1.5vw;margin-left: 35%;' href="{{ URL::action('HomeController@index') }}"> Retour à la liste</a>
    </div>

</div>
  
</body>

  


</html>