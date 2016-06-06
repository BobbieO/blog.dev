@extends('layouts.blogMaster')

@section('title')
    BHO Post
@stop

@section('content')

    <main>
    <div class="container text"> 
        <div class="row">
            <div class="col s12">
                <h2>Blog of Lorem</h2>
            </div>
        </div>

        <div class="row">
            <div class="col s8 offset-s2 box">
                <h3 class="center-align post-title">{{{$post->title}}}</h3>
                <p class="left-align">{{{$post->content}}}</p>
                <p class="right-align">Posted on: {{{$post->created_at->setTimezone('America/Chicago')->format('D, F d Y @ h:i:s A')}}}</p>
            </div>
        </div>

        <div class="row">
            <div class="col s12 center-align">
                <a href="{{{ action('PostsController@edit', $post->id) }}}" class="btn waves-effect waves-light">Edit Post</a>
            </div>
        </div>

    </div>
    </main>
@stop