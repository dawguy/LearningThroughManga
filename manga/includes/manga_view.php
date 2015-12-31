<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . $manga_root . '/common/functions/validation.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . $manga_root . '/common/db_lib/get_manga_vocabs.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . $manga_root . '/common/db_lib/get_vocab.php' );

function generate_manga_vocab_rows( $pk_manga )
{
    if( !is_integer_positive( $pk_manga ) )
    {
        return;
    }

    $manga_vocab_list = get_manga_vocabs( $pk_manga );
    
    foreach( $manga_vocab_list as $vocab )
    {
        generate_manga_vocab_row( $vocab['vocab'] );
    }
    return;
}

function generate_manga_vocab_row( $pk_vocab )
{
    $vocabulary_url = '/' . 'LearningThroughManga' . '/vocabulary/define.php';

    $vocab = get_vocab( $pk_vocab );
    if( !is_array( $vocab ) )
    {
        return;
    }
    $english_word       = $vocab['english'];
    $korean_word        = $vocab['korean'];
    $english_definition = $vocab['english_definition'];
    $vocab_manga        = $vocab['manga_context'];
?>
    <div class="row">
        <div class="col-md-2">
            <?= $korean_word ?>
        </div>
        <div class="col-md-2">
            <?= $english_word ?>
        </div>
        <div class="col-md-4">
            <?= $english_definition ?>
        </div>
        <div class="col-md-4">
            <a href="<?= $vocabulary_url ?>?word=<?= $pk_vocab ?>"><?= $vocab_manga ?></a>
        </div>
    </div>
<?php
    return;
}
