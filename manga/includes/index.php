<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/db_lib/get_manga.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/db_lib/get_tags_by_manga.php' );

function generate_manga_rows( $manga_list )
{
    foreach( $manga_list as $manga )
    {
        if( isset( $manga['manga'] ) )
        {
            generate_manga_row( $manga['manga'] );
        }
    }
    return;
}

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
    $manga_tags    = $manga['manga_tags'];

    $tags = get_tags_by_manga( $pk_manga );
    $english_tags = array();
    $korean_tags = array();

    foreach( $tags as $tag )
    {
        $english_tags[] = $tag['english_tag'];
        $korean_tags[]  = $tag['korean_tag'];
    }
    
    $tags_string = implode( $english_tags, ', ' );
?>
    <div class="row" style="text-align: center;">
        <div class="col-md-2">
            <a href="view_manga.php?manga=<?= $pk_manga ?>"><?= $english_title ?></a>
        </div>
        <div class="col-md-2">
            <?= $korean_title ?>
        </div>
        <div class="col-md-2">
            <?= $rating ?>
        </div>
        <div class="col-md-3">
            <a href=<?= $manga_source ?>><?= $manga_source ?></a>
        </div>
        <div class="col-md-3">
            <?= $tags_string ?>
        </div>
    </div>
<?php
    return;
}
