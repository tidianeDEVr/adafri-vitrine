<?php
// On récupère le paramètre pour une image en particulier
// Paramètre "noL" : Un identifiant unique normalement
if (!empty($_GET['noL'])) {
    // Requête SQL pour récupérer le fux de l'image dynamique
    $flux = $result['imageL'];
 
    // On spécifie dans l'entête que c'est une image png
    header('Content-Type: image/png');
    // On renvoie le flux
    echo $flux ;
}
?>