<?php
if(isset($_POST["checkout"])){
  $email = $_POST["email"];
  $naam = $_POST["naam"];
  $adres = $_POST["adres"];
  $plaats = $_POST["woonplaats"];
  $postcode = $_POST["postcode"];
}
  function emailcheck()
  {
    global $email;
    if (preg_match('/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9_\-\.]+\.[a-z-A-Z]{2,3}+$/i' , $email))
    {
      echo ("<br> email adres is correct");
      return(true);
    }
    else {
      echo ("<br> email adres is niet geldig!");
      return(false);
    }
  }

  function postcodecheck()
  {
    global $postcode;
    if (preg_match('/^[0-9]+[A-Z]+$/i' , $postcode))
    {
      echo ("<br> postcode is correct");
      return(true);
    }
    else {
      echo ("<br> postcode is niet geldig!");
      return(false);
    }
  }

  $positief = array("goed", "positief");

  // $poscount = 0;
  // $negcount = 0;


  function commentaarevalueren()
  {
    $commentaar = $_POST["commentaar"];
    echo "<br>Commentaar is: " . $commentaar;

    $negatief = array("beter", "slecht");
    $commentaar = str_replace($negatief, "*#@#*!%!", $commentaar);
    echo "<br> gefilterd commentaar is: " . $commentaar . "<br>";
    // if ($poscount > $negcount)
    // {
    //   echo "Commentaar is positief";
    //   echo "<br> Aantal positieve woorden is: " . $poscount;
    //   echo "<br> Aantal negatieve woorden is: " . $negcount;
    // }
    // elseif ($poscount = $negcount)
    // {
    //   echo "Commentaar is neutraal";
    //   echo "<br> Aantal positieve woorden is: " . $poscount;
    //   echo "<br> Aantal negatieve woorden is: " . $negcount;
    // }
    // elseif ($poscount < $negcount)
    // {
    //   echo "Commentaar is negatief";
    //   echo "<br> Aantal positieve woorden is: " . $poscount;
    //   echo "<br> Aantal negatieve woorden is: " . $negcount;
    // }
  }
?>
