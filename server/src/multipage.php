<?include("config.php");?>

<?php
//HAntera vad användare skicka via $_GET

$page = isset($_GET['page']) ? $_GET['page'] : 'intro';

// testa och validera inkommande variabler
is_string($page) or is_null($page)
  or die("Incoming value for page must be a string.");

// försätta jobba i säkerhet var_dump($page);


$dir  = __DIR__ . "/content";
$file = null;


switch ($page) {

    case 'intro':
        $file = "$page.php";
        break;

    case 'print-server':
        $file = "$page.php";
        break;

    case 'print-get':
        $file = "$page.php";
        break;

    case 'get-samples':
        $file = "$page.php";
        break;


    default:
        die("The value of ?page=" . htmlentities($page) . "  is not recognized as a valid pages.");

}

?>

<?php
    $title="Min multisida|htmlphp";
     include("incl/header.php");
?>



<main>
    <article>
        <?php include("content/aside.php")?>
        <?php include("$dir/$file")?>
        <footer class="byline3"><?php include("content/footer.php")?></footer>
    </article>
</main>

<?php include("incl/footer.php");?>
