<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 03</title>
</head>
<body>
    <?php 
    $TAUX_TVA = 20;
    $DEVISE = "MAD";
    $unitaire = 60;
    $quantite = 3;
    $total_ht = $unitaire * $quantite;
    $tva =  $total_ht * $TAUX_TVA / 100;
    $total_ttc = $total_ht + $tva;
    echo "<p>Le total HT est : $total_ht $DEVISE</p>";
    echo "<p>La TVA est : $tva $DEVISE</p>";
    echo "<p>Le total TTC est : $total_ttc $DEVISE</p>";
    ?>
</body>
</html>