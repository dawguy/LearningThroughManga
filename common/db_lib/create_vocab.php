<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );

function create_vocab( $manga_context, $english, $korean, $english_definition, $korean_definition )
{
    global $pdo;

    $statement = "INSERT INTO tb_vocab ( manga_context, english, korean, english_definition, korean_definition ) VALUES ( :manga_context, :english, :korean, :english_definition, :korean_definition )";

    $sth = $pdo->prepare( $statement );
    $sth->bindParam( ':manga_context', $manga_context );
    $sth->bindParam( ':english', $english );
    $sth->bindParam( ':korean', $korean );
    $sth->bindParam( ':english_definition', $english_definition );
    $sth->bindParam( ':korean_definition', $korean_definition );

    $retval = $sth->execute();

    return $pdo->lastInsertId();
}
