

<?php
//All foction to the database

//function one for search an element in the DB

function GetandPrintResult($search) {
// Prepare the SQL statement

// Create a DSN for the database using its filename
$fileName = "server/src/db/bibliotheque";
$dsn = "sqlite:$fileName";

// Open the database file and catch the exception it it fails.
try {
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to the database using DSN:<br>$dsn<br>";
    throw $e;
}


$sql = "SELECT * FROM Bibliotek1 WHERE bookTitel LIKE ? OR bookType LIKE ? OR autor LIKE ?";
$stmt = $db->prepare($sql);

echo "<p>Preparing the SQL-statement:<br><code>$sql</code><p>";

// Execute the SQL statement using parameters to replace the ?
$params = [$search, $search, $search];
$stmt->execute($params);

echo "<p>Executing using parameters:<br><pre>" . htmlentities(print_r($params, true)) . "</pre>";

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<p>The result contains " . count($res) . " rows.</p>";
// Loop through the array and gather the data into table rows
$rows = null;
foreach ($res as $row) {
    $rows .= "<tr>";
    $rows .= "<td width='200'>{$row['bookPosition']}</td>";
    $rows .= "<td width='200'>{$row['bookTitel']}</td>";
    $rows .= "<td width='200'>{$row['bookType']}</td>";
    $rows .= "<td width='200'>{$row['bookYear']}</td>";
    $rows .= "<td width='200'>{$row['bookAntal']}</td>";
    $rows .= "<td width='200'>{$row['autor']}</td>";
    $rows .= "</tr>\n";
}
// Print out the result as a HTML table using PHP heredoc
echo <<<EOD
<table>
<tr>
    <th>Postion</th>
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


//function two for show all the db

function showResult() {
// Create a DSN for the database using its filename
$fileName = "server/src/db/bibliotheque";
$dsn = "sqlite:$fileName";

// Open the database file and catch the exception it it fails.
try {
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connect";
} catch (PDOException $e) {
    echo "Failed to connect to the database using DSN:<br>$dsn<br>";
    throw $e;
}


$sql = 'SELECT * FROM Bibliotek1';
echo "<p>Execute the SQL-statement:<br><code>$sql</code><p>";

$stmt = $db->prepare($sql);


$stmt->execute();

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<p>The result contains " . count($res) . " rows.</p>";
// Loop through the array and gather the data into table rows
$rows = null;
foreach ($res as $row) {
    $rows .= "<tr>";
    $rows .= "<td width='200'>" . htmlentities($row['bookPosition']) . "</td>";
    $rows .= "<td width='200'>" . htmlentities($row['bookTitel']) . "</td>";
    $rows .= "<td width='200'>" . htmlentities($row['bookType']) . "</td>";
    $rows .= "<td width='200'>" . htmlentities($row['bookYear']) . "</td>";
    $rows .= "<td width='200'>" . htmlentities($row['bookAntal']) . "</td>";
    $rows .= "<td width='200'>" .htmlentities($row['autor']). "</td>";
    $rows .= "</tr>\n";
}
// Print out the result as a HTML table using PHP heredoc
echo <<<EOD
<table>
<tr>
    <th>Postion</th>
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



?>
