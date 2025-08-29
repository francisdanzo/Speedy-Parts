<?php
// $age = 20;
// if ($age >= 18)
// {
//     echo "Majeur";
// }
// else{
//     echo "Mineur";
// }

// $Heures=17;
// if($Heures<=12)
// {
//     echo "Bonjour";
// }else if($Heures>=18){
//     echo "Bonsoir";
// }
// else{
//     echo "Bon apres midi";
// }
$Days="Dimanche";
switch($Days){
    case "Lundi":
        echo "Debut de la semaine";
        break;
    case "Mercredi":
        echo "Milieu de la semaine";
        break;
    case "Vendredi":
        echo "Debut Weekend";
        break;
    case "Dimanche":
        echo "Fin de la semaine";
        break;
}
?>