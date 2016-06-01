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
          <li><a class="purple-text" href="/wizard.php">Wizard Vs Dragon</a></li>
          <li><a class="purple-text" href="/catchabutterfly.php">Catch A Butterfly</a></li>
          <li><a class="purple-text" href="/simpleSimon.php">Simple Simon</a></li>
          <li><a class="purple-text" href="/weathermap.php">Weather Map</a></li>
          <li><a class="purple-text" href="/basicCalculator.php">Basic Calculator</a></li>
          <li class="divider"></li>

          <li><a class="purple-text" href="/randomQuestGen.php">Random Quest Generator</a></li>
          <li class="divider"></li>

          <li><a class="purple-text" href="/index.php">Future Projects</a></li>
        </ul>

        <nav>
            <div class="nav-wrapper grey darken-3">
                <a href="/index.php" class="brand-logo">BHO</a>
                <ul class="text right"> 
                    <li><a href="/index.php">Contact Me</a></li>
                    <li><a href="/index.php">Resume</a></li>
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
    </footer>


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script src="js/home.js"></script>
</body>
</html>