<?php

$manga_root = 'LearningThroughManga';
require_once( $_SERVER['DOCUMENT_ROOT'] . $manga_root . '/common/functions/db_lib.php' );

function get_manga_context( $pk_manga_context )
{
    $db = new manga_db();
    $query = "SELECT manga_context, manga, path, meaning, context, usage FROM tb_manga_context WHERE manga_context = $pk_manga_context";
    $retval = $db->query_select( $query );

    return $retval;
}
