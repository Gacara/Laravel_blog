
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
                width: 250px;
                height:250px;
                margin: 0 0 20 28%;
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
            
            h1{
                font-weight: bold;
            }
            .m-b-md {
                margin-bottom: 30px;
            }

           
            .perso{
                margin-left:95%;
                color:blue;
                margin-top:-15px;
            }

        </style>

        @extends('posts.main')


@section('meta_title')
{{ $post->title }}
@stop

@section('meta_description')
{{ $post->description }}
@stop

@section('meta_author')
    @foreach($users as $u)
                @if ($u->id == $post->user_id){{ $u->name }}
                @endif
            @endforeach
@stop


        @section('content')

            <div style='margin-left: 35%;' class="title m-b-md">
                    POST
                </div>
    


        <div class="post-container">
        <h1> <b>{{ $post->title }}</b> </h1>
         <h2> {{ $post->soustitre }} </h2>
         <p>{{ $post->content1 }}</p>
         <img class="img"
     src="http://www.blog.romaingoulet.fr/images/{{ $post->image }}" 
     alt="{{ $post->image }}" />
         <p>{{ $post->content2 }}</p>
        



            @foreach($users as $u)
                @if ($u->id == $post->user_id)
                    <h3>Par <b>{{ $u->name }}</b> le {{ $post->created_at }}</h3>

                @endif
            @endforeach


      </div>
                <div class="post-container">
                    <h2> Commentaires :</h2>

                    <br>

                    <?php $coms = $comments; ?>


                    @foreach($comments as $c)
                        @if ($c->post_id == $post->id)
                            <h3>{{ $c->content }}</h3>


                            @foreach($users as $us)
                                @if ($us->id == $c->author)
                                    <p>de <b>{{ $us->name }}</b> le  {{ $c->created_at }}</p>

                                @endif
                            @endforeach


                            @if (Auth::id() ==$c->author)

                                {{ Form::open([ 'url'=> URL::action('HomeController@comd', $c->id ), 'method' => 'DELETE'])  }}
                                {{ Form::submit('X', ['class' => 'btn perso']) }}
                                {{ Form::close() }}



                            @endif
                        <br>
                        @endif
                    @endforeach







                        <div class="form-group">
                            {{ Form::open(['url'=> URL::action('HomeController@ccom', $post->id), 'method' => 'POST'])    }}
            @if (Auth::user()->name == "Visiteur")
<a></a>
@else
                            {{ Form::textarea('content', null, ['class' => 'form-control']) }}
                            <br>
                
                            {{ Form::submit('Commenter', ['class' => 'btn btn-primary btn-lg btn-block']) }}

 @endif
                            {{ Form::hidden('author', Auth::id() )}}
                            {{ Form::hidden('post_id', $post->id )}}

                            {{ Form::close() }}

                        </div>

                    </form>


                    <br><br> &nbsp;&nbsp;








                </div>

                @if (Auth::id() ==$post->user_id)


                    <div class="post-container">
                    <br>

                    <a style='font-size: 1.5vw;' href="{{ URL::action('HomeController@edit', $post->id) }}" class="btn btn-primary btn-lg btn-block" >Editer</a>
                    <br>
                <br>

                    {{ Form::open([ 'url'=> URL::action('HomeController@delete', $post ), 'method' => 'DELETE'])  }}
                    {{ Form::submit('Supprimer', ['class' => 'btn btn-primary btn-lg btn-block']) }}
                    {{ Form::close() }}

                    </div>
                @endif


               
            </div>

            <a style='font-size: 1.5vw;margin-left: 35%;' href="{{ URL::action('HomeController@index') }}"> Retour à la liste</a>

        </div>
        




        @endsection

