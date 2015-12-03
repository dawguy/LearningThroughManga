<?php

function get_manga( $pk_manga )
{
    $retval = array(
        'manga' => 1,
        'image'   => 'data/images/penguin.png',
        'english_title' => 'Penguin Loves Mev',
        'korean_title' => '펭귀',
        'source' => 'http://comic.naver.com/webtoon/list.nhn?titleId=169080',
        'rating' => 10,
        'tags' => array(
            'daily life',
            'gag',
            'romance',
            'episode' 
        )
    );

    return $retval;
}
