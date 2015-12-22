<?php
$manga_root = '/LearningThroughManga';
require_once( $_SERVER['DOCUMENT_ROOT'] . $manga_root . '/common/db_lib/get_vocab.php' );

function generate_word_rows( $vocab_list )
{
    foreach( $vocab_list as $vocab )
    {
        if( isset( $vocab['vocab'] ) )
        {
            generate_word_row( $vocab['vocab'] );
        }
    }
}

function generate_word_row( $pk_vocab )
{
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
            <a href="define.php?word=<?= $pk_vocab ?>"><?= $vocab_manga ?></a>
        </div>
    </div>
<?php
    return;
}
