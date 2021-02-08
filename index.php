<?php

// TODO n'oubliez pas de créer votre classe dans le dossier classes.

require './classes/StrUtils.php';


$myTexte = new StrUtils("bonjour je s'apl groot");

echo " mon texte en bold :<br>";
echo $myTexte->bold()."<br><br>";

echo " mon texte soulignée :<br>";
echo $myTexte->underline()."<br><br>";

echo " mon texte en italic :<br>";
echo $myTexte->italic()."<br><br>";

echo "mon texte avec une majuscule :<br>";
echo $myTexte->capitalize()."<br><br>";

echo " mon texte avec les 4 variantes :<br>";
echo $myTexte->uglify()."<br><br>";