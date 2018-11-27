<?php
    $conn = new mysqli("localhost", "root", "root","prueba",8889);
    if($conn->connect_error){
        echo $error->$conn->connect_error;
    }
?>
