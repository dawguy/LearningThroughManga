<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );

function create_manga_tag( $manga, $tag )
{
    global $pdo;

    $statement = "INSERT INTO tb_manga_tags( manga, tags ) VALUES ( :manga, :tags );";

    $sth = $pdo->prepare( $statement );
    $sth->bindParam( ':manga', $manga );
    $sth->bindParam( ':tags', $tag );

    $retval = $sth->execute();

    return $pdo->lastInsertId();
}
