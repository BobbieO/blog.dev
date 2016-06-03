@extends('layouts.master')

@section('title')
    BHO Weather Map
@stop

@section('content')
    <main>
        <div class="center-align container">
            <div class="right">
                <a href="{{{action('HomeController@showSimpleSimon')}}}"><i class="nav-arrow medium material-icons">navigate_before</i></a>
                <a href="{{{action('HomeController@showCalculator')}}}"><i class="nav-arrow medium material-icons">navigate_next</i></a>
            </div>
            <h1>Weather Map</h1>
            <p>
                This is an interactive weather map using JavaScript and jQuery for function, and Bootstrap CSS for styling. The map integrates Google Maps API and Open Weather API together to retrieve the weather from any given location in the world.
            </p>

            <p>
                This map features a Google Map with a draggable marker. A listener event registers the latitutde and longitude of the end location of the marker, which is then used to gather the weather via the Open Weather API. The information is then dynamically displayed below the map. 
            </p>

            <p>
                This application is compatible with all screen sizes.
            </p>

        </div>

        <div>
            <div class="container row">
                <div class="col s6 instrImg">
                <h3 class="center-align">Map Instructions</h3>
                    <ol>
                        <li>Click and hold on the map marker.</li>
                        <li>Drag to the desired location.</li>
                        <li>The + and - will zoom the map in and out.</li>
                    </ol>
                </div>
                <div class="col s6 instrImg">
                    <h3 class="center-align">Click to View</h3>
                    <div class="center-align">
                        <a href="http://bobbieo.github.io/weather_map.html" target="_blank"><img src="/img/screenShotWeather.png"></a>
                    </div>
                </div>
            </div>
            <div class="container row">
                <div class="center-align">
                    <a class="purple-text" href="https://github.com/BobbieO/bobbieo.github.io/blob/master/weather_map.html" target="_blank">View code on GitHub</a>
                </div>
            </div>
        </div>

    </main>
@stop
