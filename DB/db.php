<?php
// db.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_proyectobdm";
$conn="";

$conn=mysqli_connect($db_server,$db_user,$db_password,$db_database);





if($conn){
    echo "si se pudo";
}else{
    echo "llama";
}


?>