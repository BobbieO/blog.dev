@extends('layouts.master')

@section('title')
    Bobbie O'Connor Home
@stop
    <a id="top"></a>

@section('splash')
    <div class="home-image valign-wrapper">
        <h1 class="home-splash valign">Bobbie O'Connor</h1>
    </div>
@stop

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col s12 center-align">
                <p class="bigger">Hello and welcome to my site!</p>
            </div>
        </div>

        <div class="row">
            <div class="col s12 center-align">
                <p class="bigger">
                    I'm a front-end web developer based in San Antonio, TX. I am available for full-time work. I enjoy designing attractive, intuitive, user-friendly websites. Currently I am honing my CSS skills, reading about web design, and speculatively eyeing ReactJS.
                </p>
            </div>
        </div>     

        <div class="row">
            <div class="col s12 center-align">
                <p class="bigger">
                    When I'm not coding, you can find me playing MMOs, reading a book, or watching TV. As long as there are aliens, monsters, and/or explosions involved, I'm in!
                </p>
            </div>
        </div>       

        <hr>

        <div class="row">
            <a id="resume"></a>
            <div class="col s12 center-align">
                <h3>Skills and Resume</h3>
            </div>
        </div>

        <div class="row">
            <div class="col s12 center-align">
                <a href="/pdfs/Resume.pdf" target="_blank" class="btn">View Resume</a>
            </div>
        </div>

        <div class="row center-align valign-wrapper">
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

        <div class="row center-align valign-wrapper">
            <div class="col s3">
                <span class="valign"><img src="/img/mysql.png"></span>
            </div>
            <div class="col s3">
                <img src="/img/php.png">
            </div>
            <div class="col s3">
                <img src="/img/laravel.png">
            </div>
            <div class="col s3">
                <img src="/img/sequelpro.png">
            </div>
        </div>

        <div class="row center-align valign-wrapper">
            <div class="col s3">
                <img src="/img/gitHub.png">
            </div>
            <div class="col s3">
                <img src="/img/sublime3.png">
            </div>
            <div class="col s3">
                <img src="/img/bootstrap.png">
            </div>
            <div class="col s3">
                <img src="/img/materialize.png">
            </div>
        </div>

        <div class="row center-align">
            <div>
                <img src="/img/pixelmator.png">
            </div>
        </div>

        <div class="row">
            <div class="right-align col s12">
                <a href="#top">Return to top</a>
            </div>
        </div>

        <hr>

        <div class="row">
            <a id="contact"></a>
            <div class="col s12">
                <h3 class="center-align">Contact Me</h3>
                <div class="row social valign-wrapper">

                    <div class="col s6 valign center-align">
                        <a href="mailto:bobbie134@me.com"><i class="small material-icons">email</i>Email Me!</a>
                    </div>

                    <div class="col s6 valign center-align">
                        <a href="https://github.com/BobbieO" target="_blank"><img src="/img/smallGitHub.png">View My GitHub</a>
                    </div>
                </div>

                <div class="row social valign-wrapper">
                    <div class="col s6 valign center-align">
                        <a href="https://twitter.com/bobbieo134" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @bobbieo134</a>
                    </div>

                    <div class="col s6 valign center-align">
                        <a href="https://www.linkedin.com/in/bobbieo134" target="_blank"><img src="/img/linkedinLogo.png"></span></a>
                        <p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="right-align col s12">
                <a href="#top">Return to top</a>
            </div>
        </div>
  
    </div>
</main>
@stop

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>