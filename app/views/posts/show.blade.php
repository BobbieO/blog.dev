@extends('layouts.master')

@section('title')
    BHO Post
@stop

@section('content')

    <main>
    <div class="container"> 
        <div class="row">
            <div class="col s12">
                <h1>Bobbie's Blog</h1>
            </div>
        </div>

        <div class="row">
            <div class="col sm8">
                <h3>{{{$post->title}}}</h3>
                <p>{{{$post->content}}}</p>
            </div>
        </div>

    </div>
    </main>
@stop