<?php
    $username  = 'root'; // Default value
    $password = '';      // Default value
    $db_name  = 'manga';

    $username = getenv( 'MYSQL_USER' );     //Set in apache http.conf SetEnv MYSQL_USER "root"
    $password = getenv( 'MYSQL_PASSWORD' ); //Set in apache http.conf with SetEnv MYSQL_PASSWORD ""

    $pdo = new PDO( "mysql:host=localhost;dbname=$db_name;", "$username", "$password" );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
