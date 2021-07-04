<?php

// Connection with [ MYSQLI => mysqli ] Extension DB First Method (1)
// $con = mysqli_connect('localhost', 'root', '', 'nour');


// Connection with PDO Extension DB  Second Method (2)
$con = 'mysql:host=localhost;dbname=nour';
$user = 'root';
$pass = '';

try{

    $db = new PDO($con, $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

    echo 'Error Connecting To DB : ' . $e->getMessage();
}

?>