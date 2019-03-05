<?php
try
{
	$bdd = new PDO ("mysql:host=localhost;dbname=gsb;charset=utf8",'root');
}
catch (Exception $e)
{
	die('Erreur :'  .$e->getMessage());
}

$reponse = $bdd -> query('SELECT prenom FROM user');

while ($donnees = $reponse->fetch())
{

	echo $donnees['prenom'] . '</br>';

}

$reponse -> closeCursor();
?>
