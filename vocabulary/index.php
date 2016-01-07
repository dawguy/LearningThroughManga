<?php
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/vocabulary/includes/index.php' );
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/db_lib/get_vocab_list.php' );
    $word_rows = get_vocab_list();

?>
<html>
    <head>
        <title>Vocabulary</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <div>
        <? require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/includes/header.php' ); ?>
            <div id="vocabulary_list" class="container">
                <div class="row">
                    <div class="col-md-2">
                        <h3>Korean</h3>
                    </div>
                    <div class="col-md-2">
                        <h3>English</h3>
                    </div>
                    <div class="col-md-4">
                        <h3>Definition</h3>
                    </div>
                    <div class="col-md-4">
                        <h3>Manga Context</h3>
                    </div>
                </div>
                <?php generate_word_rows( $word_rows ); ?>
            </div>
        </div>
    </body>
</html>
