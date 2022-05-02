
<?php
//HAntera vad användare skicka via $_GET

$pageAdmin = isset($_GET['adminpage']) ? $_GET['adminpage'] : 'intro';

// testa och validera inkommande variabler
is_string($pageAdmin) or is_null($pageAdmin)
  or die("Incoming value for page must be a string.");

// försätta jobba i säkerhet var_dump($page);


$dir  = __DIR__ . "/content_admin";
$file = null;


switch ($pageAdmin) {

    case 'intro':
        $file = "$pageAdmin.php";
        break;

    case 'create':
        $file = "$pageAdmin.php";
        break;

    case 'update':
        $file = "$pageAdmin.php";
        break;
        
    case 'read':
        $file = "$pageAdmin.php";
        break;

    case 'delete':
        $file = "$pageAdmin.php";
        break;


    default:
        die("The value of ?page=" . htmlentities($pageAdmin) . "  is not recognized as a valid pages.");

}

?>

<main>
    <article>

        <?php include("content_admin/aside.php")?>
        <?php include("$dir/$file")?>

    </article>
</main>
