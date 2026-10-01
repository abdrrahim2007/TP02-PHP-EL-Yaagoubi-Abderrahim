<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 02</title>
</head>
<body>
    <?php
    $nom = "EL Yaagoubi";
    $prenom = "Abderrahim";
    $age = 19;
    $formation = "Groupe 3";
    $phrase = "<h1>Bienvenue  $prenom  $nom </h1> <p>Je suis un étudiant de $formation et j'ai $age ans</p>";
    $phrase .= "J'apprends PHP";
    echo $phrase;
    $note = 12;
    $Note = 16;
    echo "<p> &dollar;note est : $note</p>";
    echo "<p> &dollar;Note est : $Note</p>";
    ?>
</body>
</html>