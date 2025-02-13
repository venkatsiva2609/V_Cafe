<?php
$servername = "localhost:3306";
$username = "root";
$password = "Betta@9123";
$dbname = "V_Cafe";
$conn = mysqli_connect($servername, $username, $password, $dbname);



// if ($conn) {
//     echo "na vanta";
// } else {
//     echo "na varala";
// }





if (!empty($_POST["save"])) {                                               //untill we press save the if satetment wont work
    $name = $_POST["email"];                                                //name declaratiom
    $password = $_POST["pass"];                                             //name decleration
    $str = "select * from Regtb where email='$name' and pass='$password'";   //query(memorize)
    $result = mysqli_query($conn, $str);                      //inbuilt function to combime connection and the query and saves in result
    $count = mysqli_num_rows($result);                              //searches row by row this is also an inbuilt function
    if ($count > 0) {                                                       //if id pass matches this condition runs 
        include "./index.html";
    } else {
        echo "invalid user";
    }

}


?>