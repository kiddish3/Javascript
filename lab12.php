<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>XXL ComputerWinkel</title>
  </head>
  <body>
    <h3>php lab 12</h3>
<?php include ("cookiefuncties.php"); ?>
    <table border=3 cellpadding=3 cellspacing=3>
      <form name="orderform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
       <tr>
         <td>gebruikersnaam: </td>
         <td><input type="text" name="user"></td>
         <td><input type="submit" name="send" value="inloggen"></td>
  <?php
            $cookie_name = $_POST["user"];
            $cookie_value = $_POST["user"];
            setcookie($cookie_name, $cookie_value);
   ?>
       </tr>
      </form>
    </table>
  <?php
      $datum = time();
      $nu = getdate($datum);
      $nu["hours"] = $nu["hours"] + 1;
    echo ("<br>Tijd: " . $nu["hours"] . ":" . $nu["minutes"] . ":" . $nu["seconds"]);

    if(isset($_POST["send"]))
      {
      if(!isset($_COOKIE[$cookie_name]))
        {
        echo "<br>Cookie named " . $cookie_name . " is not set!";
        }
      else {
          // echo "<br>Cookie " . $cookie_name . " is set! <br>";
          // echo "Value is " . $_COOKIE[$cookie_name] . "<br>";

       echo "<br>Hallo " . $cookie_name . "! Welkom terug bij de XXL Computer webwinkel";
        }
      }
    ?>
 </body>
</html>
