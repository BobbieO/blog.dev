@extends('layouts.master')

@section('title')
    BHO FLIT   
@stop

@section('content')
    <main>
        <div class="center-align container">
            <div class="right">
                <a href="{{{action('HomeController@showPeddler')}}}"><i class="nav-arrow medium material-icons">navigate_before</i></a>
                <a href="{{{action('HomeController@showMore')}}}"><i class="nav-arrow medium material-icons">navigate_next</i></a>
            </div>
            <h1 class="down">FLIT</h1>
            <p>
                FLIT: Freelancer's Invoicing Tool is full-stack application completed in a group of three people as the capstone project of the Codeup program. The site uses Materialize for basic responsiveness and custom CSS for styling. We used PHP and the Laravel framework for back-end tasks and functionality, along with MySQL for database management. My primary responsibility was the overall look and feel of the site, including: UI/UX, page view design and layouts, mobile-specific view changes and data displays, and email views. I also shared back-end and database query tasks. 
            </p>
            <p>
                FLIT showcases intuitive design influenced by Google's Material Design guidelines, clear information architecture, and modular, easily-maintainable code. FLIT is an application allowing freelancers to track their projects and invoices. It allows users to create an account, add projects and notes related to the projects, and add clients. Users can also track project and invoice deadlines, and expected payment dates related to the projects. Users can view a summary of immediately relevant information in a dashboard view or they can view more detailed information on individual pages for each project and client. Stripe was integrated to collect a one-time signup fee, and Mailgun sends a welcome email and a weekly summary of important dates.  
            </p>
        </div>

        <div>
            <div class="container row">
                <div class="col s6 instrImg">
                <h3 class="center-align">Things to Do</h3>
                    <ol>
                        <li>Sign up for the site.</li>
                        <li>Create projects and clients.</li>
                        <li>Examine the tables and page views.</li>
                        <li>Keep track of upcoming deadlines and paydays.</li>
                    </ol>
                </div>
                <div class="col s6 instrImg">
                    <h3 class="center-align">Click to View</h3>
                    <div class="center-align">
                        <a href="http://flit.site" target="_blank"><img class="image" src="/img/screenShotFlit.png"></a>
                    </div>
                </div>
            </div>
            
            <div class="container row">
                <div class="center-align col s12">
                    <a class="purple-text" href="https://github.com/Freelancer-Invoice-Tool/flit.dev" target="_blank">View code on GitHub</a>
                </div>
            </div>

        </div>
    </main>
@stop