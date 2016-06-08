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
                <div class="col s12">
                    <h3 class="center-align">Screenshot Gallery</h3>
                </div>
            </div>
            
            <div class="slider row center-align">
            <div class="col s8 col offset-s2">
                <ul class="slides">
                    <li>
                        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
                        <div class="caption left-align">
                            <h3>Left Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
                        <div class="caption right-align">
                            <h3>Right Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                </ul>
            </div>    
            </div>
  
            <div class="container row">
                <div class="center-align col s12">
                    <a class="purple-text" href="https://github.com/Peddlers-Corner/adlister.dev" target="_blank">View code on GitHub</a>
                </div>
            </div>
        </div>

    </main>
@stop