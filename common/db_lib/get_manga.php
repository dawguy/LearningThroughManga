<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );

function get_manga( $pk_manga )
{
    $db = new manga_db();
    $query = "SELECT manga, english_title, korean_title, source, english_description, korean_description, rating, manga_tags FROM tb_manga WHERE manga = $pk_manga;";
    $retval = $db->query_select( $query );

    return $retval;
}
