<?php

class manga_db extends SQLite3
{
    private $db_name;
    private $db_path;

    function __construct()
    {
        $db_name = 'learning_korean.db';
        $db_path = $_SERVER['DOCUMENT_ROOT'] . '/learning_korean.db';
        $this->open( $db_path ); 
    }

    function query_select( $query_string )
    {
        $result = $this->query( $query_string );
        $retval = array();
        $running = true;

        while( $fetched_array = $result->fetchArray() )
        {
            $retval[] = $fetched_array;
        }

        if( count( $retval ) === 1 )
        {
            $retval = $retval[0];
        }

        return $retval;
    }

    function query_select_list( $query_string )
    {
        $result = $this->query( $query_string );
        $retval = array();
        $running = true;

        while( $fetched_array = $result->fetchArray() )
        {
            $retval[] = $fetched_array;
        }

        return $retval;
    }
}
