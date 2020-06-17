<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<body>
    <?php
    function schrijfKleur($rood) {
        echo "<p style= color:$rood>Deze tekst heeft de kleur $rood</p>";
      }
      
      schrijfKleur("#FF0000");
      schrijfKleur("green");
      schrijfKleur("#0000FF");
      schrijfKleur("yellow");
      ?>

</body>
</html>