<?
//function for insert items
function insertionDB($params) {

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

    //Prepare SQL statement to INSERT new rows into table
    $sql = "INSERT INTO Bibliotek1 VALUES(?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);

    // Execute the SQL to INSERT within a try-catch to catch any errors.
    try {
      $stmt->execute($params);
      echo "<p>Operation successfull!</p>";
    } catch (PDOException $e) {
      echo "<p>Failed to insert a new row, dumping details for debug.</p>";
      echo "<p>Incoming \$_POST:<pre>" . print_r($_POST, true) . "</pre>";
      echo "<p>The error code: " . $stmt->errorCode();
      echo "<p>The error message:<pre>" . print_r($stmt->errorInfo(), true) . "</pre>";
      throw $e;
    }
  }

?>
