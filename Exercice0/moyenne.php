<?php
$tab = [15,12,9];
function moyenne($moyenne)
{
    $moyenneNotes=0;
    for ($i=0;$i<count($moyenne);$i++){
        $moyenneNotes = $moyenne[$i]+$moyenneNotes;
    }
    return $moyenneNotes/count($moyenne);
}

 Function mediane(&$tab){
     $n =count($tab);
     if(($n % 2) == 0){
         return ($tab[$n/2] + ($tab[$n/2 - 1])) / 2;

     }else{
         return $tab[($n)/2];
     }
 }

?>
