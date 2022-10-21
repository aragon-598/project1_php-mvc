<?php

    require('src/models/connection.php');

    $conn = new Connection();

    $users = $conn->getUsers();

    require('src/views/user_list.php')
?>