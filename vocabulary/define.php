<?php
    require_once( '../common/db_lib/get_vocab.php' );
    require_once( '../common/db_lib/get_manga_context.php' );
    require_once( '../common/functions/validation.php' );

if( !isset( $_REQUEST['word'] ) &&
    !is_integer_positive( $_REQUEST['word'] )
  )
    {
        require_once( '../404.php' );
        exit;
    }

    $vocab_definition = get_vocab( $_REQUEST['word'] );

    if( !isset( $vocab_definition['manga_context'] ) )
    {
        require_once( '../404.php' );
        exit;
    }

    $manga_context = get_manga_context( $vocab_definition['manga_context'] );
    $pk_vocab = $_REQUEST['word'];
?>
<html>
    <html>
        <title>Definition</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </html>
    <body>
        <div class="word_title" id="words">
            <div id="english_word">
                <?= $vocab_definition['english'] ?>
            </div>
            <div id="korean_word">
                <?= $vocab_definition['korean'] ?>
            </div>
        </div>
        <div id="definitions">
            <div id="korean_definition">
                <?= $vocab_definition['english_definition'] ?>
            </div>
            <div id="english_definition">
                <?= $vocab_definition['korean_definition'] ?>
            </div>
        </div>
        <div id="manga_page">
            <div id="manga_panel">
                <img src="<?= $manga_context['path'] ?>" alt="<?= $vocab['english']?>" height="150" width="150">
            </div>
            <div id="manga_panel_meaning">
                <?= $manga_context['meaning'] ?>
            </div>
            <div id="manga_panel_context">
                <?= $manga_context['context'] ?>
            </div>
            <div id="manga_panel_takeaway">
                <?= $manga_context['takeaway'] ?>
            </div>
        </div>
    </body>
</html>
