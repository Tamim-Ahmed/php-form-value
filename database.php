<?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "contact-page";

        $connection = mysqli_connect($host, $user, $password, $database);
        $sql = "SELECT * FROM practice";
        $query = mysqli_query($connection, $sql);
?>