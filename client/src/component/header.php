<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=2.0;">
    <title> <?=$title ?> </title>
    <link href="<?=$stylesheet?>" rel="stylesheet"> 
    <link rel='shortcut icon' href='client/assets/ico/favicon.ico'/>
</head>


<header class="site-header">
        <img src="client/assets/logo/logo.jpg" alt="logo" />
        <nav class="navbar">
          <ul class="selected">
            <li><a class="<?= basename($_SERVER['REQUEST_URI']) == "index.php" ?
             "selected" : "";?>" href="index.php?page=home">Hem </a></li>
            <li><a class="selected" href="index.php?page=report">Redovisning</a></li> <!-- TODO: Create an 404 page when page doesnt exist -->
            <li><a class="selected" href="index.php?page=multipage">multipage</a></li>
            <li><a class="selected" href="stylechooser.php">Stylechooser</a></li>
            <li><a class="selected" href="search.php">Sökmotor</a></li>
            <li><a class="selected" href="admin.php">Admin</a></li>
          </ul>
        </nav>

        <hr/>
        <form method="post" action="index.php"> <!-- TODO: Change the style and stay in the current page -->

        <label>Select the stylesheet.<br>
        <select name="style">
            <option value="default">Default style</option>
            <option value="second">Second style</option>
            <option value="third">Third style</option>
        </select>
        </label>

        <input type="submit" name="doIt" value="Change the stylesheet">

        </form>
        

        <hr/>
        <p>Value of the current stylesheet key = "<?=$key?>".</p>
        <p>Value of the current page = "<?=$page?>".</p>

</header>
