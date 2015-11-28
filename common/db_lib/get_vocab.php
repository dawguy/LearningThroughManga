<?php

function get_vocab( $pk_vocab )
{
    $retval = array(
        'english' => 'Hello',
        'korean'  => '안녕하세요',
        'english_definition' => 'A greeting used between people',
        'korean_definition'  => '인사하는 말은 있다',
        'manga_context' => 1
    );

    return $retval;
}
