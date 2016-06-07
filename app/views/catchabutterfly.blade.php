@extends('layouts.master')

@section('title')
    BHO Catch a Butterfly
@stop

@section('content')
    <main>
        <div class="center-align container">
            <div class="right">
                <a href="{{{action('HomeController@showWizard')}}}"><i class="nav-arrow medium material-icons">navigate_before</i></a>
                <a href="{{{action('HomeController@showBlog')}}}"><i class="nav-arrow medium material-icons">navigate_next</i></a>
            </div>
            <h1 class="down">Catch a Butterfly</h1>
            <p>
                A non-traditional whack-a-mole game using Bootstrap and CSS for styling, and JavaScript and jQuery for function.
            </p>

            <p>
                JavaScript and jQuery allow the target butterflies to appear and disappear each second during a 30 second timer. When clicked, the user's score increases by one point. Score and timer are both displayed on the screen via jQuery. Local storage is used to recall and retain previous score, in order to compare to the current score. If the current score is higher, it becomes the new high score and displaces the old high score.
            </p>

            <p>
                CSS3 and Bootstrap are used for styling. The background was created using layering of  separate items: grass/field image, tree image, and flowers image. A custom cursor of a butterfly net appears when the cursor is moused over the target area of the screen, to increase game experience. 
            </p>
            
            <p>
                The game is compatible with laptops, tablets, and mobiles in landscape view.
            </p>
        </div>
        <div>
            <div class="container row">
                <div class="col s6 instrImg">
                <h3 class="center-align">Game Instructions</h3>
                    <ol>
                        <li>Click "Start" to begin.</li>
                        <li>Butterflies will appear and timer will start its countdown.</li>
                        <li>Click the butterfly before it disappears.</li>
                        <li>Each butterfly captured is worth one point.</li>
                        <li>When the timer runs out, the game is over.</li>
                        <li>Your personal best is stored and displayed as High Score. Try to beat it!</li>
                    </ol>
                </div>
                <div class="col s6 instrImg">
                    <h3 class="center-align">Click to Play</h3>
                    <div class="center-align">
                        <a href="http://bobbieo.github.io/catchabutterfly.html" target="_blank"><img class="image" src="/img/screenShotCaB.png"></a>
                    </div>
                </div>
            </div>
            <div class="container row">
                <div class="center-align">
                    <a class="purple-text" href="https://github.com/BobbieO/Catch-a-Butterfly" target="_blank">View code on GitHub</a>
                </div>
            </div>
        </div>
    </main>
@stop