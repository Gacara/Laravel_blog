
<style>
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



     @if ($post->id) <h1>Editer l'article</h1>
     @else <h1>Créer un article</h1>
     @endif
    

   




      {{ Form::open([ 'url'=>$post->id ? URL::action('HomeController@update', $post ) : URL::action('HomeController@create', $post), 'method' =>$post->id ? 'POST' : 'PUT'])}}

   {{ Form::label('title', 'Titre :') }} {{ Form::text('title', $post->title) }}<br>
   {{ Form::label('description', 'Description meta properties:') }} {{ Form::text('description', $post->description) }} <br>
   {{ Form::label('soustitre', 'Sous titre :') }} {{ Form::text('soustitre', $post->soustitre) }} <br>


    {{ Form::label('image', 'Nom de l\'image upload :') }} {{ Form::text('image', $post->image) }} <br>
   {{ Form::label('content1', 'Paragraphe 1 :') }} {{ Form::textarea('content1', $post->content1) }} <br>
   {{ Form::label('content2', 'Paragraphe 2 :') }} {{ Form::textarea('content2', $post->content2) }} <br>
   {{ Form::hidden('user_id', Auth::id() )}}


   {{ Form::submit() }}
       {{ Form::close() }} 
   
       <br><br> &nbsp;&nbsp;
       
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
        
      


        <a style='color: black; font-size: 1.5vw;margin-left: 35%;' href="{{ URL::action('HomeController@index') }}">Retour à la liste</a>

@endsection