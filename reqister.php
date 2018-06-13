<?php
$salasanaVirhe = "";
$spostiVirhe = "";

if( $_SERVER["REQUEST_METHOD"] == "POST") {
   if( empty($_POST["salasana"]) ) {
        $salasanaVirhe = "Salasana on virheellinen";
   }
 
}
/*
$servername = "localhost";
$username = "kirjautuminen";
$password = "Q2werty";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
*/
?>

<html>
<form method="POST" action="reqister.php">
Sähköposti<input type="text" name="sposti"><br/>
Salasana<input type="password" name="salasana"><?php echo $salasanaVirhe ?><br/>
Salasana Uudestaan<input type="password" name="salasana_uudestaan"><br/>
<input type="submit" value="Rekisteröidy">
</form>
</html>
