<h3> Create </h3>
<p>Här kan du lägga till en bok som du kan rekommendera. Den sparas på databasen.</p>

<form method="post" action="insert-process.php">
    <fieldset>
        <legend>Add boat</legend>
        <p><input type="number" name="bookPosition" placeholder="Position"></p>
        <p><input type="text" name="bookTitel" placeholder="Titel"></p>
        <p><input type="text" name="boatEngine"></p>
        <p><label>boatLength<br><input type="number" name="boatLength"></label></p>
        <p><label>boatWidth<br><input type="number" name="boatWidth"></label></p>
        <p><label>ownerName<br><input type="text" name="ownerName"></label></p>
        <p><input type="submit" name="add" value="Add"></p>
    </fieldset>
</form>
