<?php

$servername="localhost";
$username="root";
$password="webkul";
$database="Code_forum";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo "error";
}

?>