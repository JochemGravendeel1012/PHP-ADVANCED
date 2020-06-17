<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function rekenUit($getal1, $getal2, $getal3) {
        $totaal = $getal1+$getal2+$getal3;
        return $totaal;
    }

    $totaalVanAlles = rekenUit("4","2","9" );
    $totaalvanAlles2= rekenUit("3","7","10");
    $totaalvanAlles3= rekenUit("12","7","10");
    echo $totaalVanAlles."<br>".$totaalvanAlles2."<br>".$totaalvanAlles3;
    ?>
</body>
</html>