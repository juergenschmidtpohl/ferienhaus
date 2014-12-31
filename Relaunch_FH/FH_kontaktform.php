
<?php define ('Zeit', time()); // Startzeit des Scripts setzen

$isSpam = true;
if (!isset($_POST['heiteitei'])) { /* Feld fehlt ->Spam */ }
elseif (!is_numeric($_POST['heiteitei'])) { /* Manipulierung ->Spam */ }
elseif (intval($_POST['heiteitei']) > Zeit-10) { /* zu schnell ->Spam */ }
elseif (intval($_POST['heiteitei']) < Zeit-10*3600) { /* altes Formular ->Spam */ }
else { /* kein Spam� -> ggf. weitere Pr�fungen und Verarbeitung des Eintrages */ }
  $isSpam = false;

if ( $isSpam === true ) {
  $betreff = 'SPAM -> Ferienhaus   '. $_POST['heiteitei'];
} else {
  $betreff = paranoid($_POST['fh_kontakt_betreff']);
} # spam J/N

# Nachricht geschrieben???
if (isset($_POST['fh_kontakt_action']) && $_POST['fh_kontakt_action']=='gesendet' && $isSpam==false ) {


$empfaenger = 'urlaub@ferienhaus-am-limeskastell.de';
$nachricht = wordwrap( paranoid($_POST['fh_kontakt_nachricht']), 70 );
$nachricht .= "\r\n Name: " .paranoid($_POST['fh_kontakt_name']);
$nachricht .= "\r\n Erreichbar unter: " .paranoid($_POST['fh_kontakt_erreichbar']);
$header = 'From: kontaktform@ferienhaus-am-limeskastell.de' . "\r\n" .
    'Reply-To: urlaub@ferienhaus-am-limeskastell.de' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
  
#echo paranoid($_POST['fh_kontakt_betreff']).'<br />';    
#echo $nachricht.'<br />';    
#echo $header.'<br />';    

  mail($empfaenger, $betreff, $nachricht, $header );

?>  
  <!-- Nachricht ist versendet -->
 <div id="fh_kontaktform_wrapper" > 
  <div id="fh_kontaktform_response" >
      <p>Vielen Dank f&uuml;r Ihre Nachricht.</p>
      <?php if (($_POST['fh_kontakt_erreichbar'])<>"") { ?>
      <p>Wir melden uns über die angegebene Kontaktmöglichkeit.</p>
      <?php } else { ?>
      <p>Sie haben keine Kontaktmöglichkeit angegeben. Wir können leider nicht antworten.</p>
      <?php }?>
      
      <div style="height: 25px;">&nbsp;</div>
      <p>Ferienhaus am Limeskastell</p>
      <p>Christiane &amp; J&uuml;rgen Schmidt</p>

    </div>  <!-- #fh_kontaktform_response -->
  </div>  <!-- #fh_kontaktform_wrapper -->
<?php  
} else { # &Uuml;ber Nachricht aufgerufen
?>
  
<form id="fh_kontaktform" name="fh_kontaktform" action="<?php $PHP_SELF; ?>" method="post" >
 <input type="hidden" name="fh_kontakt_action" value="gesendet" />
 <div id="fh_kontaktform_wrapper" > 
    <div class="fh_kontaktitem">
      <div class="fh_kontaktlabel">Name:</div>
      <input type="text" name="fh_kontakt_name" class="fh_kontakt_input" size="50" value="<?php echo $_POST['fh_kontakt_name']; ?>" />
    </div>
    <!-- honeypott -->
    <p class="nosee">
      <label for="email">Ihre E-Mail wird nicht abgefragt. Tragen Sie hier bitte NICHTS ein:</label>
      <input id="email" name="email" size="60" value="" />
      <input name="heiteitei" type="hidden" value="<?php echo time(); ?>" />
    </p>
    
    <div class="fh_kontaktitem">
      <div class="fh_kontaktlabel">Betreff:</div>
      <input type="text" name="fh_kontakt_betreff" class="fh_kontakt_input" size="50" value="<?php echo $_POST['fh_kontakt_betreff']; ?>" />
    </div>
    <div class="fh_kontaktitem">
      <div class="fh_kontaktlabel" style="width:300px;">Wie können wir Sie erreichen? ( E-Mail, Tel ):</div>
      <input type="text" name="fh_kontakt_erreichbar" class="fh_kontakt_input" size="50" value="<?php echo $_POST['fh_kontakt_erreichbar']; ?>" />
    </div>
    <div class="fh_kontaktitem">
      <div class="fh_kontaktlabel">Nachricht:</div>
      <textarea name="fh_kontakt_nachricht" class="fh_kontakt_input" cols="50" rows="10" value="" ><?php echo $_POST['fh_kontakt_nachricht']; ?></textarea>
    </div>
    <div class="fh_kontaktitem">
    	<input type="submit" name="fh_kontakt_send" value="Senden" />
    </div>
 </div>  <!-- #fh_kontaktform_wrapper -->
</form> <!-- #fh_kontaktform -->

<?php } ?>
