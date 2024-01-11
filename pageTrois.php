<h1>Page 3</h1>

<a href="deconnexion.php">deconnexion</a>


<?php
session_start();

$nom = $_SESSION["nom"];

echo $nom;