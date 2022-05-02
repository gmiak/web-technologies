<?php
include("server/src/service/session.php");
include("server/src/service/config.php");
$title="Min me-sida|htmlphp";
include("client/src/component/header.php");?>

<?php 

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

is_string($page) or is_null($page) or die("Incoming value for page must be a string.");


$file = null;

switch ($page) {

    case 'home':
        $file = "$page.php";
        include("client/src/view/$file");
        break;
    case 'report':
        $file = "$page.php";
        include("client/src/view/$file");
        break;
    case 'multipage':
        $file = "$page.php";
        include("client/src/view/multipage/$file");
        break;
    case 'stylechooser':
        $file = "$page.php";
        include("client/src/view/stylechooser/$file");
        break;
    case 'admin':
        $file = "$page.php";
        include("client/src/view/admin/$file");
        break;
    default:
        include("client/src/view/home.php");
}
?>

<?php include("client/src/component/footer.php");?>
