<?php
/**
* FH-Navigation.php
* Steuerungen Ferienhaus
* @author -dt 09.08.2011
* @version 1.0
* @module  Navigation FH-Home
* 
*/

  define ("CRLF",chr(13).chr(10));

  function paranoid($rein) {
    $raus=trim($rein);
    $raus=stripslashes($raus);
#    $raus=@mysql_real_escape_string($raus);
    $raus=strip_tags($raus);
    return $raus;
  }
  
  
  function ErzeugeTopNav() {
    $topnav=array("Home"=>"FH_Home.php",
                  "Impressum"=>"FH_Impressum.php",
                  "Kontakt"=>"FH_Kontakt.php");  # mailto:urlaub@ferienhaus-am-limeskastell.de  FH_Kontakt.php
//    echo '<span>'.CRLF ;                  
    reset($topnav);
// while ( $item = each($topnav) ) // Zuweisung !!! each gibt am Ende false .
// abfragen: $item["key"], $item["value"]
     
    while (list($text, $ref) = each($topnav)) {
      echo '<a href="' . $ref . '">' . $text . '</a>';
      if ( $text=="Kontakt" ) $trenner='<br />'; else $trenner=' | ';
      echo $trenner.CRLF ;
    } // Alle Punkte
  //  echo '</span>'.CRLF ;                  
  } // ErzeugeTopNav

  
  function ErzeugeMainNav($aktItem) {
    $mainnav=array("Die M&ouml;glichkeiten"=>"FH_Wohnung_Uebersicht.php",
                   "Anreise"=>"FH_Anreise.php",
                   "Service &amp; Preise"=>"FH_LeistungenUndPreise.php",
                   "Freizeit &amp; Umgebung"=>"FH_Freizeit_Uebersicht.php");

    echo '<ul>'.CRLF;                  
    reset($mainnav);
    while (list($text, $ref) = each($mainnav)) {
      echo '<li>';
#      echo '<a href="' . $ref ;
      echo '<a href="' .$ref. '" title="'.$text.'" ';
      if ( $text==$aktItem ) echo ' class="aktiv" ';
      echo '>' . $text . '</a>';
      echo '</li>'.CRLF;
    } // Alle Punkte
    echo '</ul>'.CRLF;                  
  } // ErzeugeMainNav

  
/* Listen( Wohnung, Freizeit ) Header Footer */
  
  // vordefinierte Listen f&uuml;r Linksmenu
  $listeWohnung=array("&Uuml;bersicht"=>"FH_Wohnung_Uebersicht.php",
                   "Kochen &amp; Essen"=>"FH_Wohnung_Kochen.php",
                   "Entspannen"=>"FH_Wohnung_Entspannen.php",
                   "Duschen"=>"FH_Wohnung_Duschen.php",
                   "Schlafen"=>"FH_Wohnung_Schlafen.php",
                   "Durchatmen"=>"FH_Wohnung_Terrasse.php",
                   "Klein aber n&uuml;tzlich"=>"FH_Wohnung_KleinAberFein.php");
                   
  $listeFreizeit=array("&Uuml;bersicht"=>"FH_Freizeit_Uebersicht.php",
                   "Radfahren"=>"FH_Freizeit_Radfahren.php",
                   "Wandern"=>"FH_Freizeit_Wandern.php");
                   
                   
  function ErzeugeListe($aDef, $id, $aktItem, $header) {
    echo '<h2>' . $header . '</h2>'.CRLF;
  /* array mit kompletter Liste, ID der Liste, aktueller Eintrag */
    echo '<ul class="rundgang" id="' . $id . '" >'.CRLF;                  
    reset($aDef);
    while (list($text, $ref) = each($aDef)) {
      echo '<li>';
      if ( $text==$aktItem ) {
        echo '<a href="#" class="aktiv" title="'.$text.'"';
     } else {
        echo '<a href="' .$ref. '" title="'.$text.'" ';
     }  // aktiv J/N   
      echo '">' . $text . '</a>';
      echo '</li>'.CRLF;
    } // Alle Punkte
    echo '</ul>'.CRLF;                  
  } // ErzeugeListe
   
   function ErzeugeFooter() {
    echo '<img class="LeftPic" src="Bilder/tmb_4_STERNE_footerfarbe.jpg" style="margin-right:130px;" '.
         'width="93" height="20" title="DTV-4-Sterne" alt="DTV Klassifizierung 4 Sterne" />';
    echo '<span>';     
    echo 'ferienhaus-am-limeskastell &copy; -dt 2011/2012. | ';
    echo 'Layout based on <a href="http://www.yaml.de/">YAML</a>';
    echo '</span>';   
      
    echo '<span style="float:right;">';     
    ErzeugeTopNav();
    echo '</span>';   
   } // ErzeugeFooter
   
   /* Keywortliste f&uuml;r Header ??? besser nach Seite unterscheiden ??*/
   function ErzeugeKeywords() {
   } // ErzeugeKeywords
   
   
   
  
  
?>