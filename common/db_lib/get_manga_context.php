<?php

function get_manga_context( $pk_manga_context )
{
    $retval = array(
        'manga_context' => 1,
        'manga' => 1,
        'path'   => 'temp',
        'meaning' => 'Hello my good friend.',
        'context' => 'Here the monkey king is saying hello to his friend before they go and do something really awesome!',
        'usage' => 'This is a common greeting and is something you should expect to hear often.'
    );

    return $retval;
}
