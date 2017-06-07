<?php
  function welcome()
  {
    $gebruiker = $_POST["user"];
    setcookie("Gebruiker", "sanskrit");
  }
?>
