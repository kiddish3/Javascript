<?php
$datum = date("d F y") ;
echo("<br />Geformatterd;" . $datum);

$timestamp = time();
echo("<br/>Timestamp:" .$timestamp) ;

$dag = 23;
$datum = mktime(12,0,0,0,$dag + 30);
echo("<br /> over 30 dagen;" . $datum);




?>