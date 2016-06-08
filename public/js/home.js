"use strict";

$(document).ready(function(){ 
    $(".button-collapse").sideNav();
    $(".dropdown-button").dropdown();
    // Pause slider
    $('.slider').slider('pause');
    // Start slider
    $('.slider').slider('start');
    // Next slide
    $('.slider').slider('next');
    // Previous slide
    $('.slider').slider('prev');

    // add an event listener for the delete button
    $('#delete-btn').on('click', function(e){
        // make sure the user wants to delete the post
        if (confirm('Are you sure you want to delete this post?')){
        // submit the hidden form
        $('#delete-post-form').submit();
        }
    })
});

