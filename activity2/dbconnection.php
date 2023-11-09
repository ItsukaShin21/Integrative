<?php
    $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "Integrative";

     $connection = new mysqli($servername, $username, $password, $dbname);

     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sqlqueryAdd = "INSERT INTO registered_accounts (username, email, password)
        VALUES ('$username', '$email', '$password')";
        $connection -> query($sqlqueryAdd);
    }

    $connection -> close();
?>