
<?php
//HAntera vad användare skicka via $_GET

$multipage = isset($_GET['multipage']) ? $_GET['multipage'] : 'intro';

// testa och validera inkommande variabler
is_string($multipage) or is_null($multipage)
  or die("Incoming value for page must be a string.");

// försätta jobba i säkerhet var_dump($multipage);


$dir  = __DIR__ . "/content";
$file = null;


switch ($multipage) {

    case 'intro':
        $file = "$multipage.php";
        break;

    case 'print-server':
        $file = "$multipage.php";
        break;

    case 'print-get':
        $file = "$multipage.php";
        break;

    case 'get-samples':
        $file = "$multipage.php";
        break;


    default:
        die("The value of ?page=" . htmlentities($multipage) . "  is not recognized as a valid pages.");

}

?>

<main>
    <article>
        <?php include("content/aside.php")?>
        <?php include("$dir/$file")?>
        <footer class="byline3"><?php include("content/footer.php")?></footer>
    </article>
</main>


