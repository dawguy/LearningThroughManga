<?php

$manga_root = 'LearningThroughManga';
require_once( $_SERVER['DOCUMENT_ROOT'] . $manga_root . '/common/functions/db_lib.php' );

function get_manga_list( $options = array( 'offset' => 0, 'limit' => 20 ) )
{
    if( !is_array( $options ) || 
        !isset( $options['offset'] ) ||
        !isset( $options['limit'] )
      )
    {
        return array();
    }

    $offset = $options['offset'];
    $limit = $options['limit'];

    $db = new manga_db();
    $query = "SELECT manga, english_title, korean_title, source, english_description, korean_description, rating, manga_tags FROM tb_manga;";
    $retval = $db->query_select_list( $query );
    
    return $retval;
}
