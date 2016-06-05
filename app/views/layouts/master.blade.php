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
          <li><a class="purple-text" href="{{{action('HomeController@showSimpleSimon')}}}">Simple Simon</a></li>
          <li><a class="purple-text" href="{{{action('HomeController@showWeatherMap')}}}">Weather Map</a></li>
          <li><a class="purple-text" href="{{{action('HomeController@showCalculator')}}}">Basic Calculator</a></li>
          <li class="divider"></li>

          <li><a class="purple-text" href="{{{action('HomeController@showRandomQuest')}}}">Random Quest Generator</a></li>
          <li class="divider"></li>

          <li><a class="purple-text" href="{{{action('HomeController@showBlog')}}}">Blog</a></li>
          <li class="divider"></li>

          <li><a class="purple-text" href="{{{action('HomeController@showHome')}}}">Future Projects</a></li>
        </ul>

        <nav>
            <div class="nav-wrapper grey darken-3">
                <a href="{{{action('HomeController@showHome')}}}" class="brand-logo">BHO</a>
                <ul class="text right"> 
                    <li><a href="#contact">Contact Me</a></li>
                    <li><a href="{{{action('HomeController@showResume')}}}">Resume</a></li>
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-button" href="#!" data-activates="dropdownJava">Projects<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>
          </nav>

    @yield('splash')

    </header>


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