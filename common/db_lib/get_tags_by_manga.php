<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );

function get_tags_by_manga( $manga )
{
    global $pdo;

    $statement = "SELECT t.tags, t.english_tag, t.korean_tag FROM tb_tags t JOIN tb_manga_tags mt ON t.tags = mt.tags WHERE mt.manga = ?";
    $sth = $pdo->prepare( $statement, array( $manga ) );
    $sth->execute();

    $retval = $sth->fetchAll();

    return $retval;
}
