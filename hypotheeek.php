<html lang="nl">
<head>
<title>Hypotheek opdracht</title>
<style> section {float: left; margin-right: 18px; border-style: solid; backgroundcolor: red; }</style>
    </head>
    <body>
        <section>
            <h4> Maand </h4>
            <?php 
                for($i = 0; $i <= 300; $i++){
                    echo($i . "<br>");
                }
            ?>
        </section>
        <section>
            <h4> Afbetaling </h4>
            <?php 
                for($i = 0; $i <= 300; $i++){
                echo( $i * 550 . "<br>");
                }
         ?>
        </section>
        <section>
            <h4> Resterenf </h4>
            <?php 
                for($i = 300; $i >= 0; $i--){

                    echo( $i * 550 . "<br>");
                }
            ?>
        </section>
        <section>
            <h4> Rente </h4>
            <?php
                for($i = 300; $i >= 0; $i--){
                    $rest = $i * 550;
                    $jaarrente = 4;
                    echo( round( $rest * $jaarrente / 1200, 2) . "<br>");
                }
            ?>
        </section>