<?php

// connect to the database 
$conn = mysqli_connect('localhost', 'jonah01', 'pass1234', 'mmu_records');

// check the connection 
if(!$conn){
    echo 'Connection error:' . mysqli_connect_error();
}

?>