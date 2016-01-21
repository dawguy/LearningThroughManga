<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );

function get_vocab( $pk_vocab )
{
    global $pdo;

    $pk_vocab = intval( $pk_vocab, 10 );

    $statement = "SELECT vocab, manga_context, english, korean, english_definition, korean_definition FROM tb_vocab WHERE vocab = :vocab";
    $sth = $pdo->prepare( $statement );
    $sth->bindValue( ':vocab', $pk_vocab );
    $sth->execute();

    $retval = $sth->fetchAll();

    return $retval;
}
