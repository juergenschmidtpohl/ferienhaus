<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Ferienhaus am Limeskastell</title>
<!-- (en) Add your meta data here -->
<!-- (de) F&Atilde;¼gen Sie hier Ihre Meta-Daten ein -->
<meta name="author" content="J&uuml;rgen Schmidt">
<meta name="description" content="Website Ferienhaus am Limeskastell &Uuml;bersicht &uuml;ber die M&ouml;glichkeiten zur Freizeitgestaltung">
<meta name="keywords" content="Ferienhaus, Limeskastell, Welterbe, UNESCO, Limes, Rhein, Lahn, Erholung, Urlaub, Wandern, Reiten, Kanu">
<meta name="keywords" content="UNESCO-Welterbe, R&auml;tisch-romanischer Limes, Mittelrheintal">
<meta name="keywords" content="Abendspaziergang, Wandertouren, Wanderweg, Wanderwege, Wanderung, Natur">
<meta name="keywords" content="Limeswanderweg, Westerwaldverein, Nassauische Kleinbahn, Radfahren, Radtouren, Freizeit">
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
           
<div style="margin: 180px 0px 0px 0px;" class="fb-like" data-href="http://www.ferienhaus-am-limeskastell.de" data-send="true" data-layout="box_count" data-width="450" data-show-faces="false" data-font="verdana"></div>
           
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
      <p><h3>&Uuml;bersicht Freizeit</h3></p>
-->
      <p>
        <img src="./Bilder/hiking_boot_4.jpg" class="LeftPic" width="120" height="103" title="Wanderungen im Naturpark Nassau" alt="Wanderstiefel" />
        <h3>Zu Fu&szlig;...</h3>
        F&uuml;r alle Aktivit&auml;ten,vom kleinen Abendspaziergang bis zur Tagestour bietet der <a href="http://www.naturparknassau.de" >Naturpark Nassau</a> 290 km &uuml;berregionale und 750 km regionale Wanderwege. Von der Haust&uuml;r bis zum Limeswanderweg sind es nur ein paar Schritte.
      </p>
      <hr />      
      <p name="freizeitradeln" >
        <h3>...mit dem Fahrrad...</h3>
        <img src="./Bilder/mountain_bike_rider_1.jpg" class="RightPic" width="77" height="150" title="Rad fahren im Naturpark Nassau" alt="Radfahrer im Wald" />
        Auf dem Lahn-Radweg durch eine reizvolle Flu&szlig;landschaft, geschichtstr&auml;chtige St&auml;dte und kleine D&ouml;rfer rollen.
        Einer vergangenen Kultur auf der Trasse der ehemaligen <a href="http://www.achim-bartoschek.de/bahn_rp.htm#rp4_07"> Nassauischen Kleinbahn </a>folgen. Oder mit dem Mountainbike die kr&auml;ftigen Anstiege von Lahn und Rhein bew&auml;ltigen.
        Hier gibt es f&uuml;r jede &quot;Muskelgruppe&quot; das passende Bet&auml;tigungsfeld.
      </p>

      <hr />      
      <p id="freizeitauto" >
        <img src="./Bilder/1969ChevellePro_Street_1.jpg" class="LeftPic" width="120" height="60" title="Mit dem Auto die Gegend erkunden" alt="Automobil" />
      <h3>...oder auto mobil.</h3>
        Mit dem eigenen Auto lassen sich Limburg, Koblenz, Bad Ems und die Landeshauptst&auml;dte Wiesbaden und Mainz bequem erreichen. Einen Tagesausflug wert sind das <a href="http://de.wikipedia.org/wiki/Kannenb%C3%A4ckerland">Kanneb&auml;cker Land</a>. Romantisch wird es im Welterbe <a href="http://www.welterbe-mittelrheintal.de/index.php?id=318&L=0"> Mittelrheintal</a>, wo Burgen, Weinorte und nat&uuml;rlich die Loreley warten. 
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
