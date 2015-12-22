<?php

function is_integer_positive( $number )
{
    if( !isset( $number ) )
    {
        return false;
    }

    if( !is_numeric( $number ) )
    {
        error_log( 'NOT IS INT' );
        return false;
    }

    if( $number <= 0 )
    {
        return false;
    }

    return true;
}
