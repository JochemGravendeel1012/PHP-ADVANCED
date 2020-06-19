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
            $gegevens = array(  "naam" => "Jochem ", 
                                "leeftijd" => "19 ", 
                                "muzieksmaak" => "hardcore ",
                                "woonplaats" => "de Kwakel ");
            foreach($gegevens as $gegeven => $value) {
            ?>
            <tr>
            <td><?php echo $gegeven;?></td>
            <td><?php echo $value;?></td>
            </tr>
            <?php
            }
            ?>
    </table>
</body>
</html>