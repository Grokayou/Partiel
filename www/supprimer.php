<?php
  //connexion a la base de données
  try{
    $bdd = new PDO('mysql:host=localhost;dbname=partiel;charset=utf8','root','root');
} catch (Exception $e) {
    die('Erreur :'. $e->getMessage());
}
  //récupération de l'id dans le lien
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

  //requête de suppression
  $requete = $bdd->exec('DELETE FROM users WHERE Prénom = "boris"');
  //redirection vers la page index.php
?>