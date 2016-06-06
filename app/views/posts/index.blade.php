@extends('layouts.blogMaster')

@section('title')
    BHO All Posts
@stop

@section('content')

    <main>
    <div class="container text"> 
        <div class="row">
            <div class="col s6 left-align">
                <h2>Blog of Lorem</h2>
            </div>
            <div class="col s6 right-align">
                <h5>future search box here</h5>
            </div>
        </div>

        @foreach($posts as $post)
        <div class="row">
            <div class="col s8 offset-s2 box">
                <h4 class="center-align"><a href="{{{ action('PostsController@show', $post->id) }}}">{{{$post->title}}}</a></h4>
                <p class="left-align">{{{$post->content}}}</p>
                <p class="right-align">Posted on: {{{$post->created_at->setTimezone('America/Chicago')->format('D, F d Y @ h:i:s A')}}}</p>
            </div>
        </div>
        @endforeach

        <div class="row">
            <p>{{ $posts->links() }}</p>
        </div>
    </div>
    </main>
@stop
