<form method="get">
    Entrez votre nom <br>
    <input type="text" name="username">
    <br>Entrez votre prénom<br>
    <input type="text" name="firstname">
    <br>Entrez votre e-mail<br>
    <input type="mail" name="email">
    <input type="submit" value="envoyer">
</form>
    
<table>
    <tr>
        <td><b>Argument</b></td>
        <td><b>Valeur</b></td>
    </tr>
    <tr>
        <td>Nom</td>
        <td><?php echo $_GET[username] ?></td>
    </tr>
    <tr>
        <td>Prénom</td>
        <td><?php echo $_GET[firstname] ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $_GET[email] ?></td>
    </tr>
</table>