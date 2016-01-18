<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );

function create_manga( $image, $english_title, $korean_title, $source, $english_description, $korean_description, $rating )
{
    global $pdo;

    $statement = "INSERT INTO tb_manga (image, english_title, korean_title, english_description, korean_description, rating) VALUES ( :image, :english_title, :korean_title, :source, :english_description, :korean_description, :rating )";

    $sth = $pdo->prepare( $statement );
    $sth->bindParam( ':image', $image );
    $sth->bindParam( ':english_title', $english_title );
    $sth->bindParam( ':korean_title', $korean_title );
    $sth->bindParam( ':source', $source );
    $sth->bindParam( ':english_description', $english_description );
    $sth->bindParam( ':korean_description', $korean_description );
    $sth->bindParam( ':rating', $rating );

    $retval = $sth->execute();

    return $pdo->lastInsertId();
}
