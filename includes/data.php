<?php
$servername="localhost";
$username="test";
$password="Test1234";
$dbname="gagandeep";

$conn= new mysqli($servername, $username, $password, $dbname);

if ($conn ->connect_error){
    die{"verbinding mislukt:" . $conn->connect_error};
}
>?