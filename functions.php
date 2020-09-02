<?php

function u($string=""){
    // This function encodes text to be output in the URLbar
    return urlencode($string);
}

function raw_u($string=""){
    // This function encodes text to be output in the URLbar
    return rawurlencode($string);
}

function h($string=""){
    // This function converts special characters so the can be output safely
    return htmlspecialchars($string);
}


function redirect_to($location){
    // This function uses the header setting to redirect to a different URL
    header("Location: " . $location); 
}

function is_get_request(){
    // Uses server variable to check method of form submission
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}
       
function is_post_request(){
    // Uses server variable to check method of form submission
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}


?>
