<!DOCTYPE html>
<html lang="en">

<head>
    <title>Style css</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title> Jour 6 - Job05</title>
    <?php
    if($_POST){
        switch($_POST["style"]){
            case "style_1":
                echo '<link rel="stylesheet" href="style1.css">';
                break;
            case "style_2":
                echo '<link rel="stylesheet" href="style2.css">';
                break;
            case "style_3":
                echo '<link rel="stylesheet" href="style3.css">';
                break;
        }
    }
    ?>

</head>

<body>
<label for="style-select">Choix du style :</label>
<form action="index.php" method="post">
    <select name="style" id="style-select">
    <option value="style_1"> Style 1</option>
    <option value="style_2"> Style 2</option>
    <option value="style_3"> Style 3</option>
    <input type="submit" value="Confirmer">
</select>
</form>
</body>
</html>
