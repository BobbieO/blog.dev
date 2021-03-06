@extends('layouts.master')

@section('title')
    BHO More Projects
@stop

@section('content')

<main>
<div class="container">
    <div class="row center-align">
        <h1 class="down">More Projects</h1>
    </div>
    <div class="row">
        <div class="col s4">
            <div class="card large">
                <div class="card-image">
                    <img src="/img/screenShotSimon.png">
                    <span class="card-title">Simple Simon</span>
                </div>
                <div class="card-content">
                    <p>
                        A basic simple simon game using JavaScript and jQuery for function, along with Bootstrap and CSS for styling. This game is compatible with all screen sizes.  
                    </p>
                </div>
                <div class="card-action center-align">
                    <a class="purple-text" href="http://bobbieo.github.io/simpleSimon.html" target="_blank">Play the Game</a>
                    <a class="purple-text" href="https://github.com/BobbieO/Simple-Simon" target="_blank">GitHub</a>
                </div>
            </div>
        </div>

        <div class="col s4">
            <div class="card large">
                <div class="card-image">
                    <img src="/img/screenShotRandQuest.png">
                    <span class="card-title">Random Quest Generator</span>
                </div>
                <div class="card-content">
                    <p>
                        This is an interactive web page using PHP, JavaScript, and jQuery for function, and CSS for styling. This page is best viewed on a medium sized screen or mobile in landscape view.
                    </p>
                </div>
                <div class="card-action center-align">
                    <a class="purple-text" href="/randomQuestGenerator.php" target="_blank">View Page</a>
                    <a class="purple-text" href="https://github.com/BobbieO/Codeup-Web-Exercises/blob/master/public/server-name-generator.php" target="_blank">GitHub</a>
                </div>
            </div>
        </div>

        <div class="col s4">
            <div class="card large">
                <div class="card-image">
                    <img src="/img/screenShotWeather.png">
                    <span class="card-title">Weather Map</span>
                </div>
                <div class="card-content">
                    <p>
                        An interactive weather map using JavaScript and jQuery, with Bootstrap and CSS for styling. Google Maps API and Open Weather API together retrieve the weather from any location in the world. Compatible with all screen sizes.
                    </p>
                </div>
                <div class="card-action center-align">
                    <a class="purple-text" href="http://bobbieo.github.io/weather_map.html" target="_blank">View Page</a>
                    <a class="purple-text" href="https://github.com/BobbieO/bobbieo.github.io/blob/master/weather_map.html" target="_blank">GitHub</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s4 col offset-s4">
            <div class="card large">
                <div class="card-image">
                    <img src="/img/screenShotParks.png">
                    <span class="card-title"></span>
                </div>
                <div class="card-content">
                    <p>
                        A full-stack database application featuring PHP for function, along with Materialize and CSS for styling. Users can navigate among the listed parks, and add their own parks.  
                    </p>
                </div>
                <div class="card-action center-align">
                    <a class="purple-text" href="https://github.com/BobbieO/Codeup-Web-Exercises/blob/master/public/national_parks.php" target="_blank">GitHub</a>
                </div>
            </div>
        </div>      
    </div>
</div>
</main>
@stop


