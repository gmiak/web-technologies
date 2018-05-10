<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=2.0;">
    <title> <?=$title ?> </title>
    <link href="<?=$stylesheet?>" rel="stylesheet">
    <link rel='shortcut icon' href='img/favicon.ico'/>
</head>

<header class="site-header">
        <img src="img/logo.jpg" alt="logo" />
        <nav class="navbar">
          <ul class="selected">
            <li><a class="<?= basename($_SERVER['REQUEST_URI']) == "me.php" ?
             "selected" : ""; ?>" href="me.php">Hem</a></li>
            <li><a class="selected" href="report.php">Redovisning</a></li>
            <li><a class="selected" href="multipage.php">multipage</a></li>
            <li><a class="selected" href="stylechooser.php">Stylechooser</a></li>
            <li><a class="selected" href="search.php">Sökmotor</a></li>
            <li><a class="selected" href="admin.php">Admin</a></li>
          </ul>
        </nav>

        <hr/>
        <form method="post" action="config.php">

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
        <p>Value of the current stylesheet key = '<?=$key?>'.</p>

</header>
