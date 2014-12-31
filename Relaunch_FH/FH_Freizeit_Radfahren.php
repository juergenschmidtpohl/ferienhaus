<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Ferienhaus am Limeskastell Freizeit auf dem Fahrrad</title>
<!-- (en) Add your meta data here -->
<!-- (de) F&Atilde;¼gen Sie hier Ihre Meta-Daten ein -->
<meta name="author" content="J&uuml;rgen Schmidt">
<meta name="description" content="Website Ferienhaus am Limeskastell Freizeitgestaltung Rad fahren">
<meta name="keywords" content="Ferienhaus, Limeskastell, Welterbe, UNESCO, Limes, Rhein, Lahn, Erholung, Urlaub, Wandern, Reiten, Kanu">
<meta name="keywords" content="UNESCO-Welterbe, R&auml;tisch-romanischer Limes, Mittelrheintal">
<meta name="keywords" content="Mountainbike, Mountain_Bike, Radeln, Radtouren, Anstieg, Saisonvorbereitung, Herbsttouren, Kleinbahntrasse">
<meta name="robots" content="index|follow">


<link href="./css/FH_central.css" rel="stylesheet" type="text/css"/>
<link href="./css/layout_2col_left_13.css" rel="stylesheet" type="text/css"/>

<style type="text/css">
  #col3_content a {
      font-weight:bolder;
      font-size:14px;
  }
</style>


<!--[if lte IE 7]>
<link href="./css/patches/patch_layout_draft.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script type="text/javascript" src="./javascript/FH_Bib001.js"></script>

</head>
<body>
        <?php include("FH_BibNavigation.php"); 
         define( 'MEIN_NAME', 'Radfahren' );
         define( 'MEIN_HEADER', 'Freizeit & Umgebung' );
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
        
        <!-- Inhalt linke Spalte -->
           <?php ErzeugeListe($listeFreizeit, 'fliste', MEIN_NAME, MEIN_HEADER ); ?>
        </div>
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
        <p>
<img class="LeftPic" src="./Bilder/mountainBikeRiders1.jpg" width="279" height="299" title="Urlaub auf dem Mountainbike" alt="Mountainbikefahrer im Wald" />
        <p><h3>Mountainbike</h3></p>

Im Fr&uuml;hling und Herbst, wenn das Wetter im Hochgebirge noch keine Touren zul&auml;sst, bieten sich hier anspruchsvolle M&ouml;glichkeiten zum Einrollen oder f&uuml;r den Saisonausklang.<br />
</p><p>
Zur Einstimmung gibt es derzeit <a href=" http://www.gps-tour.info/de/community/tours.mmaus.html?limitstart=0">14 Tourenvorschl&auml;ge</a> am Rhein, an der  Lahn und &uuml;ber die Taunush&ouml;hen. Der Startpunkt der Touren ist 3,5km vom Haus entfernt, einige f&uuml;hren direkt an der Haust&uuml;r vorbei.<br />
</p><p>
Selbstverst&auml;ndlich gibt es auch einen abschlie&szlig;baren Stellplatz f&uuml;r die R&auml;der.<br />
 
        </p>
        </div>   <!-- col3_content  //-->
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
