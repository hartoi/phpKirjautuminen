<?php
$salasanaVirhe = "";
$spostiVirhe = "";
$spostiValue = "";
$sqlVirhe = "";


if( $_SERVER["REQUEST_METHOD"] == "POST") {
    $spostiValue = $_POST["sposti"];

    if( empty($_POST["sposti"]) ) {
        $spostiVirhe = "Sähköposti on virheellinen";
    }
    else if( empty($_POST["salasana"]) ) {
        $salasanaVirhe = "Salasana on virheellinen";
    }
    else if( $_POST["salasana"] != $_POST["salasana_uudestaan"]) {
        $salasanaVirhe = "Salasanat eivät täsmää";
    }
    else if( strlen($_POST["salasana"]) < 3 ) {
        $salasanaVirhe = "Salasana on liian lyhyt. Nyt se on ".strlen($_POST["salasana"]);
    }
    else{
        $servername = "localhost";
        $username = "kirjautuminen";
        $password = "Q2werty";
        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        echo "Connected successfully";
        $sql = "INSERT INTO kirjautuminen.kayttajat (email,salasana) 
        VALUES ('".$_POST["sposti"]."', '".$_POST["salasana"]."')";
        
        if ($conn->query($sql) === TRUE) {
            // echo "Tunnuksen luonti onnistui";
            // Ohjataan kirjautumis sivulle
            header('Location: login.php');


        } else {
            echo "Error: " . $conn->error;
            $sqlVirhe = "Jotain meni vikaan.";
        }     
    }
}
?>

<html>
<form method="POST" action="reqister.php">
Sähköposti<input type="text" name="sposti" value="<?php echo $spostiValue;?>">
<div style="color:red"><?php echo $spostiVirhe ?></div><br/>
Salasana<input type="password" name="salasana">
<div style="color:red"><?php echo $salasanaVirhe ?></div><br/>
Salasana Uudestaan<input type="password" name="salasana_uudestaan"><br/>
<input type="submit" value="Rekisteröidy">
</form>
</html>














