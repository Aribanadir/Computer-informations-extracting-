<?php

//vous pouvez

//execution de la commande ipconfig en utilisant batch et php ( et txt )
$testStart = exec('configadd\ipconfigall.bat'); // le dossier configadd est le dossier la ou les fichier bat son stocké vous pouvez modifier l'emplacement des fichier mais n'oublier pas de changais cette ligne


$end = "end";
$search = 'Type de noeud'; //si votre system n'est pas en francais vous devez modifier cette partie
$lines = file('configadd\ipconfigall.txt');
$found = false;

foreach($lines as $type_de_noeudf)
{
if(strpos($type_de_noeudf, $search) !== false)
{

	$found = true;
	echo $end . "<br/>";
	echo $type_de_noeudf . "<br/>" ;

	$strArray = explode(' ', $type_de_noeudf);
	$type_de_noeud = $strArray[17];// si votre system n'est pas en francais changez cette partie

	echo $type_de_noeud . "<br/>" ;
	// vous pouvez ajouter plus d'option depuis le meme fichier text
}
}
if(!$found)
{
echo 'Pas de résultat trouvé ! ';
}
?>
