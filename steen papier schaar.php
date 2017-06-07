<?php

<style> section{float: left; margin-right: 18px; border-style: solid; backgroundcolor: red; } </style>

function spelen($speler_1, $speler_2, $gewonnen = array(1, 2, 0)){

    return ($speler_1 != $speler_2) ? ($gewonnen[$speler_1] == $speler_2) ? 1 : 0 : 2 ;

}
<section>
if (isset($_POST['submit'])){

    $jij = $_POST['keuze'];
    $computer = rand(0, 2);

    echo '<strong>';
    echo 'De computer had ';

    if ($computer == 0){
        echo 'steen';
    }elseif ($computer == 1){
        echo 'schaar';
    }elseif ($computer == 2){
        echo 'papier';
    }


    echo ' en jij had ';

    if ($jij == 0){
        echo 'steen';
    }elseif ($jij == 1){
        echo 'schaar';
    }elseif ($jij == 2){
        echo 'papier';
    }

    echo '</strong>';
    echo '<br /><br />';

    if(spelen($jij, $computer) == 0){
        echo '<span style="color: red;">Verloren</span>';
    }elseif(spelen($jij, $computer) == 1){
        echo '<span style="color: green;">Gewonnen</span>';
    }elseif(spelen($jij, $computer) == 2){
        echo '<span style="color: black;">Gelijkspel</span>';
    }

    echo '<br /><br />';
    echo '<a href="' . $_SERVER['PHP_SELF'] . '">Speel nog eens!</a>';

}else{
</section>
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <h3>Steen, Papier, Schaar</h3>
        <br />



        <select name="keuze">
            <option value="0">Steen</option>
            <option value="1">Schaar</option>
            <option value="2">Papier</option>
        </select>

        <br />

        <input type="submit" name="submit" value="Ga door">

    </form>

    <?php

}

?>
