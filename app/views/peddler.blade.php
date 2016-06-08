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
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                 proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
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