@extends('layouts.master')

@section('title')
    BHO Wizard
@stop

@section('content')
    <main>
        <div class="center-align container">
            <div class="right">
                <a href="{{{action('HomeController@showButterfly')}}}"><i class="nav-arrow medium material-icons">navigate_next</i></a>
            </div>
            
            <h1 class="down">Wizard Vs Dragon</h1>
            <p>
                An interactive web page using JavaScript and jQuery for function, and CSS3 and Bootstrap to assist in styling.
            </p>

            <p>
                JavaScript and jQuery allow the page appearance to change when the correct code is entered on the start screen. When entered, the page view changes to a fantasy scene via Javascript and jQuery, and a short audio file plays to indicate success. Key codes tied to a keydown event allow for character movement and actions, the instructions for which are each displayed on the screen. A randomizer determines which character carries out the shooting event. JavaScript and CSS3 then make a fireball appear near the designated character, and animates the fireball toward the opposing image. JavaScript then replaces that character image with an explosion image.
            </p>

            <p>
                The page is best viewed on medium-sized screens with keyboard functionality.
            </p>
        </div>
        <div>
            <div class="container row">
                <div class="col s6 instrImg">
                <h3 class="center-align">Page Instructions</h3>
                    <ol>
                        <li>Enter the <a class="linkColor" href="https://en.wikipedia.org/wiki/Konami_Code" target="_blank">Konami Code</a> to start.</li>
                        <li>If successful, a tone sounds and the scene changes.</li>
                        <li>Use the "a" and "d" keys to move the wizard.</li>
                        <li>Use the spacebar key to shoot.</li>
                        <li>Either the wizard or the dragon will shoot a fireball.</li>
                        <li>Someone explodes!</li>
                    </ol>
                </div>
                <div class="col s6 instrImg">
                    <h3 class="center-align">Click to View</h3>
                    <div class="center">
                        <a href="http://bobbieo.github.io/wizard.html" target="_blank"><img src="/img/screenShotWizard.png"></a>
                    </div>
                </div>
            </div>
            <div class="container row">
                <div class="center-align">
                    <a class="purple-text" href="https://github.com/BobbieO/bobbieo.github.io/blob/master/wizard.html" target="_blank">View code on GitHub</a>
                </div>
            </div>
        </div>
    </main>
@stop
