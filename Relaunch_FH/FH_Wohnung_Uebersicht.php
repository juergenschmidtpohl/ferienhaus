
<!-- Men&uuml;punkt Wohnung_&Uuml;bersicht -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Ferienhaus am Limeskastell Raum&uuml;bersicht</title>
<!-- (en) Add your meta data here -->
<!-- (de) F&Atilde;¼gen Sie hier Ihre Meta-Daten ein -->

<meta name="description" content="Ferienhaus am Limeskastell. 4 Sterne DTV Klassifizierung Ferienwohnung f&uuml;r 2 bis 4 Personen. Raum&uuml;bersicht" />
<meta name="keywords" content="Ferienhaus, Ferienwohnung, RAum&uuml;bersicht, K&uuml;che, Dusche, Schlafbereich, Schlafzimmer, Terrasse, Wohnbereich, Abstellraum" /> 

<link href="./css/FH_central.css" rel="stylesheet" type="text/css"/>
<link href="./css/layout_2col_left_13.css" rel="stylesheet" type="text/css"/>
<!--[if lte IE 7]>
<link href="./css/patches/patch_layout_draft.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script type="text/javascript" src="./javascript/FH_Bib001.js"></script>

</head>
<body><!-- facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

        <?php include("FH_BibNavigation.php"); 
         define( 'MEIN_NAME', '&Uuml;bersicht' );
         define( 'MEIN_HEADER', 'Die M&ouml;glichkeiten' );
        ?>   

<!-- skip link navigation -->
<ul id="skiplinks">
	<li><a class="skip" href="#nav">Skip to navigation (Press Enter).</a></li>
	<li><a class="skip" href="#col3">Skip to main content (Press Enter).</a></li>
</ul>


<div class="page_margins">
  <div class="page">
    <div id="header" role="banner">
      <div id="topnav" role="contentinfo">
        <?php ErzeugeTopNav(); ?>
      </div>
    </div>
    <!-- begin: main navigation #nav -->
    <div id="nav" role="navigation">
      <div class="hlist">
        <?php ErzeugeMainNav(MEIN_NAME); ?>
      </div>
    </div>
        <!-- end: main navigation -->
    <!-- begin: content area #main -->
    <div id="main">
      <!-- begin: #col1 - first float column -->
      <div id="col1" role="complementary">
        <div id="col1_content" class="clearfix"> 
           <?php ErzeugeListe($listeWohnung, 'wliste', MEIN_NAME, MEIN_HEADER ); ?>
        </div>
<div style="margin: 170px 0px 0px 30px;" class="fb-like" data-href="http://www.ferienhaus-am-limeskastell.de" data-send="true" data-layout="box_count" data-width="450" data-show-faces="false" data-font="verdana"></div>
        
      </div>
      <!-- end: #col1 -->
      <!-- begin: #col2 second float column -->
      <div id="col2" role="complementary">
        <div id="col2_content" class="clearfix"> 
         <!-- Inhalt rechte Spalte -->
         <!-- im 2SpaltenModus unsichtbar -->
        </div>
      </div>
      <!-- end: #col2 -->
      <!-- begin: #col3 static column -->
      <div id="col3" role="main">
        <div id="col3_content" class="clearfix"> 
        
         <!-- Inhalt rechte Spalte -->
    <div id="graphikbereich" class="gallery">
      <table>
        <tr>
          <td colspan="6" align="center"><img id="big" src="./Bilder/Wohn_Schrank.jpg" width="500" heigth="333" /></td>
        </tr>
        <tr>
          <td><img id="small_1" src="./Bilder/tmb_Wohn_Schrank.jpg" width="100" heigth="67" 
               onmouseover="FillBig('./Bilder/Wohn_Schrank.jpg')" /></td>
          <td><img id="small_2" src="./Bilder/tmb_Wohn_Treppe.jpg" width="100" heigth="67" 
               onmouseover="FillBig('./Bilder/Wohn_Treppe.jpg')" /></td>
          <td><img id="small_3" src="./Bilder/tmb_Koch.jpg" width="100" heigth="67" 
               onmouseover="FillBig('./Bilder/Koch.jpg')" /></td>
          <td><img id="small_4" src="./Bilder/tmb_Dusch.jpg" width="100" heigth="67" 
               onmouseover="FillBig('./Bilder/Dusch.jpg')" /></td>
          <td><img id="small_5" src="./Bilder/tmb_Schlaf_rot.jpg" width="100" heigth="67" 
               onmouseover="FillBig('./Bilder/Schlaf_Rot.jpg')" /></td>
          <td><img id="small_6" src="./Bilder/tmb_Schlaf_blau.jpg" width="100" heigth="67" 
               onmouseover="FillBig('./Bilder/Schlaf_blau.jpg')" /></td>
        </tr>
      </table>
    </div> <!-- graphikbereich -->

    <div id="textbereich" class="beschreibung">
     Rundgang
    </div> <!-- textbereich -->
             
        </div>
        <!-- IE column clearing -->
        <div id="ie_clearing">&nbsp;</div>
      </div>
      <!-- end: #col3 -->
    </div>
    <!-- end: #main -->
    <!-- begin: #footer -->
    <div id="footer" role="contentinfo">
      <?php ErzeugeFooter(); ?>    
    </div>
    <!-- end: #footer -->
  </div>
</div>
<!-- full skiplink functionality in webkit browsers -->
<script src="./yaml/core/js/webkit-focusfix.js" type="text/javascript"></script>
</body>
</html>
