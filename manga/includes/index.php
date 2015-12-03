<?php
$manga_root = '/LearningThroughManga';
require_once( $_SERVER['DOCUMENT_ROOT'] . $manga_root . '/common/db_lib/get_manga.php' );

function generate_manga_row( $pk_manga )
{
    $manga = get_manga( $pk_manga );
    if( !is_array( $manga ) )
    {
        return;
    }
    $manga_image   = $manga['image'];
    $english_title = $manga['english_title'];
    $korean_title  = $manga['korean_title'];
    $manga_source  = $manga['source'];
    $rating        = $manga['rating'];
    $tags          = $manga['tags'];

    $tags = implode( $tags, ', ' );
?>
    <tr>
        <td class="english_title">
            <?= $english_title ?>
        </td>
        <td class="korean_title">
            <?= $korean_title ?>
        </td>
        <td class="rating">
            <?= $rating ?>
        </td>
        <td class="source">
            <a href=<?= $manga_source ?>><?= $manga_source ?></a>
        </td>
        <td class="tags">
            <?= $tags ?>
        </td>
    </tr>
<?php
    return;
}
