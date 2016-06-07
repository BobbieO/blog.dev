@extends('layouts.blogMaster')

@section('title')
    BHO Create a Post
@stop

@section('content')

    <main>
    <div class="container"> 
        <div class="row">
            <div class="col s9 left-align">
                <h2>Create a New Post</h2>
            </div>
        </div>

        
        <div class="row">
            {{ Form::open(array('action'=>'PostsController@store', 'class' => 'col s8 box', 'enctype' => 'multipart/form-data')) }}
                
                <div class="row">
                    <div class="input-field col s12">
                        {{ Form::text('title', null, array('id'=>'title')) }}

                        <p>{{ $errors->first('title', '<span class="help-block">:message</span>') }}</p>

                        {{ Form::label('title', 'Title') }}
                    </div>
                </div>
            
                <div class="row">
                    <div class="input-field col s12">
                        {{ Form::textarea('content', null, array('id'=>'content', 'class'=>'materialize-textarea'))}}

                        <p>{{ $errors->first('content', '<span class="help-block">:message</span>') }}</p>

                        {{ Form::label('content', 'Content') }}
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <button type="submit" class="btn waves-effect waves-light">Create New Post</button>
                    </div>
                </div>

            {{ Form::close() }}    
        </div>
    </div>
    </main>

@stop
