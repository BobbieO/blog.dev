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
                <p class="left-align">Added by: {{{$post->user->username}}}</p>
                <p class="left-align">{{{$post->content}}}</p>
                <p class="right-align">Posted on: {{{$post->created_at->setTimezone('America/Chicago')->format('D, F d Y @ h:i:s A')}}}</p>
            </div>
        </div>

        @if (Auth::check())
            <div class="row">
                <div class="col s6 center-align">
                    <a href="{{{ action('PostsController@edit', $post->id) }}}" class="btn waves-effect waves-light">Edit Post</a>
                </div>
                <div class="col s6 center-align">
                    <a id="delete-btn" class="btn waves-effect waves-light">Delete Post</a>
                </div>
            </div>

            {{-- This creates an empty form that points to the destroy method on the PostsController --}}
            {{-- There is nothing visible to the user here, but we can target this form with Javascript --}}
            {{ Form::open([
                'action' => ['PostsController@destroy', $post->id],
                'id'     => 'delete-post-form',
                'method' => 'DELETE',
                ]) }}
            {{ Form::close() }}
        @endif

    </div>
    </main>
@stop