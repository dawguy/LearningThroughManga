<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/db_lib/get_manga_list.php' );

function generate_manga_options()
{
    $mangas = get_manga_list();

    if( count( $mangas ) === 0 )
    {
?>
        <option value="-1">No Manga Available</option>
<?
        return;
    }

    foreach( $mangas as $manga )
    {
        if( isset( $manga['manga'] ) )
        {
            generate_manga_option( $manga );
        }
    }
    return;
}

function generate_manga_option( $manga )
{
    if( !is_array( $manga ) )
    {
        return;
    }

?>
    <option value="<?= $manga['manga'] ?>">
        <?= $manga['english_title'] ?>
    </option>
<?php
    return;
}
