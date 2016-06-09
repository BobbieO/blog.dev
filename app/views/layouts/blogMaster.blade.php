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
                <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="text right hide-on-med-and-down""> 
                    @if (Auth::check())
                        <li id="welcome-user">Welcome {{{Auth::user()->username}}}</li>
                    @endif

                    <li><a href="{{{action('PostsController@index')}}}">Show All Posts</a></li>

                    @if (Auth::check())
                        <li><a href="{{{action('PostsController@create')}}}">Create a Post</a></li>
                        <li><a href="{{{action('HomeController@doLogout')}}}">Log Out</a></li>
                    @else 
                        <li><a href="{{{action('HomeController@loginForm')}}}">Log In</a></li>
                    @endif

                    <li>
                        <form>
                            <div class="input-field">
                                    <input name="q" id="search" type="search" required action="{{action('PostsController@index')}}">
                                    <label for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- mobile view -->
                <ul class="side-nav" id="mobile">
                    @if (Auth::check())
                        <li id="welcome-user">Welcome {{{Auth::user()->username}}}</li>
                    @endif

                    <li><a href="{{{action('PostsController@index')}}}">Show All Posts</a></li>

                    @if (Auth::check())
                        <li><a href="{{{action('PostsController@create')}}}">Create a Post</a></li>
                        <li><a href="{{{action('HomeController@doLogout')}}}">Log Out</a></li>
                    @else 
                        <li><a href="{{{action('HomeController@loginForm')}}}">Log In</a></li>
                    @endif     
                </ul>
            </div>
          </nav>
    </header>

    @yield('content')

    <!-- for success messages -->
    @if (Session::has('successMessage'))

        <div class="row">
            <div class="col s12">
                <div class="card small">
                    <div class="card-content">
                        <span class="card-title">Success!</span>
                        <p class="data-success">{{{ Session::get('successMessage') }}}</p>
                    </div>
                </div>
            </div>
        </div>

    @endif

    <footer class="page-footer">
        <div class="link container"></div>
    </footer>


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script src="/js/home.js"></script>
</body>
</html>