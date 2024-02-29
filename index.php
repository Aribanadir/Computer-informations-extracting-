<?php

//execution de la commande ipconfig en utilisant batch et php ( et txt )
$testStart = exec('configadd\ipconfigall.bat'); // le dossier configadd est le dossier la ou les fichier bat son stocké vous pouvez modifier l'emplacement des fichier mais n'oublier pas de changais cette ligne


$end = "end";
$search = 'Type de noeud';
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
	$type_de_noeud = $strArray[17];

	echo $type_de_noeud . "<br/>" ;
}
}
if(!$found)
{
echo 'Pas de résultat trouvé !';
}
?>
