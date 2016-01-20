<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );

function create_tag( $english_tag, $korean_tag )
{
    global $pdo;

    $statement = "INSERT INTO tb_tags (english_tag, korean_tag) VALUES ( :english, :korean )";

    $sth = $pdo->prepare( $statement );

    $sth->bindParam( ':english', $english_tag );
    $sth->bindParam( ':korean', $korean_tag );

    $sth->execute();
    return $pdo->lastInsertId();
}
