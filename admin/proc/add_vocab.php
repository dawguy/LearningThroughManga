<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/db_lib/create_vocab.php' );

if( isset( $_REQUEST['manga_context'] ) &&
    isset( $_REQUEST['english'] ) &&
    isset( $_REQUEST['korean'] ) &&
    isset( $_REQUEST['english_definition'] ) &&
    isset( $_REQUEST['korean_definition'] )
  )
{
    $vocab_pk = create_vocab(
                  $_REQUEST['manga_context'],
                  $_REQUEST['english'],
                  $_REQUEST['korean'],
                  $_REQUEST['english_definition'],
                  $_REQUEST['korean_definition']
                );

    return $vocab_pk;
}
