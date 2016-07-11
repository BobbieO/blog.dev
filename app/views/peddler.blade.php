@extends('layouts.master')

@section('title')
    BHO Peddler's Corner   
@stop

@section('content')
    <main>
        <div class="center-align container">
            <div class="right">
                <a href="{{{action('HomeController@showBlog')}}}"><i class="nav-arrow medium material-icons">navigate_before</i></a>
                <a href="{{{action('HomeController@showFlit')}}}"><i class="nav-arrow medium material-icons">navigate_next</i></a>
            </div>
            <h1 class="down">Peddler's Corner</h1>
            <p>
                Peddler's Corner is a full-stack modified Craigslist clone completed in a group of three people as part of the Codeup program. The site uses Bootstrap and CSS for styling, and PHP and MySQL for functionality and database management. I was responsible for site design and user interface, as well as sharing back-end and database tasks.
            </p>
            <p>
                This application allows for both registered and non-registered users to browse the full site, including individual items pages as well as the full index of available services and merchandise. Only registered users may post items for sale. The site features user sign up, login, and logout, as well as an administrative user who has powers over the whole site. Users may create, edit, and delete their own ads, and the administrator can delete any user's ad. 
            </p>
        </div>

        <div>
            <div class="container row">
                <div class="col s6 instrImg">
                <h3 class="center-align">Site Instructions</h3>
                    <ol>
                        <li>Explore the site.</li>
                        <li>Read the clever ads.</li>
                        <li>Create your own account and ad.</li>
                    </ol>
                </div>
                <div class="col s6 instrImg">
                    <h3 class="center-align">Click to View</h3>
                    <div class="center-align">
                        <a href="http://peddlerscorner.bobbieoconnor.me/" target="_blank"><img class="image" src="/img/screenShotPeddler.jpg"></a>
                    </div>
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