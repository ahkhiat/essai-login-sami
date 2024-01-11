<h1>Page deconnexion</h1>

<a href="pageUn.php">page 1</a>
<a href="pageDeux.php">page 2</a>

<?php
session_start();

$_SESSION= array();

session_unset();

session_destroy();

