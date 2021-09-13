<?php
/**
 * Created by PhpStorm.
 * User: Timothee
 * Date: 12/09/2017
 * Time: 09:56
 */

$nom_professeur = urlencode("Robert") ;
$prenom_professeur = urlencode("Timothée") ;
$nom_deleg = urlencode("momo");
$prenom_delegue = urlencode("drame")

$lien_script = "EXPL1_avisProfesseur.php?nomProf=$nom_professeur&prenomProf=$prenom_professeur " ;
$lien_script = "EXPL1_avisProfesseur.php?nomdeleg=$nom_deleg&prenomDelegue=$prenom_delegue" ;

echo "<a href='".htmlspecialchars($lien_script,ENT_QUOTES)."'> Qui est le plus sévère des professeurs ? </a>";
echo('<br>');
echo "<a href='".htmlspecialchars($lien_script,ENT_QUOTES)."'> qui est le deleguer de la Sio 2 ? </a>" ;

?>
