@extends('layouts.blogMaster')

@section('title')
    BHO Log In
@stop

@section('content')

<main>
    <div class="container"> 
        <div class="row">
            <div class="col s12">
                <h2>Log In</h2>
            </div>
        </div>

        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="username" type="text" class="validate">
                        <label for="username">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

@stop
