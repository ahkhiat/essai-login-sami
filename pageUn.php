<h1>Page 1</h1>

<a href="pageDeux.php">page 2</a>

<?php

session_start();

$nom = "Thierry";
$_SESSION["nom"] = $nom;

