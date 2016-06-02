@extends('layouts.master')

@section('title')
    BHO All Posts
@stop

@section('content')

    <main>
    <div class="container"> 
        <div class="row">
            <div class="col s12">
                <h1>Bobbie's Blog</h1>
            </div>
        </div>

        @foreach($posts as $post)
        <div class="row">
            <div class="col s12">
                <h3 class="text-center">{{{$post->title}}}</h3>
                <p>{{{$post->content}}}</p>
            </div>
        </div>
        @endforeach

    </div>
    </main>
@stop
