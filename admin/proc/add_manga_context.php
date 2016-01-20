<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/images.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/db_lib/create_manga_context.php' );

if( isset( $_REQUEST['manga'] ) &&
    isset( $_REQUEST['path'] ) &&
    isset( $_REQUEST['image'] ) &&
    isset( $_REQUEST['meaning'] ) &&
    isset( $_REQUEST['context'] ) &&
    isset( $_REQUEST['translation'] )
  )
{
    $image_pk = upload_image( $_REQUEST['image'] );

    $manga_pk = create_manga_context(
                  $_REQUEST['manga'],
                  $_REQUEST['path'],
                  $image_pk,
                  $_REQUEST['meaning'],
                  $_REQUEST['context'],
                  $_REQUEST['translation']
                );

    return $manga_pk;
}
