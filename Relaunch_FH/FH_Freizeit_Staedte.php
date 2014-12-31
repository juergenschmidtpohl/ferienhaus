<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Ferienhaus am Limeskastell</title>
<!-- (en) Add your meta data here -->
<!-- (de) F&Atilde;¼gen Sie hier Ihre Meta-Daten ein -->
<meta name="author" content="J&uuml;rgen Schmidt">
<meta name="description" content="Website Ferienhaus am Limeskastell">
<meta name="keywords" content="Ferienhaus, Limeskastell, Welterbe, UNESCO, Limes, Rhein, Lahn, Erholung, Urlaub, Wandern, Reiten, Kanu">
<meta name="keywords" content="UNESCO-Welterbe, R&auml;tisch-romanischer Limes, Mittelrheintal">
<meta name="keywords" content="Abendspaziergang, Wandertouren, Wanderweg, Wanderwege, Wanderung, Natur">
<meta name="keywords" content="Limeswanderweg, Westerwaldverein, Nassauische Kleinbahn, Radfahren, Radtouren">
<meta name="robots" content="index|follow">


<link href="./css/FH_central.css" rel="stylesheet" type="text/css"/>
<link href="./css/layout_2col_left_13.css" rel="stylesheet" type="text/css"/>

<style type="text/css">
  #col3_content a {
      font-weight:bolder;
      font-size:14px;
  }
  #col3_content p {
      padding-bottom:8px;
      margin-bottom:8px;
  }
</style>


<!--[if lte IE 7]>
<link href="./css/patches/patch_layout_draft.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script type="text/javascript" src="./javascript/FH_Bib001.js"></script>

</head>
<body>
        <?php include("FH_BibNavigation.php"); 
         define( 'MEIN_NAME', '&Uuml;bersicht' );
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
         <!-- im 2SpaltenModus unsichtbar -->
        </div>
      </div>
      <!-- end: #col2 -->
      <!-- begin: #col3 static column -->
      <div id="col3" role="main">
        <div id="col3_content" class="clearfix"> 
           <!-- Inhalt rechte Spalte -->
<!--
      <p><h3>Freizeit St&auml;dte</h3></p>
-->
      <p>
      <p id="freizeitstadt" >
        <p id="mainz">
        <a href="http://www.mainz.de">&quot;Mogontiacum&quot;</a> nannten die R&ouml;mer vor 2000 Jahren diesen Ort. Mittlerweile gibt es dort die Bundesligafu&szlig;baller von 05, ein Museum, das dem Erfinder des Buchdrucks gewidmet ist, die rheinland-pf&auml;lzische Landesregierung und einen 1000 Jahre alten Dom.<br />
        </p> <!-- mainz //-->
        <p id="wiesbaden">
        Pohls Hauptverbindung mit dem Rest der Welt ist die &quot;B&auml;derstra&szlig;e&quot;. An ihrem s&uuml;dlichen Ende liegt <a href="http://www.wiesbaden.de/">Wiesbaden</a>, mit seinen 15 Thermal- und Mineralquellen eines der &auml;ltesten Kurb&auml;der Europas. Das Stadtschloss der Herz&ouml;ge von Nassau bestand vermutlich seit dem Mittelalter und ist heute Sitz der hessischen Landesregierung.<br />
        </p> <!-- wiesbaden //-->
        <p id="badems">
          Am anderen Ende der &quot;B&auml;derstra&szlig;e&quot; liegt <a href="#">Bad Ems</a>.
        </p> <!-- badems //-->
        <p id="limburg">
        <a href="http://www.limburg.de">Limburg an der Lahn</a>
        </p> <!-- limburg //-->
        <p id="koblenz">
        <a href="http://www.koblenz.de">Koblenz</a>
        </p> <!-- koblenz //-->
        
      </p> <!-- freizeitstadt //-->
      
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
