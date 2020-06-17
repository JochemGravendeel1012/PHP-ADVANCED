<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        background-color: <?php echo $_POST["lievelingskleur"];?>;
        }
    </style>
</head>
<body>
    <?php
    echo "Voornaam is ".$_POST["naam"]."<br>";
    echo "Achternaam is ".$_POST["achternaam"]."<br>";
    echo "Klas is ".$_POST["klas"]."<br>";
    echo "Leeftijd is ".$_POST["leeftijd"]."<br>";
    echo "Adres is ".$_POST["adres"]."<br>";
    echo "Plaatsnaam is ".$_POST["plaatsnaam"]."<br>";
    echo "Favoriete muziekband is ".$_POST["favorieteMuziekband"]."<br>";
    echo "Geslacht is ".$_POST["geslacht"]."<br>";
    echo "Lievelingskleur is ".$_POST["lievelingskleur"];
    ?>
</body>
</html>