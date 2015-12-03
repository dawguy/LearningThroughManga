<?php
$manga_root = '/LearningThroughManga';
require_once( $_SERVER['DOCUMENT_ROOT'] . $manga_root . '/common/db_lib/get_vocab.php' );

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
    <tr>
        <td class="english_word">
            <?= $english_word ?>
        </td>
        <td class="korean_word">
            <?= $korean_word ?>
        </td>
        <td class="definition">
            <?= $english_definition ?>
        </td>
        <td class="context">
            <a href="define.php?word=<?= $pk_vocab ?>"><?= $vocab_manga ?></a>
        </td>
    </tr>
<?php
    return;
}
