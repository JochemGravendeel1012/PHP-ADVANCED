<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="advanced-2.php" name="invoerformulier" method="POST">
        <label for="tekstkleur">Kies je tekstkleur kleur: </label>
        <select name="tekstkleur" id="tekstkleur">
            <?php
            $tekstKleuren = array("red", "blue", "green", "black", "brown");
            foreach($tekstKleuren as $tekstKleur) {
                ?>
            <option value="<?php echo $tekstKleur?>"><?php echo $tekstKleur ?></option>
            <?php
            }
            ?>
        </select><br>
        <label for="achtergrond">Kies je achtergrond kleur: </label>
        <select name="achtergrond" id="achtergrond">
            <?php
            $kleuren = array("red", "blue", "green", "black", "brown");
            foreach($kleuren as $kleur) {
                ?>
            <option value="<?php echo $kleur?>"><?php echo $kleur ?></option>
            <?php
            }
            ?>
        </select><br>
        <label for="dikte">tabel-border dikte :</label>
        <select name="dikte" id="dikte">
            <?php
            $diktes = array("1px", "5px", "10px");
            foreach($diktes as $dikte) {
                ?>
            <option value="<?php echo $dikte?>"><?php echo $dikte ?></option>
            <?php
            }
            ?>
        </select><br>
        <label for="padding">Padding :</label>
        <select name="padding" id="padding">
            <?php
            $paddings = array("1px", "5px", "10px");
            foreach($paddings as $padding) {
                ?>
            <option value="<?php echo $padding?>"><?php echo $padding ?></option>
            <?php
            }
            ?>
        </select><br>
        <input type="submit" name="submit" value="verstuur">
    </form>

</body>
</html>