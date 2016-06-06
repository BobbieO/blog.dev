@extends('layouts.master')

@section('title')
    Bobbie O'Connor Home
    <a id="top"></a>
@stop

@section('splash')
    <div class="home-image valign-wrapper">
        <h1 class="home-splash valign">Bobbie O'Connor</h1>
    </div>
@stop

@section('content')
<main>
    <div class="container">
        <div class="center-align">
            <p class="bigger">Hello and welcome to my site!</p>
            <p class="bigger">
                I'm a front-end web developer based in San Antonio, TX. I am available for full-time work. I enjoy designing attractive, intuitive, user-friendly websites. Currently I am honing my CSS skills, reading about web design, and speculatively eyeing ReactJS.
            </p>
            <p class="bigger">
                When I'm not coding, you can find me playing MMOs, reading a book, or watching TV. As long as there are aliens, monsters, and/or explosions involved, I'm in!
            </p>
        </div>

        <hr>

        <div>
            <h3>Contact Me</h3>
            <a id="contact"></a>
            <div class="row social">
                <div class="col s6">
                    <a href="https://twitter.com/bobbieo134" class="twitter-follow-button" data-show-count="false">Follow @bobbieo134</a>
                </div>

                <div class="col s6">
                    <a href="https://www.linkedin.com/in/bobbieo134"><img src="/img/linkedin-32-21.png"></a>
                </div>
            </div>

            <div class="row social">
                <div class="col s6">
                    <p>Email will go here</p>
                </div>

                <div class="col s6">
                    <p>github</p>
                </div>
            </div>
         
        </div>
    <a href="#top">Return to top</a>
    <div>
</main>
@stop

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>