<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
  <head>
    <title>Testet NavigationsLibrary</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
  </head>
  <body>
    
        <?php include("FH_BibNavigation.php") ?>   
        <?php
          ErzeugeTopNav();
        ?>
        <hr />
        <?php
          ErzeugeMainNav("Anreise");
        ?>
        <hr />
        <?php
          ErzeugeListe($listeWohnung, 'wliste', 'Entspannen', 'trautes Heim' );
        ?>
        <hr />
        <?php
          ErzeugeListe($listeFreizeit, 'fliste', 'Wandern', 'Was treibe ich hier ?' );
        ?>
        <hr />
        <?php
          ErzeugeFooter();
        ?>

  </body>
</html>
