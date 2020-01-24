<!-- Hier include ik de autoloader -->
<?php require_once('php/includes/autoload.inc.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MemoryGame By Puchhkii</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1>memory spel</h1>
    <?php
    //De game word aangemaakt en als het faalt dan doet het niks
      if(isset($_GET['end'])) {
        $game = new Game(true);
      } else {
        $game = new Game(false);
      }
      //checked de id van kaart
      if(isset($_GET['id'])){
        $game->turnCard($_GET['id']);
      } else {
        $game->check();
      }
      //echo een methode van game
      echo $game->getHtml();
      $game->save();

      //als iemand het af heeft een tekst printen met you won!
      if ($game->getFinished()) {
        echo "<h1 class=\"gewonnen\"> You won!</h1>.";
      }
?>
    <!-- restart button -->
     <br>
     <a  href="?end" ><button class="restart" name="button">Restart</button></a>
  </body>
</html>
