<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="invoerformulier" method="get" action="mijnmuziek.php">
        Artiest: <input type="text" name="artiest"><br>
        Titel: <input type="text" name="titel"><br>
        Jaar van uitkomst: <input type="text" name="release"><br>
        Muzieksoort: <input type="text" name="genre"><br>
        <input type="submit" name="submit" value="verstuur">
    </form>
    <?php
    echo "Mijn favoriete artiest is ".$_GET["artiest"]."<br>";
    echo "De titel van mijn favoriete track is ".$_GET["titel"]."<br>";
    echo "De jaar dat deze track is uitgebracht is ".$_GET["release"]."<br>";
    echo "Mijn favoriete muzieksoort is ".$_GET["genre"];
    ?>
</body>
</html>