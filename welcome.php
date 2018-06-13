<?php

session_start();

if( empty($_SESSION["kayttaja"])){
    die("Kirjaudu sisään");
}

?>


<h1>Tervetuloa Klubiin <?php echo $_SESSION["kayttaja"] ?></h1>
<a href="logout.php">Kirjaudu ulos</a>

salaista tietoa