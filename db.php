<?php
$servername = "localhost:3306";
$username = "root";
$password = "Betta@9123";
$dbname = "V_Cafe";
$con = new mysqli($servername, $username, $password, $dbname);

if ($con) {
    echo "na dha andha paiyan";
} else {
    echo "na varala pa";
}

?>