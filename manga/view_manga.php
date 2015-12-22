<?php

$manga_root = 'LearningThroughManga';
require_once( $_SERVER['DOCUMENT_ROOT'] . $manga_root . '/manga/includes/manga_view.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . $manga_root . '/common/db_lib/get_manga.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . $manga_root . '/common/functions/validation.php' );

if( !isset( $_REQUEST['manga'] ) ||
    !is_integer_positive( $_REQUEST['manga'] )
  )
{
    require_once( $_SERVER['DOCUMENT_ROOT'] . $manga_root . '/404.php' ); 
    exit;
}

$pk_manga = $_REQUEST['manga'];
$manga = get_manga( $pk_manga );

if( !isset( $manga['manga'] ) )
{
    require_once( $_SERVER['DOCUMENT_ROOT'] . $manga_root . '/404.php' ); 
    exit;
}
?>
<html>
    <head>
        <title>Manga</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <? require_once( $_SERVER['DOCUMENT_ROOT'] . 'LearningThroughManga' . '/common/includes/header.php' ); ?>
        <div class="container">
            <div class="container">
                <h2><?= $manga['english_title'] ?></h2>
                <h3><?= $manga['korean_title'] ?></h3>
            </div>
            <div class="container">
                <?= $manga['english_description'] ?>
            </div> 
            <div class="container">
                <?= $manga['korean_description'] ?>
            </div>
            <div class="container">
                <?php generate_manga_vocab_rows( $pk_manga ); ?>
            </div>
        </div>
    </body>
</html>
