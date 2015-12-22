<?php

function get_vocab( $pk_vocab )
{
    if( $pk_vocab == 1 )
    {
        $retval = array(
            'vocab' => 1,
            'english' => 'Hello',
            'korean'  => '안녕하세요',
            'english_definition' => 'A greeting used between people',
            'korean_definition'  => '인사하는 말은 있다',
            'manga_context' => 1
        );
    }

    if( $pk_vocab == 2 )
    {
        $retval = array(
            'vocab' => 2,
            'english' => 'Goodbye',
            'korean'  => '안녕히개세요',
            'english_definition' => 'Goodbye where the person who is saying goodbye is leaving.',
            'korean_definition'  => '얘기 끝에 가는 사람이 하는 말씀을 있다',
            'manga_context' => 2
        );
    }

    return $retval;
}
