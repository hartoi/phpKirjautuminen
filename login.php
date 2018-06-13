<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // testataan onko sposti ja salasana ok,
    // jos on, niin heitetään käyttäjä welcome sivulle
    $servername = "localhost";
    $username = "kirjautuminen";
    $password = "Q2werty";
    $dbname = "kirjautuminen";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Tekninen ongelma. Yritä palvelua uudestaan 5 min. kuluttua." . $conn->connect_error);
    } 
    $sql = "SELECT * FROM kayttajat WHERE 
            email='".$_POST["sposti"]."' AND 
            salasana='".$_POST["salasana"]."'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        echo "Kaikki on!";
        session_start();
        $_SESSION["kayttaja"] = $_POST["sposti"];
       header('Location: welcome.php' );
    } else {
        echo "Virheellinen käyttäjätunnus tai salasana.";
    }
$conn->close();

}
?>

<html>
<h1>Kirjaudu sisään</h1>
<form method="POST" action="login.php">
Sähköposti<input type="text" name="sposti"><br/>
Salasana<input type="password" name="salasana"><br/>
<input type="submit" value="Kirjaudu sisään">
</form>
</html>