<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
         <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    
        <link rel="stylesheet" type="text/css" href="css/tout/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/tout/font-awesome.min.css" media="screen" />


        <!-- Styles -->
        <style>
        
        </style>
    </head>
    
<body id="page-top">



  <!-- Header -->



        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                     @auth
                        <a style="color:#5b7dff;font-size: 4vw;" href="{{ url('/home') }}">Entrer...</a>
                    @else

                        <a style="color:#5b7dff;font-size: 2.5vw;" href="{{ route('login') }}">Se connecter</a>


                     
                            
                        @if (Route::has('register'))
                            <a style="color:#3490dc;font-size: 2.5vw;" href="{{ route('register') }}">Créer un compte</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md ">
                    <h1 style="color:black;font-size: 5rem;"><b>Blog</h1></b>


                  
                        
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input  id="email" type="hidden" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="visiteur@visiteur.visiteur" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input id="password" type="hidden" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value ="visiteur"required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                   

                        <div class="form-group row  offset-md-4">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-secondary"">
                                    Visiteur
                                </button>
                                

                              
                            </div>
                        </div>
                    </form>


                </div>

            </div>
        </div>


 
    </body>
</html>




 

