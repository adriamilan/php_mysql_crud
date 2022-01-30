<?php

session_start();

$conn = mysqli_connect(
    "localhost", 
    "root", // DB Username
    "milan", // DB Password
    "php_milan_crud" // DB Name
);

?>