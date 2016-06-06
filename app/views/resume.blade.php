@extends('layouts.master')

@section('title')
    BHO Visual Resume
@stop

@section('content')
   
<main>
<div class="container">
    <div class="row">
        <div class="col s12 center-align">
            <h3>Skills and Resume</h3>
        </div>
    </div>

    <div class="row">
        <div class="col s12 center-align">
            <button type="submit" class="btn waves-effect waves-light">Download Resume</button>
        </div>
    </div>

    <div class="row valign-wrapper">
        <div class="col s3">
            <img src="/img/html5.png">
        </div>
        <div class="col s3">
            <img src="/img/CSS3.png">
        </div>
        <div class="col s3">
            <img src="/img/js.jpeg">
        </div>
        <div class="col s3">
            <span class="valign"><img src="/img/jquery.png"></span>
        </div>
    </div>

    <div class="row valign-wrapper">
        <div class="col s3">
            <span class="valign"><img src="/img/mysql.png"></span>
        </div>
        <div class="col s3">
            <img src="/img/php.jpeg">
        </div>
        <div class="col s3">
            <img src="/img/laravel.png">
        </div>
        <div class="col s3">
            <img src="/img/sequelpro.jpeg">
        </div>
    </div>

    <div class="row valign-wrapper">
        <div class="col s3">
            <img src="/img/gitHub.png">
        </div>
        <div class="col s3">
            <img src="/img/sublime3.jpg">
        </div>
        <div class="col s3">
            <img src="/img/bootstrap.jpeg">
        </div>
        <div class="col s3">
            <img src="/img/materialize.jpeg">
        </div>
    </div>

    <div class="row">
        <div class="center-align">
            <img src="/img/pixelmator.jpeg">
        </div>
    </div>

</div>
</main>

@stop
