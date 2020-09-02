<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php echo $_POST["achtergrond"];?>;
            color: <?php echo $_POST["tekstkleur"];?>;
        }
        td, th {
            border: <?php echo $_POST["dikte"] ?> solid black;
            padding: <?php echo $_POST["padding"] ?>;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <?php
        function maakRij($gegeven, $value) {
            echo" <tr>
            <td>". $gegeven . "</td>
            <td>".$value . "</td>
            </tr>" ;
        }
        ?>
            <?php
            $gegevens = array(  "naam" => "Jochem ", 
                                "leeftijd" => "19 ", 
                                "muzieksmaak" => "hardcore ",
                                "woonplaats" => "de Kwakel ");
            foreach($gegevens as $gegeven => $value) {
                maakRij($gegeven, $value);
            }
                ?>
    </table>
</body>
</html>