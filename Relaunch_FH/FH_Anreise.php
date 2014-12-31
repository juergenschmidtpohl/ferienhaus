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
<meta name="keywords" content="Anreise, Google earth, Lage">
<meta name="robots" content="index|follow">


<link href="./css/FH_central.css" rel="stylesheet" type="text/css"/>
<link href="./css/layout_2col_left_13.css" rel="stylesheet" type="text/css"/>
<!--[if lte IE 7]>
<link href="./css/patches/patch_layout_draft.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script type="text/javascript">			
		function GetDirections()
		{				
			var SourceAdress = 'saddr=';
			var DestinationAddress = 'daddr=' + 'Kirchstrasse 8' + ', ' + 'Pohl' + ', ' + 'Deutschland' + ' ' + '56357'; //destination address pulled from admin
			var Url = '';
			//read out source adress from the input field
			SourceAdress += document.form1.saddr.value + ',' + document.form1.saddr2.value + ',' + document.form1.saddr22.value + ',' + document.form1.saddr222.value;	
			//form the url 
			Url = 'http://maps.google.com/maps?' + SourceAdress + '&' + DestinationAddress; // + ',output,html';	
			window.open(Url,'directions','width=1024,height=768,scrollbars=yes,toolbar=no,location=no, resizable=no'); 			
		}
	</script>


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
        <h2>Wege &amp; Anreise</h2>
        <!--
        <div id="bilderrahmen" class="minibild">
          <img src="Bilder/minikarte.gif" heigth="200" width="156" title="kleine Landkarte" />
        </div>
        -->
        
        <!-- Modul Routenplaner //-->
			<div class="moduletableroutenplanung">
					<h3>Ihr Weg zu uns</h3>
        
        <div style="width:50%;">
          <form name="form1" action="">
          
            <div style="width:20%;">Strasse:
            <input class="inputbox" type="text" name="saddr" /></div>
            
            <div style="width:20%;">Stadt:
            <input class="inputbox" type="text" name="saddr2" /></div>
            
            <div style="width:8%;">Land:
            <input class="inputbox" type="text" name="saddr22" /></div>
            
            <div style="width:12%;">PLZ:
            <input class="inputbox" type="text" name="saddr222" /></div>
            
            <div style="width:20%;margin-top:5px;">
            <input class="button" type="submit" value="Route finden" name="checkit" onclick="javascript:GetDirections();return false;"/>
            </div>
          </form>
        </div>
      </div>
      
        <!-- Ende Modul Routenplaner //-->
<div style="margin: 120px 0px 0px 25px;" class="fb-like" data-href="http://www.ferienhaus-am-limeskastell.de" data-send="true" data-layout="box_count" data-width="450" data-show-faces="false" data-font="verdana"></div>
        
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
<p>Sie erreichen uns von Norden &uuml;ber die A3, Abfahrt Montabaur. Von dort &uuml;ber Nassau auf die B260 Richtung Wiesbaden. <br />Von S&uuml;den &uuml;ber die A66, Abfahrt Martinstal. Danach folgen Sie der B&auml;derstra&szlig;e B260 Richtung Nassau / Koblenz bis Pohl.<br />
Aus westlicher Richtung von der A61 nach Koblenz, danach die B260 Richtung Nassau/Wiesbaden.<br />
</p>
<p>
      
      <!-- google maps -->
      <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/?ie=UTF8&amp;ll=50.250312,7.866303&amp;spn=0.334568,0.617294&amp;t=h&amp;z=11&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/?ie=UTF8&amp;ll=50.250312,7.866303&amp;spn=0.334568,0.617294&amp;t=h&amp;z=11&amp;source=embed" style="color:#0000FF;text-align:left">Gr&ouml;&szlig;ere Kartenansicht</a></small>
      
<p><h3>An-/ Abreise</h3></p>
Am Anreisetag stehen Ihnen die Ferienwohnungen ab 15.00 Uhr
zu Verf&uuml;gung. Wir sind dankbar, wenn Sie versuchen, bis 18.00 Uhr anzureisen.
Am Abreisetag &uuml;bergeben Sie die Ferienwohnung bitte bis 10.00 Uhr.
Anreisen sind bei uns an allen Tagen der Woche m&ouml;glich. 
</p>
      
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
