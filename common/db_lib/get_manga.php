<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );

function get_manga( $pk_manga )
{
    global $pdo;

    $pk_manga = intval( $pk_manga, 10 );

    $statement = "SELECT manga, english_title, korean_title, source, english_description, korean_description, rating FROM tb_manga WHERE manga = :manga";
    $sth = $pdo->prepare( $statement );
    $sth->bindValue( ':manga', (int)$pk_manga, PDO::PARAM_INT);
    $sth->execute();

    $retval = $sth->fetchAll();

    return $retval;
}
