<?php

$manga_root = 'LearningThroughManga';
require_once( $_SERVER['DOCUMENT_ROOT'] . $manga_root . '/common/functions/db_lib.php' );

function get_tags_by_manga( $manga )
{
    $db = new manga_db();
    $query = "SELECT t.tags, t.english_tag, t.korean_tag FROM tb_tags t JOIN tb_manga_tags mt ON t.tags = mt.tags WHERE mt.manga = $manga";
    $retval = $db->query_select( $query );

    return $retval;
}
