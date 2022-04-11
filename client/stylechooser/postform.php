<p>Using POST with the form and using a processing page.</p>

<p>Value of the current stylesheet key = '<?=$key?>'.</p>

<form method="post" action="?page=post-dropdown">

    <label>Select the stylesheet.<br>
        <select name="style">
          <option value="default">Default style</option>
          <option value="second">Second style</option>
          <option value="third">Third style</option>
        </select>
    </label>

    <input type="submit" name="doIt" value="Change the stylesheet">

</form>
