<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );

function get_manga_context( $pk_manga_context )
{
    global $pdo;

    $statement = "SELECT manga_context, manga, path, meaning, context, usage FROM tb_manga_context WHERE manga_context = :manga_context";
    $sth = $pdo->prepare( $statement );
    $sth->bindValue( ':manga_context', (int)$pk_manga_context, PDO::PARAM_INT);
    $sth->execute();

    $retval = $sth->fetchAll();

    return $retval;
}
