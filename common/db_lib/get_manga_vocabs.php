<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );

function get_manga_vocabs( $pk_manga )
{
    global $pdo;

    $statement = "SELECT v.vocab, v.manga_context, v.english, v.korean, v.english_definition, v.korean_definition FROM tb_vocab v INNER JOIN tb_manga_context mc ON v.manga_context = mc.manga_context WHERE mc.manga = $pk_manga;";
    $sth = $pdo->prepare( $statement );
    $sth->execute();

    $retval = $sth->fetchAll();

    return $retval;
}
