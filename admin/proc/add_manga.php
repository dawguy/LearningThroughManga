<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/images.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/db_lib/create_manga_tag.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/db_lib/create_manga.php' );

if( isset( $_REQUEST['manga_image'] ) &&
    isset( $_REQUEST['english_title'] ) &&
    isset( $_REQUEST['korean_title'] ) &&
    isset( $_REQUEST['source'] ) &&
    isset( $_REQUEST['english_description'] ) &&
    isset( $_REQUEST['korean_description'] ) &&
    isset( $_REQUEST['rating'] ) &&
    isset( $_REQUEST['tags'] )
  )
{
    //Handle Image
    $image_pk = upload_image( $_REQUEST['manga_image'] );
    $rating = intval( $_REQUEST['rating'], 10 );

    $manga_pk = create_manga( $image_pk,
                  $_REQUEST['english_title'],
                  $_REQUEST['korean_title'],
                  $_REQUEST['source'],
                  $_REQUEST['english_description'],
                  $_REQUEST['korean_description'],
                  $rating,
                  $_REQUEST['english_title']
                );

    foreach( $_REQUEST['tags'] as $tag )
    {
        $tag_pk = intval( $tag, 10 );
        create_manga_tag( $manga_pk, $tag_pk );
    }
}
