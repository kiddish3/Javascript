<?php 
$GLOBALS['url'] = "www.mijndomeinnaam.nl"; //superglobale variabele 
global $email; 
$email = "webmaster@mijndomeinnaam.nl"; //globale variabele  

define('ADRES', "Kruislaan 111"); //constante 
define('BTW', 0.19);              //constante  

echo $email;

 function show() {     
global $email;     //maak de globale variabele hier zichtbaar     
echo "<br />URL:" . $GLOBALS['url'];     
echo "<br />Email:" . $email; 
} 


function showbezoekers()
 {     
static $aantalbezoekers;     //static variabele binnen functie     
 $aantalbezoekers++;     
 echo "<br />Aantal Bezoekers:" . $aantalbezoekers; }  
 function aboutus() 
 {  
 define('Bedrijfsnaam', "XXL Computers");  
 }
 show(); 
 showbezoekers(); 
 showbezoekers(); 

 
 
 
 ?>