
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        margin: 0;
    }


    .post-container{
        background-color: #FFF;
        position: relative;
        overflow: hidden;
        padding: 20px;
        display: block;
        box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7), -1px 2px 20px rgba(255, 255, 255, 0.6) inset;
        margin: 20px 40px 10px 40px;
    }

    img {
                width: 100px;
                height: 100px;
                margin: 0 0 20 38%;
            }

</style>




@extends('posts.main')

@section('content')
  
    
@if (Auth::user()->name == "Visiteur")
<a></a>
@else
 @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                      <a style='font-size: 1.5vw;margin-left: 35%;'   href="{{ URL::action('HomeController@create') }}"> Créer un article</a>
                       @else
                       <a> mdr</a>
                    @endauth
                </div>
            @endif

@endif


    @foreach($posts as $post)
  
        <div class="post-container">
            <h3> <a href="{{ URL::action('HomeController@view', $post->slug) }}">{{ $post->title }}</a>

            </h3>
             <img class="img"
     src="http://www.blog.romaingoulet.fr/images/{{ $post->image }}" 
     alt="{{ $post->image }}" />
            <p>{{ $post->content1 }}</p>
            

            @foreach($users as $u)
                @if ($u->id == $post->user_id)
                    <div>Par <b>{{ $u->name }}</b> le {{ $post->created_at }}</div>
                    
                     @endif
            @endforeach






        </div>

    @endforeach





@endsection

                
                
              
                
                


        
        



