<?php

function get_vocab_list( $options = array( 'offset' => 0, 'limit' => 20 ) )
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

    $retval = array(
        array(
            'vocab' => 1,
            'english' => 'Hello',
            'korean'  => '안녕하세요',
            'english_definition' => 'A greeting used between people',
            'korean_definition'  => '인사하는 말은 있다',
            'manga_context' => 1
        ),
        array(
            'vocab' => 2,
            'english' => 'Goodbye',
            'korean'  => '안녕히개세요',
            'english_definition' => 'Goodbye where the person who is saying goodbye is leaving.',
            'korean_definition'  => '얘기 끝에 가는 사람이 하는 말씀을 있다',
            'manga_context' => 2
        )
    );

    return $retval;
}
