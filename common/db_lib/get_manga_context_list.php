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

    $statement = "SELECT manga_context, manga, image, path, meaning, context, translation FROM tb_manga_context LIMIT :limit OFFSET :offset ";
    $sth = $pdo->prepare( $statement );
    $sth->bindValue( ':limit', (int)$limit, PDO::PARAM_INT);
    $sth->bindValue( ':offset', (int)$offset, PDO::PARAM_INT );

    $sth->execute();

    $retval = $sth->fetchAll();

    return $retval;
}
