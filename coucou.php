<?php

// affiche les paramètres de URL que j'ai modifié
// print_r($_GET);

/* tableau avec les valeurs de 1 => 6
 * if(isset($_GET['tab'])) {
    $tab = json_decode(base64_decode($_GET['tab']));
    foreach ($tab as $valeur) {
        echo "<span>$valeur</span>&nbsp;";
    }
}*/

//nom = Doe & premon = John & age = 36

//D'abord on regarde si ces variables existent, 1 expl, on a besoin de tout
//ici,si qq'un touche aux paramètres de l'url, je le renvoie au début avec error1 qui s'affiche dans l'url
if(!isset($_GET['nom'], $_GET['prenom'], $_GET['age'])) {
    header('Location: index.php?error=1');
    // header === permet de rediriger une page
    //ici si tout n'est pas là où modifier => je renvoie vers index.php
}

$nom = $_GET['nom'];
$prenom = htmlentities($_GET['prenom']);
// quant on utilise un get, il faut utiliser soit htmlentities soit strip-tags pour transformer les caractères html comme ça
//si on utilise echo, on ne pourra pas faire cracher le serveur car les caractères html ne seront pas visibles
$age = intval($_GET['age']); // (int) /intval

//grâce à tout ça, le serveur ne plante pas, si on touche au paramètre âge de l'url
if($age > 1000) {
    $age = 1000;
}
elseif ($age <= 0) {
    $age = 1;
}
//ici, je boucle jusqu'à atteindre l'age max (ici === 36)
for($i = 0; $i < $age; $i++) {
    echo "Bonjour $prenom $nom, valeur de\$i: $i<br> ";
}