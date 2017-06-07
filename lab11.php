<?php
$GLOBALS ['url'] = "www.mijndomeinnaam";
//superglobale variabele

function show()
{
echo "<br /> URL :" . $GLOBALS['url'];
}

show();

?>

<?php

$GLOBALS['url'] = "wwww.mijndomeinnaam.nl";
//superglobale variabele
global $email;
$email = "webmaster@mijndomeinnaam.nl";
//globale variabele

function show2()
{
    echo "<br />URL:" . $GLOBALS['url'];

}

show2();
?>

<?php
$GLOBALS['url'] = "www.mijndomeinnaam";
//superglobale variabele
 global $email;
 //globale variabele

 function show3()
 {
     global $email;
     //maak de globale variabele hier zichtbaar
     echo "<br /> URL:" . $GLOBALS['url'];
     echo "<br /> email:" . $email;
 }
 show3();

 ?>

 <?php
 $GLOBALS ['url'] = "www.mijndomeinnaam.nl";
 // superglobale variabele
 global $email;
 $email = "webmaster@mijndomeinnaam.nl";
// globale variabele

define ('ADRES', "Kruislaan 111"); //constante

function show4()
{
    global $email;
    //maak de globale variabele hier zichtbaar
    echo "<br /> URL:" . $GLOBALS['url'];
     echo "<br /> email:" . $email;
 
}
show4();
?>

<?php
$GLOBALS['url'] = "www.mijndomeinnaam";
//superglobale variabele
 global $email;
 $email = "webmaster@mijndomeinnaam.nl";
 //globale variabele


 define ('BTW', 0.19);

 echo $email;

 function show5()
 {
     global $email;
     //maak de globale variabele hier zichtbaar
     echo "<br /> URL:" . $GLOBALS['url'];
     echo "<br /> email:" . $email;
     echo "<br /> adres:" . ADRES;
 }

 function showbezoekers()

 {
     static $aantalbezoekers;
     //static variabele binnen function
     $aantalbezoekers++;
     echo "<br />Aantal bezoekers:" . $aantalbezoekers; 
 }
 show5();
 showbezoekers();
 showbezoekers();


 ?>
<br />
 <?php
function aboutus()
{
    
    define('BEDRIJFSNAAM', "XXL COMPUTERS");
    define('BEDRIJFSADRES', "LANGELAAN 1234");
    global $telefoonnummer;
    $telefoonnummer = "0201234567";

     echo "<br /> about us:";
    echo "<br />Bedrijfsnaam:" . BEDRIJFSNAAM; 
    echo "<br />Bedrijfsadres:" . BEDRIJFSADRES; 
    echo "<br /> telefoonnummer:" . $telefoonnummer;
}
aboutus();

?>