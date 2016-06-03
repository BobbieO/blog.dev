<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <title>@yield('title')</title>

    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Fontdiner+Swanky' rel='stylesheet' type='text/css'>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

    <!-- menu arrow icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="/css/blog.css">

</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="{{{action('HomeController@showHome')}}}" class="brand-logo">BHO</a>
                <ul class="text right"> 
                    <li><a href="{{{action('PostsController@index')}}}">Show All Posts</a></li>
                    <li><a href="{{{action('PostsController@create')}}}">Create a Post</a></li>
                    <li><a href="#">Future Search Box</a></li>
                </ul>
            </div>
          </nav>
    </header>


    @yield('content')



    <footer class="page-footer">
        <div class="link container"></div>
    </footer>


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script src="/js/home.js"></script>
</body>
</html>