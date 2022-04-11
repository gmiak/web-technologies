<?include("config.php");?>

<?


// Get the selected page, or the default one
$page = (isset($_GET['page'])) ? $_GET['page'] : "intro";



// Where are the content-files
$dir  = __DIR__ . "/stylechooser/";



// Array with all valid pages
$multipage = [
    "stylechooser"    => "intro.php",
    "intro"    => "intro.php",
    "current"  => "current-value.php",
    "get"      => "change-get.php",
    "dropdown" => "change-dropdown.php",
    "post-dropdown" => "post-dropdown.php",
    "postform" => "postform.php",
    "nypostform" => "ny-undersida.php",
];



// Get the contentfile to include
if (isset($multipage[$page])) {
    $file = $multipage[$page];
} else {
    die("The value of ?page=" . htmlentities($page) . " is not recognized as a valid page.");
}



?>
<?php
    $title="Min stylechooser|htmlphp";
     include("incl/header.php");
?>



<main>
    <article>
        <?php include("stylechooser/aside.php")?>
        <?php include("$dir/$file")?>
    </article>
</main>
<?php include("incl/footer.php");?>
