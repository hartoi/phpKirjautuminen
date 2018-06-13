<?php
$salasanaVirhe = "";
$spostiVirhe = "";
$spostiValue = "";
$sqlVirheet = "";


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


        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        echo "Connected successfully";

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
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














