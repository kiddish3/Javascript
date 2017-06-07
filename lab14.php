<!DOCTYPE html>
<html lang="nl">
  <head>
    <title>XXL Computer winkel</title>
  </head>
  <body>
    <h3>php lab 14</h3>
    <?php include("bestellingfunctie.php");?>
    <?php include("formfuncties.php");?>
    <table border=0 cellpadding=0 cellspacing=0 width=100%>
      <form name="orderform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <tr>
          Korting:<br>
          <input type="checkbox" id="student" name="student" value="yes">Student 15%<br>
          <input type="checkbox" id="senior" name="senior" value="yes">Senior 10%<br>
          <input type="checkbox" id="klant" name="klant" value="yes">Klant 5%<br>

        </tr>
        <hr>
        <tr>
          <td>
            betalingswijze:
            <input type="radio" name="betalingswijze" value="a" checked>Paypal
            <input type="radio" name="betalingswijze" value="b">Mastercard
            <input type="radio" name="betalingswijze" value="c">Visa
            <hr>
          </td>
        </tr>

        <tr>
          <td>
            <img src="laptop.jpg" alt="laptop" width="200pX" height="150px">
          </td>
        </tr>
        <tr>
          <td>
            Toshiba Satelite A100-510 Basisprijs 999.99
          </td>
        </tr>
        <tr name="toshibapart">
          <td><!--Shopping Cart Begin-->
            Operating System:
            <select name="toshibaopsystem">
              <option name="toshibaopsystem" value="XP">Windows XP</option>
              <option name="toshibaopsystem" value="vista">Windows Vista</option>
              <option name="toshibaopsystem" value="linux">Linux</option>
            </select>
            <input type="hidden" name="toshibaproduct" value="001">
            <input type="hidden" name="toshibamerk" value="Toshiba">
            <input type="hidden" name="toshibamodel" value="Satelite A100-510">
            Aantal:<input type="number" size="2" maxlength="3" name="toshibaaantal" required>
            <input type="hidden" name="toshibaprijs" value="999.99" >

            <input type="submit" name="button" value="bestel">
            <hr>
          </td>
        </tr>
        <!-- Boven is Toshiba, Beneden is Acer!!! -->
        <tr>
          <td>
            <img src="laptop2.jpg" alt="laptop" width="200pX" height="150px">
          </td>
        </tr>
        <tr>
          <td>
            Acer Aspire 5735Z Basisprijs 529.99
          </td>
        </tr>
        <tr name="acerpart">
          <td><!--Shopping Cart Begin-->
            Operating System:
            <select name="aceropsystem">
              <option name="aceropsystem" value="XP">Windows XP</option>
              <option name="aceropsystem" value="vista">Windows Vista</option>
              <option name="aceropsystem" value="linux">Linux</option>
            </select>
            <input type="hidden" name="acerproduct" value="002">
            <input type="hidden" name="acermerk" value="Acer">
            <input type="hidden" name="acermodel" value="Aspire 5735Z">
            Aantal:<input type="number" size="2" maxlength="3" name="aceraantal" required>
            <input type="hidden" name="acerprijs" value="529.99" >

            <input type="submit" name="button" value="bestel">
            <hr>
          </td>
        </tr>
      </form>
        <tr>
          <td>
            <?php

            if(isset($_POST['button']))
            {

              if ( isset($_POST["student"])){
                $student=15;
                  }
              else{
                $student= 0;
              }
              if ( isset($_POST["senior"])){
                $senior=10;
                  }
              else{
                $senior= 0;
              }
              if ( isset($_POST["klant"])){
                $klant=5;
                  }
              else{
                $klant= 0;
              }

              switch ($_POST["betalingswijze"]) {
                case 'a':
                  echo "<br>Uw betaling wordt gedaan met Paypal";
                  break;
                case 'b':
                  echo "<br>Uw betaling wordt gedaan met Mastercard";
                  break;
                case 'c':
                  echo "<br>Uw betaling wordt gedaan met Visa";
                  break;
                }

              if(isset($_POST["toshibapart"]))
              {
                echo "<br>";

                $merk = $_POST['toshibamerk'];
                $os = $_POST['toshibaopsystem'];

                beschikbaarheid($merk, $os);

                switch ($_POST["toshibaopsystem"])
                {
                  case "XP":
                    if (beschikbaarheid($merk, $os) != true) {
                      echo "Deze laptop ($merk) is niet beschikbaar met het XP operating system";
                    }
                    break;
                  case "vista":
                    if (beschikbaarheid($merk, $os) != true) {
                      echo "Deze laptop ($merk) is niet beschikbaar met het vista operating system";
                    }
                    break;
                  case "linux":
                    if (beschikbaarheid($merk, $os) != true) {
                      echo "Deze laptop ($merk) is niet beschikbaar met het linux operating system";
                    }
                    break;
                }
              }
              // Boven Toshiba, Beneden Acer!!!

              if(isset($_POST["acerpart"]))
              {
                echo "<br>";

                $merk = $_POST['acermerk'];
                $os = $_POST['aceropsystem'];

                beschikbaarheid($merk, $os);

                switch ($_POST["aceropsystem"])
                {
                  case "XP":
                    if (beschikbaarheid($merk, $os) != true) {
                      echo "Deze laptop ($merk) is niet beschikbaar met het XP operating system";
                    }
                    break;
                  case "vista":
                    if (beschikbaarheid($merk, $os) != true) {
                      echo "Deze laptop ($merk) is niet beschikbaar met het vista operating system";
                    }
                    break;
                  case "linux":
                    if (beschikbaarheid($merk, $os) != true) {
                      echo "Deze laptop ($merk) is niet beschikbaar met het linux operating system";
                    }
                    break;
                }
              }
              $totaleKorting = 0;
              $totaleKorting += $student + $senior + $klant;

              $aantalT = "";
              $aantalT = $_POST["toshibaaantal"];
              $totaalPrijsT = $aantalT * $_POST["toshibaprijs"];

              $aantalA = "";
              $aantalA = $_POST["aceraantal"];
              $totaalPrijsA = $aantalA * $_POST["acerprijs"];

              $totaalPrijs = $totaalPrijsT + $totaalPrijsA;
              $kortingBerekening = ($totaalPrijs / 100) * $totaleKorting;
              $kortingPrijs = $totaalPrijs - $kortingBerekening;

              echo "Korting is: $totaleKorting" . "%<br>";

              if ($totaalPrijs > 5000) {
                echo "Uw bestel limiet is overschreden.";
              }
              else {
                printf("totale prijs is: %.2f", $kortingPrijs);
              }
              bestellingoverzicht();
            }

            ?>
          </td>
        </tr>
      <form name="klantgegevens", action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table border="1">
          <tr>
            <td colspan="2">
              <b>Factuur klantgegevens</b>
            </td>
          </tr>
          <tr>
            <td width="100">Naam: </td>
            <td><input type="text" name="naam" size="55"></td>
          </tr>
          <tr>
            <td>Adres: </td>
            <td><input type="text" name="adres" size="55"></td>
          </tr>
          <tr>
            <td>Woonplaats: </td>
            <td>
              <input type="text" size="34" name="woonplaats">
              Postcode: <input type="text" size="6" name="postcode">
            </td>
          </tr>
          <tr>
            <td>e-mail: </td>
            <td><input type="text" size="55" name="email"></td>
          </tr>
          <tr>
            <td>Feedback: </td>
            <td><textarea cols="40" rows="33" name="commentaar"></textarea>></td>
          </tr>
        </table>
        <input type="submit" name="checkout" value="Checkout">
      </form>
      <?php
        if(isset($_POST['checkout']))
        {
          emailcheck();
          postcodecheck();
          commentaarevalueren();
        }
      ?>
    </table>
  </body>
</html>
