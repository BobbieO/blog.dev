@extends('layouts.master')

@section('title')
    BHO Example Blog   
@stop

@section('content')

    <main>
        <div class="center-align container">
            <div class="right">
                <a href="{{{action('HomeController@showButterfly')}}}"><i class="nav-arrow medium material-icons">navigate_before</i></a>
                <a href="{{{action('HomeController@showPeddler')}}}"><i class="nav-arrow medium material-icons">navigate_next</i></a>
            </div>
            <h1 class="down">Blog of Lorem</h1>
            <p>
                This is a fully functional example blog using PHP and Laravel for function, and Google Materialize and CSS for styling.
            </p>
            <p>
                The blog itself features the ability to create, edit, and delete blog posts for a master user. Guests may view the complete index of posts, select individual posts to view, or search post's titles and content for specific topics. 
            </p>
        </div>

        <div>
            <div class="container row">
                <div class="col s6 instrImg">
                <h3 class="center-align">Things to Do</h3>
                    <ol>
                        <li>Explore the site.</li>
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