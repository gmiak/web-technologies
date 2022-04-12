
<?


// Get the selected page, or the default one
$pagestyle = (isset($_GET['stylepage'])) ? $_GET['stylepage'] : "intro";



// Where are the content-files
$dir  = __DIR__ . "/content_stylechooser";



// Array with all valid pages
$multipagestyle = [
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
if (isset($multipagestyle[$pagestyle])) {
    $file = $multipagestyle[$pagestyle];
} else {
    die("The value of ?page=" . htmlentities($pagestyle) . " is not recognized as a valid page.");
}



?>


<main>
    <article>
        <?php include("content_stylechooser/aside.php")?>
        <?php include("$dir/$file")?>
    </article>
</main>
