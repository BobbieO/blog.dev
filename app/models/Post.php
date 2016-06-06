<?php

class Post extends BaseModel 
{
    protected $table = 'posts';

    public static $rules = array(
    'title' => 'required|max:500',
    'content' => 'required|max:1000'
    );
}

