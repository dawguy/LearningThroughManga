<?php

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

    $retval = array(
        array(
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
        ),
        array(
            'manga' => 2,
            'image'   => 'data/images/goh.png',
            'english_title' => 'God Of Highschool',
            'korean_title' => '갓오브하이스쿨',
            'source' => 'http://comic.naver.com/webtoon/list.nhn?titleId=318995',
            'rating' => 10,
            'tags' => array(
                'action',
                'gag',
                'episode' 
            )
        )
    );

    return $retval;
}
