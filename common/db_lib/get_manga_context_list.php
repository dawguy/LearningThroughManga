<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );

function get_manga_context_list( $options = array( 'offset' => 0, 'limit' => 20 ) )
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

    global $pdo;

    $statement = "SELECT manga_context, manga, path, meaning, context, usage FROM tb_manga_context OFFSET ? LIMIT ?;";
    $sth = $pdo->prepare( $statement, array( $offset, $limit ) );
    $sth->execute();

    $retval = $sth->fetchAll();

    return $retval;
}
