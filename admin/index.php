<?php
?>

<html>
    <head>
        <title>Admin</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <? require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/includes/header.php' ); ?>
        <div class="container">
            <ul class="list">
                <li><a href="/admin/add_manga.php">Add Manga</a></li>
                <li><a href="/admin/add_manga_context.php">Add Manga Context</a></li>
                <li><a href="/admin/add_tag.php">Add Tag</a></li>
                <li><a href="/admin/add_vocab.php">Add Vocab</a></li>
            </ul>
        </div>
    </body>
</html>
