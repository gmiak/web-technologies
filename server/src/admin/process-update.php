<?php
//function for to select items to update
function updateDB($page)
{
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

    // Check whats in the database
    $sql = "SELECT * FROM Bibliotek1";
    $stmt = $db->prepare($sql);
    echo "<p>Execute the SQL-statement:<br><code>$sql</code><p>";
    $stmt->execute();
    // Get the results as an array with column names as array keys
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<p>The result contains " . count($res) . " rows.</p>";
    // Loop through the array and gather the data into table rows
    $rows = null;
    foreach ($res as $row) {
        $bookPosition = htmlentities($row['bookPosition']);
        $rows .= "<tr>";
        $rows .= "<td width='100'><a href='?page=$page&amp;bookPosition=$bookPosition'>$bookPosition</a></td>";
        $rows .= "<td width='100'>" . htmlentities($row['bookTitel']) . "</td>";
        $rows .= "<td width='100'>" . htmlentities($row['bookType']) . "</td>";
        $rows .= "<td width='100'>" . htmlentities($row['bookYear']) . "</td>";
        $rows .= "<td width='100'>" . htmlentities($row['bookAntal']) . "</td>";
        $rows .= "<td width='100'>" . htmlentities($row['autor']) . "</td>";
        $rows .= "</tr>\n";
    }

// Print out the result as a HTML table using PHP heredoc
    echo <<<EOD
<table>
<tr>
  <th width='100'>Postion</th>
  <th>Titel</th>
  <th>Type</th>
  <th>År</th>
  <th>Antal</th>
  <th>Autor</th>
</tr>
$rows
</table>
EOD;
}

//function for to update items on the DB
function insertAndupdateDB($params)
{
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
    // Prepare SQL statement to UPDATE a row in the table
    $sql = <<<EOD
UPDATE Bibliotek1
  SET
    bookTitel = ?,
    bookType = ?,
    bookYear = ?,
    bookAntal = ?,
    autor = ?
  WHERE
    bookPosition = ?
EOD;

    $stmt = $db->prepare($sql);
    // Execute the SQL to INSERT within a try-catch to catch any errors.
    try {
        $stmt->execute($params);
    } catch (PDOException $e) {
        echo "<p>Failed to update the row, dumping details for debug.</p>";
        echo "<p>Incoming \$_POST:<pre>" . print_r($_POST, true) . "</pre>";
        echo "<p>The error code: " . $stmt->errorCode();
        echo "<p>The error message:<pre>" . print_r($stmt->errorInfo(), true) . "</pre>";
        throw $e;
    }
    // Print out the successful results
    //echo "<p>Updated the row:<br></p><pre>" . print_r($params, true) . "</pre>";
    //echo "<p><a href='update.php'>Update another row</a>.</p>";
    //exit();

}
