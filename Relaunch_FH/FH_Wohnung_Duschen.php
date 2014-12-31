<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Ferienhaus am Limeskastell</title>
<!-- (en) Add your meta data here -->
<!-- (de) F&Atilde;¼gen Sie hier Ihre Meta-Daten ein -->
<meta name="author" content="J&uuml;rgen Schmidt">
<meta name="description" content="Website Ferienhaus am Limeskastell Dusche, Toilette, Nasszelle">
<meta name="keywords" content="Ferienhaus, Limeskastell, Welterbe, UNESCO, Limes, Rhein, Lahn, Erholung, Urlaub, Wandern, Reiten, Kanu">
<meta name="keywords" content="UNESCO-Welterbe, R&auml;tisch-romanischer Limes, Mittelrheintal">
<meta name="keywords" content="Duschen, Waschen, Schweiss, absp&uuml;len, Dusche, Toilette, Schminkspiegel, F&ouml;hn, Waschmaschine, Nasszelle, Warmwasser" />
<meta name="robots" content="index|follow">


<link href="./css/FH_central.css" rel="stylesheet" type="text/css"/>
<link href="./css/layout_2col_left_13.css" rel="stylesheet" type="text/css"/>
<!--[if lte IE 7]>
<link href="./css/patches/patch_layout_draft.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script type="text/javascript" src="./javascript/FH_Bib001.js"></script>

</head>
<body>
        <?php include("FH_BibNavigation.php"); 
         define( 'MEIN_NAME', 'Duschen' );
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
    
    <!-- Die Bilder 1,4,5,6 sind senkrecht !! -->
      <table>
        <tr class="bigview">
          <td colspan="6" align="center"><img id="big" src="./Bilder/FH_Wohnung_Duschen01.jpg" width="200" heigth="333" /></td>
        </tr>
        <tr class="thumbs">
          <td><img id="small_1" src="./Bilder/tmb_FH_Wohnung_Duschen01.jpg" width="67" heigth="100" 
               onmouseover="FillBig('./Bilder/FH_Wohnung_Duschen01.jpg','s')" /></td>
               
          <td><img id="small_2" src="./Bilder/tmb_FH_Wohnung_Duschen02.jpg" width="100" heigth="67" 
               onmouseover="FillBig('./Bilder/FH_Wohnung_Duschen02.jpg','w')" /></td>
               
          <td><img id="small_3" src="./Bilder/tmb_FH_Wohnung_Duschen03.jpg" width="100" heigth="67" 
               onmouseover="FillBig('./Bilder/FH_Wohnung_Duschen03.jpg','w')" /></td>
               
          <td><img id="small_4" src="./Bilder/tmb_FH_Wohnung_Duschen04.jpg" width="67" heigth="100" 
               onmouseover="FillBig('./Bilder/FH_Wohnung_Duschen04.jpg','s')" /></td>
               
          <td><img id="small_5" src="./Bilder/tmb_FH_Wohnung_Duschen05.jpg" width="67" heigth="100" 
               onmouseover="FillBig('./Bilder/FH_Wohnung_Duschen05.jpg','s')" /></td>
               
          <td><img id="small_6" src="./Bilder/tmb_FH_Wohnung_Duschen06.jpg" width="67" heigth="100" 
               onmouseover="FillBig('./Bilder/FH_Wohnung_Duschen06.jpg','s')" /></td>
        </tr>
      </table>
    </div> <!-- graphikbereich -->

    <div id="textbereich" class="beschreibung">
      Duschen.
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
