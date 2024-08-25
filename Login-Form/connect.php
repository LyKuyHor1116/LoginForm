<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "loginform_db";

    // Connected to Database
    $conn = new mysqli($host, $username, $password, $database);

    // Check if it connected
    if ($conn->connect_error){
        die("Connection failed : " . $conn->connect_error);
    }

    // Get User Data
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    // Insert to Database

    $sql = "INSERT INTO form_db (username,password) VALUES ('$username','$password')";
    if ($conn->query($sql)===TRUE){
        echo "Form Submitted Successfully";
    }else{
        echo "Error: ".$sql."<br>".$conn->error;
    }
?>