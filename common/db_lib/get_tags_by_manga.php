<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );

function get_tags_by_manga( $manga )
{
    global $pdo;

    $pk_manga = intval( $manga, 10 );

    $statement = "SELECT t.tags, t.english_tag, t.korean_tag FROM tb_tags t JOIN tb_manga_tags mt ON t.tags = mt.tags WHERE mt.manga = :manga";
    $sth = $pdo->prepare( $statement );
    $sth->bindValue( ':manga', (int)$pk_manga, PDO::PARAM_INT);
    $sth->execute();

    $retval = $sth->fetchAll();

    return $retval;
}
