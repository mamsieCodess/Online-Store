<?php
$host = "localhost";
$user = "root";
$password = "root";
$dbname = "online_store";

$conn = new mysqli($host,$user,$password,$dbname);

if($conn){
    
}else{
    echo 'Failured: '. $conn->error;
}