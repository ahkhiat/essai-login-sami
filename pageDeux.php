<h1>Page 2</h1>

<a href="pageTrois.php">page 3</a>


<?php

session_start();

$nom = $_SESSION["nom"];
echo $nom;

if (isset($_SESSION["prenom"])) {
    echo "Le prenom est bien enregistré";
    $prenom = $_SESSION["prenom"];

} else {
    echo "le prenom n'est pas enregistré";
}


