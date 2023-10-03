<?php

include 'moyenne.php';

$tab = [15, 12, 9];

$moyenneNotes = moyenne($tab);
$mediane = mediane($tab);

echo "La moyenne des notes est : " . $moyenneNotes."\n";
echo "La médiane des notes est : " . $mediane."\n";

$salaire_i = [1000,1500,2000,1200,6000,900,2100];
$salaire_p = [1000,1500,2000,1200,6000,9000];
sort($salaire_p);
sort($salaire_i);

echo "La moyenne des salaires impaire : ".moyenne($salaire_i).". \n" ;
echo "La moyenne des salaires paire : ".moyenne($salaire_p).". \n" ;
echo "La mediane impaire : ".mediane($salaire_i).".\n";
echo "La mediane paire : ".mediane($salaire_p);

