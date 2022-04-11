<?php
// Start the session
$name = substr(preg_replace('/[^a-z\d]/i', '', __DIR__), -30);
session_name($name);
session_start(); 

$try = 0;


// Valid stylesheets and valid values to store in the session
$stylesheets = [
    "default" => "client/src/style/style.css",
    "second" => "client/src/style/second.css",
    "third" => "client/src/style/third.css",
];

// Get current stylesheet from the session, or use default
$key = isset($_SESSION['stylesheet'])
    ? $_SESSION['stylesheet']
    : "default";

// See if the key actually matches a stylesheet
if (isset($stylesheets[$key])) {
    $stylesheet = $stylesheets[$key];
} else {
    die("The value of key='$key' does not match a valid stylesheet.");
}


// Check if style is changed and then set it
$style = isset($_POST['style'])
    ? $_POST['style']
    : null;

if ($style !== null) {
    $_SESSION['stylesheet'] = $style;
    header("Location: index.php");
}



// To debug a processingpage, before it does its redirect
//var_dump($_SESSION);
//die();



// Redirect to the resultpage 
//header("Location: index.php");

?>