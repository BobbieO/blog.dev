@extends('layouts.master')

@section('title')
    BHO Basic Calculator
@stop

@section('content')

    <main>
        <div class="center-align container">
            <div class="right">
                <a href="{{{action('HomeController@showWeatherMap')}}}"><i class="nav-arrow medium material-icons">navigate_before</i></a>
                <a href="{{{action('HomeController@showRandomQuest')}}}"><i class="nav-arrow medium material-icons">navigate_next</i></a>
            </div>
            <h1 class="down">Basic Calculator</h1>
            <p>
                This calculator uses JavaScript and jQuery to complete basic addition, subtraction, multiplication, and division with whole number and decimals.
            </p>

            <p>
                A click listener event is attached to each button and operator in order to enter it into the correct field. A function determines if the decimal has been entered, preventing it from being entered multiple times in the same field. The C button clears all fields and resets the booleans in order to allow new input into the proper fields.
        </div>

        <div>
            <div class="container row">
                <div class="col s6 instrImg">
                <h3>Calculator Instructions</h3>
                    <ol>
                        <li>Click on a number to enter it into the left field.</li>
                        <li>Click on +, -, *, or / to enter an operator.</li>
                        <li>Click on another number to enter it into the right field.</li>
                        <li>Click on = to complete the calculation.</li>
                        <li>Click on C to clear the fields and start over.</li>
                    </ol>
                </div>
                <div class="col s6 instrImg">
                    <h3 class="center-align">Click to View</h3>
                    <div class="center-align">
                        <a href="http://bobbieo.github.io/calculator.html" target="_blank"><img class="image" src="/img/screenShotCalc.png"></a>
                    </div>
                </div>
            </div>
            <div class="container row">
                <div class="center-align">
                    <a class="purple-text" href="https://github.com/BobbieO/bobbieo.github.io/blob/master/calculator.html" target="_blank">View code on GitHub</a>
                </div>
            </div>
        </div>
    </main>
    
@stop