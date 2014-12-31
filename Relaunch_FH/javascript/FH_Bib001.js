
/* scriptdatei f&uuml;r Projekt FH */



      function FillBig( bild, ansicht ) {
        var o;
        o=document.getElementById('big');
        with (o) {
          if ( ansicht=='s' ) {
            width='200';
            height='300';
          } else {
            width='500';
            height='333';
          } // if ansicht=='s'
          src=bild;
        } // with o
//        o=document.getElementById('textbereich'); // Objekt ok
//        alert('HALLO');
//        alert(o.firstChild.nodeValue); // OK
//        document.getElementById("textbereich").firstChild.nodeValue=text; // Klappt.
      } // FillBig
 
 