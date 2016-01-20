<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/db_lib/create_tag.php' );

if( isset( $_REQUEST['english_tag'] ) &&
    isset( $_REQUEST['korean_tag'] )
  )
{
    $tag_pk = create_tag( $_REQUEST['english_tag'], $_REQUEST['korean_tag'] );
}
