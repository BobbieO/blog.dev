<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <title>@yield('title')</title>

    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Vidaloka' rel='stylesheet' type='text/css'>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

    <!-- menu arrow icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="/css/home.css">

</head>
<body>
    <header>
        <!-- Dropdown Structure -->
        <ul id="dropdownJava" class="dropdown-content">
            <li><a class="purple-text" href="{{{action('HomeController@showWizard')}}}">Wizard Vs Dragon</a></li>
            <li><a class="purple-text" href="{{{action('HomeController@showButterfly')}}}">Catch A Butterfly</a></li>
            <li><a class="purple-text" href="{{{action('HomeController@showBlog')}}}">Blog</a></li>
            <!-- Need to link etc -->
            <!-- <li><a class="purple-text" href="#">Put Adlister Here</a></li> -->
            <li class="divider"></li>
            <li><a class="purple-text" href="{{{action('HomeController@showMore')}}}">More Projects</a></li>
        </ul>
        
        <nav>
            <div class="nav-wrapper grey darken-3">
                <a href="{{{action('HomeController@showHome')}}}" class="brand-logo">BHO</a>
                <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="text right hide-on-med-and-down">
                    
                    <li><a href="/home#contact">Contact Me</a></li>
                    <li><a href="/home#resume">Resume</a></li>
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-button" href="#!" data-activates="dropdownJava">Projects<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li> 
                        <form>
                            <div class="input-field">
                                <input id="search" type="search" required>
                                <label for="search"><i class="material-icons">search</i></label>
                                <i class="material-icons">close</i>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            </nav>
            <!-- for mobile view -->
            <ul class="side-nav" id="mobile">
                <li> 
                    <form>
                        <div class="input-field">
                          <input id="search" type="search" required>
                          <label for="search"><i class="material-icons">search</i></label>
                          <i class="material-icons">close</i>
                        </div>
                      </form>
                </li>
                <li><a class="purple-text"href="/home#contact">Contact Me</a></li>
                <li><a class="purple-text"href="/home#resume">Resume</a></li>
                <li class="divider"></li>
                <li><a class="purple-text" href="{{{action('HomeController@showWizard')}}}">Wizard Vs Dragon</a></li>
                <li><a class="purple-text" href="{{{action('HomeController@showButterfly')}}}">Catch A Butterfly</a></li>
                <li><a class="purple-text" href="{{{action('HomeController@showBlog')}}}">Blog</a></li>
                <li><a class="purple-text" href="{{{action('HomeController@showMore')}}}">More Projects</a></li>
            </ul>


    </header>
    @yield('splash')


    @yield('content')



    <footer class="page-footer grey darken-3">
        <div class="link container"></div>
        <p>&#169; 2016 Bobbie O'Connor</p>
    </footer>


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script src="/js/home.js"></script>
</body>
</html>