<?php
    $servername = "localhost";
    $username = "newUser";
    $password = "newUser123";
    $dbname = "notesdb";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        //kills connection then prints error
        die("Connection failure" . mysqli_connect_error());
    }
?>