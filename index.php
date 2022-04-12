<?php
include("server/src/service/session.php");
$title="Min me-sida|htmlphp";
include("client/src/component/header.php");?>

<?php switch (htmlentities($_GET['page'])) {
    case "home":
        include("client/src/view/home.php");
        break;
    case "report":
        include("client/src/view/report.php");
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        include("client/src/view/home.php");
}
?>

<?php include("client/src/component/footer.php");?>
