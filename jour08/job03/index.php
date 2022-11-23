<?php
session_start();

if(!isset($_SESSION['name']) || isset($_POST['reset'])){
    $_SESSION['name']=[];
}
?>

<form method="post">
    Entrez votre prénom : <br>
    <input type="text" name="name">
    <input type="submit" value="Ajout"> <br>
</form>
<form method="post">
<input type="submit" name="reset" value="Renitialiser la liste">
</form>

<?php
    if(isset($_POST['name'])){
        $_SESSION['name'][] = $_POST['name'];

        echo '<ul>';
        foreach($_SESSION['name'] as $name){
            echo "<li>$name</li>";
        }
        echo '</ul>';
    }
?>





