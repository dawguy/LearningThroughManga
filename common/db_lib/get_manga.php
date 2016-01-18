<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );

function get_manga( $pk_manga )
{
    global $pdo;

    $statement = "SELECT manga, english_title, korean_title, source, english_description, korean_description, rating, manga_tags FROM tb_manga WHERE manga = ?;";
    $sth = $pdo->prepare( $statement, array( $pk_manga ) );
    $sth->execute();

    $retval = $sth->fetchAll();

    return $retval;
}
