<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="">
    <label for="">Naam</label>
    <table>
    <?php
    $klassen = array(
        $student  = array(
            "voornaam" => "Jan",
            "achternaam" => "Janssen",
            "klas" => "9A",
            "Leeftijd" => 17,
            "Woonplaats" => "Amstelveen",   
        ));
        
        foreach ($student as $value) {
            echo '<tr>' . $value . '</tr>';
        }
        ?>
    </table>
    
    
</form>
</body>
</html>


