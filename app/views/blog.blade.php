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
                This blog features the ability to add, edit, and delete blog posts. Posts can be viewed together or separately on an individual page. 
            </p>
        </div>

        <div>
            <div class="container row">
                <div class="col s6 instrImg">
                <h3 class="center-align">Instructions</h2>
                    <ol>
                        <li>Admire the many lorems.</li>
                        <li>Leave a comment!</li>
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
                    <a class="purple-text" href="#" target="_blank">View code on GitHub</a>
                </div>
            </div>
        </div>

    </main>
@stop