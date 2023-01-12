<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Modifier l'employé : <?= $row['nom'] ?> </h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom" value="">
            <label>Prénom</label>
            <input type="text" name="prenom" value="">
            <label>âge</label>
            <input type="number" name="age" value="">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
    <?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=partiel;charset=utf8','root','root');
} catch (Exception $e) {
    die('Erreur :'. $e->getMessage());
}
$requete = $bdd->query('SELECT*FROM partiel') ;
echo'<table>
    <tr>
     <th>Nom</th>
     <th>Prénom</th>
     <th>âge</th>';


while($donnees = $requete->fetch()){
    echo'<tr>
            <td>'.$donnees['Nom'].'</td>
            <td>'.$donnees['Prénom'].'</td>
            <td>'.$donnees['âge'].'</td>
        </tr>';
}
echo'</tr>
            </table>';
    $requete = $bdd->exec('UPDATE partiel SET âge = "Directeur" WHERE prenom = "boris"');
?>
</body>

</html>