<?php

function get_manga( $pk_manga )
{
    $retval = array();

    if( $pk_manga == 1 )
    {
        $retval = array(
            'manga' => 1,
            'image'   => 'data/images/penguin.png',
            'english_title' => 'Penguin Loves Mev',
            'korean_title' => '펭귀',
            'source' => 'http://comic.naver.com/webtoon/list.nhn?titleId=169080',
            'english_description' => 'Penguin and Mev go on every day adventures.',
            'korean_description' => '펭귀 와 맵 응행 이야기를 있다.',
            'rating' => 10,
            'tags' => array(
                'daily life',
                'gag',
                'romance',
                'episode' 
            )
        );
    }

    if( $pk_manga == 2 )
    {
        $retval = array(
            'manga' => 2,
            'image'   => 'data/images/goh.png',
            'english_title' => 'God Of Highschool',
            'korean_title' => '갓오브하이스쿨',
            'source' => 'http://comic.naver.com/webtoon/list.nhn?titleId=318995',
            'english_description' => 'The god of highschool tournamnet.',
            'korean_description' => '갓 오브 하이스쿨 시합.',
            'rating' => 10,
            'tags' => array(
                'action',
                'gag',
                'episode' 
            )
        );
    }

    return $retval;
}
