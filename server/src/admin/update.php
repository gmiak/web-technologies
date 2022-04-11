<div class="multipageText">
<h3> Update </h3>
<p>Här kan du uppdatera detaljer om en bok och välja att spara den.</p>


<?php


  // Create a DSN for the database using its filename
  $fileName = __DIR__ . "/../db/bibliotek.sqlite";
  $dsn = "sqlite:$fileName";
  // Open the database file and catch the exception it it fails.
try {
      $db = new PDO($dsn);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
      echo "Failed to connect to the database using DSN:<br>$dsn<br>";
      throw $e;
}

//
// Check if script was accessed using specific jettyPosition
// as in update?jettyPosition=2
//

$bookPosition = isset($_GET['bookPosition'])
    ? $_GET['bookPosition']
    : null;
$bookTitel = null;
$bookType = null;
$bookYear = null;
$bookAntal = null;
$autor = null;
if ($bookPosition) {
    // Get details on the boat using specified jettyPosition
    $sql = "SELECT * FROM Bibliotek1 WHERE bookPosition = ?";
    $stmt = $db->prepare($sql);
    $params = [$bookPosition];
    $stmt->execute($params);
    // Get the results as an array with column names as array keys
    $res = $stmt->fetchAll(PDO::FETCH_BOTH);

    if (empty($res)) {
        die("No such bookPosition.");
    }

    // Move content of array to individual variables, for ease of use.
    list($bookPosition, $bookTitel, $bookType, $bookYear, $bookAntal, $autor) = $res[0];
}
?>

<form method="post" action="admin.php?page=update">
    <fieldset>
        <legend>Update boat</legend>
        <p><input placeholder="Position" type="number" name="bookPosition" value="<?=$bookPosition?>" readonly></p>
        <p><input placeholder="Titel" type="text" name="bookTitel" value="<?=$bookTitel?>"></p>
        <p><input placeholder="Book Type (ex: Roman)" type="text" name="bookType" value="<?=$bookType?>"></p>
        <p><input placeholder="År (edition)" type="number" name="bookYear" value="<?=$bookYear?>"></p>
        <p><input placeholder="Antal" type="number" name="bookAntal" value="<?=$bookAntal?>"></p>
        <p><input placeholder="Författare" type="text" name="autor" value="<?=$autor?>"></p>
        <p><input type="submit" name="save" value="Save"></p>
    </fieldset>
</form>


<?
if (isset($_POST['save'])) {
    // Store posted form in parameter array
    $bookPosition  = $_POST['bookPosition'];
    $bookTitel       = $_POST['bookTitel'];
    $bookType    = $_POST['bookType'];
    $bookYear     = $_POST['bookYear'];
    $bookAntal      = $_POST['bookAntal'];
    $autor     = $_POST['autor'];

    $params = [$bookTitel, $bookType, $bookYear, $bookAntal, $autor, $bookPosition];
    insertAndupdateDB($params);
}

?>

<?
$page = 'update';
updateDB($page); ?>



</div>
