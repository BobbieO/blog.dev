@extends('layouts.blogMaster')

@section('title')
    BHO Create a Post
@stop

@section('content')

    <main>
    <div class="container"> 
        <div class="row">
            <div class="col sm8">
                <h2>Create a New Post</h2>
            </div>
        </div>

        
        <div class="row">
            <form class="col s8" method="post" enctype="multipart/form-data" class="text-center" action="{{{ action('PostsController@store') }}}">
                
                <div class="row">
                    <div class="input-field col s12">
                        <input name="title" id="title" type="text" value="{{{ Input::old('title') }}}">
                        <label for="title">Title</label>
                    </div>
                </div>
            
                <div class="row">
                    <div class="input-field col s12">
                        <textarea class="materialize-textarea" name="content" id="content">{{{ Input::old('content') }}}</textarea>
                        <label for="content">Content</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <button type="submit" class="btn waves-effect waves-light">Submit Post</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
    </main>

@stop
