<?php
include("server/src/service/session.php");
include("server/src/service/config.php");
$title="Min me-sida|htmlphp";
include("client/src/component/header.php");?>

<main>
  <article>
      <header>
        <div class="text50">
         <h2>Min sökmotor</h2>
         <p> Mina favorit böcker,
           sök här nere! Titel, Namn, och förfatare eller klicka på länken
         för att se hela listan : <a href="search.php?=get&amp;search=lista">Böcker</a> </p>
        </div>
      </header>

      <div class="text50">

        <form method="get" action="search.php">
            <input type="search" name="search" value="search" placeholder="Enter substring to search for, use % as wildcard.">
            <input type="submit" value="Search">
        </form>

        <?php
        // Get incoming from search form
        $search = isset($_GET['search'])
            ? $_GET['search']
            : null;

            // Break script if empty $search
        if (is_null($search)) {
            echo "Nothing to display, please enter a searchstring.";

        } elseif ($search == 'lista') {
          # code...
            echo showResult();
        } else {
            $value = $search;
            echo GetandPrintResult($value);
        }

        ?>


      </div>


  </article>
</main>


<?php include("client/src/component/footer.php");?>
