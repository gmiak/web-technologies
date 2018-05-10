<?include("config.php");?>
<?include("admin/process-insert.php");?>
<? include('admin/process-update.php'); ?>
<? include('admin/process-delete.php'); ?>

<?php
//HAntera vad användare skicka via $_GET

$page = isset($_GET['page']) ? $_GET['page'] : 'intro';

// testa och validera inkommande variabler
is_string($page) or is_null($page)
  or die("Incoming value for page must be a string.");

// försätta jobba i säkerhet var_dump($page);


$dir  = __DIR__ . "/admin";
$file = null;


switch ($page) {

    case 'intro':
        $file = "$page.php";
        break;

    case 'create':
        $file = "$page.php";
        break;

    case 'update':
        $file = "$page.php";
        break;
        
    case 'read':
        $file = "$page.php";
        break;

    case 'delete':
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

        <?php include("admin/aside.php")?>
        <?php include("$dir/$file")?>

    </article>
</main>

<?php include("incl/footer.php");?>
