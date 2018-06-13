<?php
$str = "Is your name O\'reilly?";

// Outputs: Is your name O'reilly?
echo stripslashes($str);
echo "<br>";
echo $str;

$str2 = "<script>alert('hoho')</script>";

// Outputs: Is your name O'reilly?
echo "1:".htmlspecialchars($str2);
echo "<br>";
echo "2:".$str2;

?>