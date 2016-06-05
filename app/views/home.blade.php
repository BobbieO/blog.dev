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
                I'm a front-end web developer based in San Antonio, TX. I am available for full-time work. I enjoy designing attractive, intuitive, user-friendly websites. Currently I am honing my CSS skills, teaching myself ReactJS, and speculatively eyeing Ruby.
            </p>
            <p class="bigger">When I'm not coding, you can find me playing MMOs, reading a book, or watching TV. As long as there are aliens, monsters, and/or explosions involved, I'm in!
            </p>
        </div>

        <hr>

        <div class="">
            <h4>Contact Me</h4>
            <a id="contact"></a>
            <div class="row social">
                <div class="col s6">
                    <a href="https://twitter.com/bobbieo134" class="twitter-follow-button" data-show-count="false">Follow @bobbieo134</a>
                </div>
                <div class="col s6">
                <a href="https://www.linkedin.com/in/bobbieo134"><img src="/img/linkedin-32-21.png"></a>
                </div>
            </div>

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="company" type="text" class="validate">
                            <label for="company">Company</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="message" class="materialize-textarea"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            <button type="submit" class="btn waves-effect waves-light">Send Email</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <a href="#top">Return to top</a>
    <div>
    </main>
@stop

 
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>