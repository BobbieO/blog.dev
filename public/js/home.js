"use strict";

$(document).ready(function(){ 
    $(".button-collapse").sideNav();
    $(".dropdown-button").dropdown();

    // add an event listener for the delete button
    $('#delete-btn').on('click', function(e){
        // make sure the user wants to delete the post
        if (confirm('Are you sure you want to delete this post?')){
        // submit the hidden form
        $('#delete-post-form').submit();
    }
})


});

