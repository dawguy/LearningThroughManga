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

$pk_vocab = $_REQUEST['word'];
$vocab_definition = get_vocab( $_REQUEST['word'] );

if( !isset( $vocab_definition['manga_context'] ) )
{
    require_once( '../404.php' );
    exit;
}

$pk_manga_context = $vocab_definition['manga_context'];
$manga_context = get_manga_context( $vocab_definition['manga_context'] );
$height = 200;
$width = 200;
?>

<html>
    <html>
        <title>Definition</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </html>
    <body>
        <? require_once( $_SERVER['DOCUMENT_ROOT'] . 'LearningThroughManga' . '/common/includes/header.php' ); ?>

        <div class="container">
            <div class="container text-center">
                <div class="container" >
                    <div class="container">
                        <div id="manga_panel">
                            <img src="<?= $manga_context['path'] ?>" alt="<?= $vocab_definition['english']?>" height="<?= $height ?>" width="<?= $width ?>">
                        </div>
                    </div>
                    <div class="container">
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
                </div>

                <div class="row" style="margin-top: 20px">
                    <div class="col-md-6">
                        <div id="korean_word">
                            <b><?= $vocab_definition['korean'] ?></b>
                        </div>
                        <div id="korean_definition">
                            <?= $vocab_definition['korean_definition'] ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div id="english_word">
                            <b><?= $vocab_definition['english'] ?></b>
                        </div>
                        <div id="english_definition">
                            <?= $vocab_definition['english_definition'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
