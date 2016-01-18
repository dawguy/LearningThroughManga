<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );


function get_tags()
{
    $pdo = new PDO( 'mysql:host=localhost;dbname=manga;', 'root', '' );
    $statement = "SELECT t.tags, t.english_tag, t.korean_tag FROM tb_tags t";
    $sth = $pdo->prepare( $statement );
    $sth->execute();

    $retval = $sth->fetchAll();

    return $retval;
}
