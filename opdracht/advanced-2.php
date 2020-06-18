<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php echo $_POST["achtergrond"];?>;
        }
        table, th, td, tr {
            border: <?php echo $_POST["dikte"] ?> solid black;
            padding: <?php echo $_POST["padding"] ?>;
        }
    </style>
</head>
<body>
    <table>

        <?php
        $gegevens = array(  "naam" => "Jochem ", 
        "leeftijd" => "19 ", 
        "muzieksmaak" => "hardcore ",
        "woonplaats" => "de Kwakel ");
        foreach($gegevens as $gegeven) {
        ?>
        <tr value="<?php echo $gegeven?>"><?php echo $gegeven?></tr>
        <?php
        }
        ?>
    </table>
</body>
</html>