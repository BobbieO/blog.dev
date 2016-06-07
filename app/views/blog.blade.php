@extends('layouts.master')

@section('title')
    BHO Example Blog   
@stop

@section('content')

    <main>
        <div class="center-align container">
            <div class="right">
                <a href="{{{action('HomeController@showButterfly')}}}"><i class="nav-arrow medium material-icons">navigate_before</i></a>
                <a href="{{{action('HomeController@showMore')}}}"><i class="nav-arrow medium material-icons">navigate_next</i></a>
            </div>
            <h1 class="down">Blog of Lorem</h1>
            <p>
                This is a fully functional example blog using PHP and Laravel for function, and Materialize and CSS for styling.
            </p>
            <p>
                This blog is an application within the larger portfolio project you are viewing now. The blog itself features the ability to create, edit, and delete blog posts for a master user. Guests may view the complete index of posts, or select individual posts to view. 
            </p>
        </div>

        <div>
            <div class="container row">
                <div class="col s6 instrImg">
                <h3 class="center-align">Instructions</h2>
                    <ol>
                        <li>Admire the many lorems.</li>
                    </ol>
                </div>
                <div class="col s6 instrImg">
                    <h3 class="center-align">Click to View</h3>
                    <div class="center-align">
                        <a href="{{{action('PostsController@index')}}}" target="_blank"><img class="image" src="/img/screenShotBlog.png"></a>
                    </div>
                </div>
            </div>
            <div class="container row">
                <div class="center-align">
                    <a class="purple-text" href="https://github.com/BobbieO/blog.dev" target="_blank">View code on GitHub</a>
                </div>
            </div>
        </div>

    </main>
@stop