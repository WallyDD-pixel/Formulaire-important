<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Exercice avec GET - Qui est le plus sévère des professeurs ?</title>
        <meta http-equiv="Content-Type" content="text/html;
    charset=utf-8" />
</head>
<body>
<?php


   echo "Le professeur le plus sévère est ? ".$_GET["nomProf"]."<br />";
   echo('<br>');
   echo "qui est le deleguer de la Sio 2 ? ".$_GET["nomdeleg"]."<br />";
   echo "et son prenom est ? ".$_GET["prenomdelegue"]."<br />";


?>
</body>
</html>


