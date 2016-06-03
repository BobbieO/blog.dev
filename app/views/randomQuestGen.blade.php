@extends('layouts.master')

@section('title')
    BHO Random Quest Generator
@stop

@section('content')

    <main>
        <div class="center-align container">
            <div class="right">
                <a href="{{{action('HomeController@showCalculator')}}}"><i class="nav-arrow medium material-icons">navigate_before</i></a>
                <a href="{{{action('HomeController@showBlog')}}}"><i class="nav-arrow medium material-icons">navigate_next</i></a>
            </div>
            <h1>Random Quest Generator</h1>
            <p>
                This is an interactive web page using PHP, JavaScript, and jQuery for function, and CSS for styling.
            </p>
            <p>
                This page features changing intro text to explain the task, using JavaScript and jQuery. A listener event registers the scroll click, which replaces the character and scroll images with a larger, open scroll image containing the php-generated random text. All text is hidden and revealed via JavaScript. A listener attached to the New Quest button reloads the page to begin the intro text again and generate a new random quest.
            </p>
        </div>

        <div>
            <div class="container row">
                <div class="col s6 instrImg">
                <h3 class="center-align">Instructions</h3>
                    <ol>
                        <li>Wait for the characters to finish talking.</li>
                        <li>Click the scroll to see your quest.</li>
                        <li>A random number of varied items will appear on the scroll.</li>
                        <li>Click New Quest to start again!</li>
                    </ol>
                </div>
                <div class="col s6 instrImg">
                    <h3 class="center-align">Click to View</h3>
                    <div class="center-align">
                        <a href="#" target="_blank"><img src="/img/screenShotRandQuest.png"></a>
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