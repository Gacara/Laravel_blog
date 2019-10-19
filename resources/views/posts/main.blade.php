<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

<title>@yield('meta_title', 'Blog de Romain Goulet')</title>
<meta name="description" content="@yield('meta_description', 'Articles')" />	
 <meta name="author" content="@yield('meta_author', 'Romain Goulet')">


  


    <link href="{{ asset('css/clean-blog.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background-color: #000000;">
    <div class="container">
        <a class="navbar-brand" href="/" >HOME</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::action('HomeController@index') }}">Blog</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="/image-upload">Upload</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">Profil</a>
                </li>

                 @if (Auth::user()->name == "Visiteur")
                 <li class="nav-item">
                    <a class="nav-link" href="{{ URL::action('HomeController@delog') }}">Créer un compte</a>
                </li>
                 @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::action('HomeController@delog') }}">Logout</a>
                </li>
                 @endif



                <li style="color:white;font-size: 1.2vw;margin-left:1vw; "><?php echo Auth::user()->name ?></li>
            </ul>
        </div>
    </div>
</nav>



<!-- Main Content -->
<div class="container" style="padding-top: 100px;">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">

                @yield('content')


            </div>
    </div>
</div>
</div>


<!-- Footer -->
<footer>
    <div class="container">

    </div>
</footer>



</body>

</html>