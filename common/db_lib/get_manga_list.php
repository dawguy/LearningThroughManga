<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );

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

    $offset = intval( $offset, 10 );
    $limit = intval( $limit, 10 );


    global $pdo;

    $statement = "SELECT manga, english_title, korean_title, source, english_description, korean_description, rating FROM tb_manga LIMIT :limit OFFSET :offset";
    $sth = $pdo->prepare( $statement );
    $sth->bindValue( ':limit', (int)$limit, PDO::PARAM_INT);
    $sth->bindValue( ':offset', (int)$offset, PDO::PARAM_INT );
    $sth->execute();

    $retval = $sth->fetchAll();

    return $retval;
}
