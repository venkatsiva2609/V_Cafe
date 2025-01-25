<?php
// include './db.php';
$servername = "localhost:3306";
$username = "root";
$password = "Betta@9123";
$dbname = "V_Cafe";
$con = mysqli_connect($servername, $username, $password, $dbname);

$a = $_POST['fname'];
$b = $_POST['lname'];
$c = $_POST['email'];
$d = $_POST['pass'];
$e = $_POST['cpass'];

$str = "";
$str = "insert into Regtb (fname,lname,email,pass,cpass) values('" . $a . "','" . $b . "','" . $c . "','" . $d . "','" . $e . "')";

$con->query($str);
$con->close();

echo "na dha andha paiyan";
?>

<!-- $str="insert into Regtb (fname,lname,email,pass,cpass) values('" . $a ."','" . $b ."','" . $c ."','" . $d ."','" . $e ."')"; -->