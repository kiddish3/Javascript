<?php
  function beschikbaarheid($merk, $os)
  {
    $beschikbaar = array(
                  "Toshiba" => array(
                            "XP" => true,
                            "vista" => false,
                            "linux" => true),
                  "Acer" => array(
                            "XP" => true,
                            "vista" => true,
                            "linux" => true),
                  "Hp" => array(
                            "XP" => true,
                            "vista" => false,
                            "linux" => false)
                  );
                  return($beschikbaar[$merk][$os]);

  }
  // var_dump($beschikbaar[$os]);
  function bestellingoverzicht()
  {
    $laptop["toshiba"] = "toshiba";
    $laptop["acer"] = "acer";

    $info[0] = "product";
    $info[1] = "merk";
    $info[2] = "model";
    $info[3] = "opsystem";
    $info[4] = "aantal";
    $info[5] = "prijs";

    echo "<br>
    <table width='80%' border='1'>
    <caption>
      <strong>Bestellingoverzicht</strong>
    <caption>
    <thead>
      <tr>
        <th>Product</th>
        <th>Merk</th>
        <th>Model</th>
        <th>OS</th>
        <th>Aantal</th>
        <th>Basisprijs</th>
      </tr>
    </thead>
    <tbody>";

    foreach ($laptop as $key => $value) {
      $aantal = $value."aantal";
      if ($_POST[$aantal] == 0) {
        continue;
      }
      $reij = "<tr>";
      for ($x=0; $x < count($info); $x++) {
        $element = $value . $info[$x];
        $reij = $reij . "<td>" . $_POST[$element] . "</td>";
        }
        $reij = $reij . "</tr>";
        echo $reij;
    }
    echo "</tbody></table>";
  }
?>
