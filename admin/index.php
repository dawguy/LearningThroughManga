<?php
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/db_lib/get_tags.php' );
    require_once( 'includes/generate_tag_checkboxes.php' );

    $tags = get_tags();

?>

<html>
    <head>
        <title>Admin</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <? require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/includes/header.php' ); ?>
            
    </body>
</html>
