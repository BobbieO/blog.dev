@extends('layouts.blogMaster')

@section('title')
    BHO All Posts
@stop

@section('content')

    <main>
    <div class="container text"> 
        <div class="row">
            <div class="col s12">
                <h2>Blog of Lorem</h2>
            </div>
        </div>

        @foreach($posts as $post)
        <div class="row box">
            <div class="col s8 offset-s2">
                <h4 class="center-align"><a href="{{{ action('PostsController@show', $post->id) }}}">{{{$post->title}}}</a></h4>
                <p class="left-align">{{{$post->content}}}</p>
                <p class="right-align">Written on: {{{$post->created_at}}}</p>
            </div>
        </div>
        @endforeach

    </div>
    </main>
@stop
