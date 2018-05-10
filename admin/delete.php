<div class="multipageText">
<h3> Delete </h3>
<p>Här kan du radera en book från databasen.</p>

<?php
//
// Check if script was accessed using specific jettyPosition
// as in ?jettyPosition=2
//
$bookPosition = isset($_GET['bookPosition'])
    ? $_GET['bookPosition']
    : null;
if ($bookPosition) {
    echo <<<EOD
<form method="post" action="admin.php?page=delete">
    <fieldset>
        <legend>Delete boat</legend>
        <p><label>bookPosition<br><input type="number" name="bookPosition" value="$bookPosition" readonly></label></p>
        <p><input type="submit" name="delete" value="Delete"></p>
    </fieldset>
</form>
EOD;
} else {
    echo "<p><strong>Select a boat to delete.</strong></p>";
}


if (isset($_POST['delete'])) {
    // Store posted form in parameter array
    $bookPosition  = $_POST['bookPosition'];
}
  $params = [$bookPosition];
  deleted($params);

?>





<?
$page = 'delete';
updateDB($page); ?>



</div>
