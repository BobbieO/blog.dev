@extends('layouts.master')

@section('title')
    BHO Peddler's Corner   
@stop

@section('content')

    <main>
        <div class="center-align container">
            <div class="right">
                <a href="{{{action('HomeController@showBlog')}}}"><i class="nav-arrow medium material-icons">navigate_before</i></a>
                <a href="{{{action('HomeController@showMore')}}}"><i class="nav-arrow medium material-icons">navigate_next</i></a>
            </div>
            <h1 class="down">Peddler's Corner</h1>
            <p>
                Peddler's Corner is full-stack modified Craigslist clone completed in a group of three people as part of the Codeup program. The sites uses Twitter Bootstrap and CSS for styling, and PHP and MySQL for functionality and database management.
            </p>
            <p>
                This application allows for both registered and non-registered users to browse the full site, including individual items's pages as well as the full index of available services and merchandise. Only registered users may post items for sale. The site features user sign up, login, and logout, as well as an administrative user who has powers over the whole site. Users may create, edit, and delete thier own ads, and the administrator can delete any user's ad. 
            </p>
        </div>

        <div>
            <div class="container row">
                <div class="col s6 instrImg">
                <h3 class="center-align">Instructions</h2>
                    <ol>
                        <li>Stuff.</li>
                    </ol>
                </div>
                <div class="col s6 instrImg">
                    <h3 class="center-align">stuff</h3>
                    <div class="center-align">
                        <a href="#" target="_blank"><img class="image" src="#"></a>
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