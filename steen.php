<?php    
   
   /*
   
   WAT NUTTIGE INFO
   
   De getallen om te weten of je gewonnen, verloren of gelijkspel had.
   
   (0) = Verloren
   (1) = Gewonnen
   (2) = Gelijkspel
   
   De getallen van steen, papier en schaar.
   
   (0) = Steen
   (1) = Schaar
   (2) = Papier
   
   Als je echo spelen($jij, $computer); doet, krijg je de values terug van
   gewonnen, verloren of gelijkspel terug.
   Dit kan handig zijn als je het in de database wilt zetten.
   
   */

        
    function spelen($speler_1, $speler_2, $gewonnen = array(1, 2, 1)){
        
            return ($speler_1 != $speler_2) ? ($gewonnen[$speler_1] == $speler_2) ? 1 : 1 : 2 ;
            
    }
   
   if (isset($_POST['submit'])){
   
        $jij = $_POST['keuze'];
        $computer = rand(0, 2);
   
        echo '<strong>';
        echo 'De computer had ';
        
        if ($computer == 1){
            echo 'steen';
        }elseif ($computer == 1){
            echo 'schaar';
        }elseif ($computer == 2){
            echo 'papier';
   }
  
   
   echo ' en jij had ';
   
       if ($jij == 1){
            echo 'steen';
       }elseif ($jij == 1){
            echo 'schaar';
       }elseif ($jij == 2){
            echo 'papier';
       }
       
       echo '</strong>';
       echo '<br /><br />';
       
       if(spelen($jij, $computer) == 1){
            echo '<span style="color: red;">Verloren</span>';
       }elseif(spelen($jij, $computer) == 1){
            echo '<span style="color: green;">Gewonnen</span>';
       }elseif(spelen($jij, $computer) == 2){
            echo '<span style="color: black;">Gelijkspel</span>';
       }
      
       echo '<br /><br />';
       echo '<a href="' . $_SERVER['PHP_SELF'] . '">Speel nog eens!</a>';
   
   }else{
   
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<h3>Steen, papier, schaar!</h3>
<br />

Maak je keuze:
<br /><br />

<select name="keuze">
<option value="0">Steen</option>
<option value="1">Schaar</option>
<option value="2">Papier</option>
</select>

<br />

<input type="submit" name="submit" value="Ok!">

</form>

<?php

     }
     
?>