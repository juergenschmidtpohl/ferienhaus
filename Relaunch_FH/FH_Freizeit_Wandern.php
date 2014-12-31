<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Ferienhaus am Limeskastell Freizeitgestaltung Wandern</title>
<!-- (en) Add your meta data here -->
<!-- (de) F&Atilde;¼gen Sie hier Ihre Meta-Daten ein -->
<meta name="author" content="J&uuml;rgen Schmidt">
<meta name="description" content="Website Ferienhaus am Limeskastell Freizeit Wandern im Naturpark Nassau">
<meta name="keywords" content="Ferienhaus, Limeskastell, Welterbe, UNESCO, Limes, Rhein, Lahn, Erholung, Urlaub, Wandern, Reiten, Kanu">
<meta name="keywords" content="UNESCO-Welterbe, R&auml;tisch-romanischer Limes, Mittelrheintal">
<meta name="keywords" content="Abendspaziergang, Wandertouren, Wanderweg, Wanderwege, Wanderung, Natur, Naturpark Nassau, wandern">
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
         define( 'MEIN_NAME', 'Wandern' );
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
  <img src="./Bilder/manOnRock 1.jpg" class="LeftPic" width="197" height="300" title="Sonnige Aussichten" alt="Mann auf einem Felsen kauernd" />

        <p><h3>Wandern</h3></p>

        <p>
        Vom 'kleinen Abendspaziergang' um den Miehlener See oder am Limes bis zu anspruchvollen Touren entlang von Rhein und Lahn gibt es f&uuml;r jeden Anspruch passende Wege.</p>
<p>Viele interessante Tourenvorschl&auml;ge sind im 
<a href="http://www.ich-geh-wandern.de/pohl-nassau">Wanderatlas</a> zusammengefasst.</p>
        <p>
           Die <b>Topographische Karte 1:50000 Naturpark Nassau vom Landesamt f&uuml;r Vermessung und Geobasisinformation <a href="http://www.lvermgeo.rlp.de">(LVermGeo)</a> Rheinland-Pfalz Ausgabe&nbsp;2011 ISBN&nbsp;978-3-89637-305-6</b><br /> gibt allen, die eigene Wege finden wollen den n&ouml;tigen &Uuml;berblick.<br />
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
