<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );


function get_tags()
{
    global $pdo;

    $statement = "SELECT t.tags, t.english_tag, t.korean_tag FROM tb_tags t";
    $sth = $pdo->prepare( $statement );
    $sth->execute();

    $retval = $sth->fetchAll();

    return $retval;
}
