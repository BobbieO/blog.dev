@extends('layouts.master')

@section('title')
    BHO More Projects
@stop

@section('content')

<main>
    <div class="row center-align">
        <h3>More Projects</h3>
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
                        A basic simple simon game using JavaScript and jQuery for function, along with Twitter Bootstrap and CSS for styling. This game is compatible with all screen sizes.  
                    </p>
                </div>
                <div class="card-action">
                    <a class="purple-text" href="http://bobbieo.github.io/simpleSimon.html" target="_blank">Play the Game</a>
                    <a class="purple-text" href="https://github.com/BobbieO/bobbieo.github.io/blob/master/simpleSimon.html" target="_blank">View code on GitHub</a>
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
                        This is an interactive web page using PHP, JavaScript, and jQuery for function, and CSS for styling. This page is best viewed on a medium sized screen.
                    </p>
                </div>
                <div class="card-action">
                    <a class="purple-text" href="#" target="_blank">Need to link to View</a>
                    <a class="purple-text" href="#" target="_blank">Need to Link GitHub</a>
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
                        This is an interactive weather map using JavaScript and jQuery for function, along with Twitter Bootstrap and CSS for styling. The map integrates Google Maps API and Open Weather API together to retrieve the weather from any given location in the world. This page is compatible with all screen sizes.
                    </p>
                </div>
                <div class="card-action">
                    <a class="purple-text" href="http://bobbieo.github.io/weather_map.html" target="_blank">View Page</a>
                    <a class="purple-text" href="https://github.com/BobbieO/bobbieo.github.io/blob/master/weather_map.html" target="_blank">View code on GitHub</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s4 col offset-s4">
            <div class="card large">
                <div class="card-image">
                    <img src="/img/screenShotParks.png">
                    <span class="card-title">National Parks</span>
                </div>
                <div class="card-content">
                    <p>
                        A full-stack database application featuring PHP for function, along with Google Materialize and CSS for styling. Users can navigate among the listed parks, and add their own parks.  
                    </p>
                </div>
                <div class="card-action">
                    <a class="purple-text" href="#" target="_blank">Need to Link</a>
                    <a class="purple-text" href="https://github.com/BobbieO/NationalParks" target="_blank">View code on GitHub</a>
                </div>
            </div>
        </div>      
    </div>
</main>
@stop


