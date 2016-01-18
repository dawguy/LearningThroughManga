<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/db_lib/get_manga_context_list.php' );

function generate_manga_context_options()
{
    $manga_contexts = get_manga_context_list();

    if( count( $manga_contexts ) === 0 )
    {
?>
        <option value="-1">No Manga Context Available</option>
<?
        return;
    }

    foreach( $manga_contexts as $manga_context )
    {
        if( isset( $manga_context['manga_context'] ) )
        {
            generate_manga_context_option( $manga_context );
        }
    }
    return;
}

function generate_manga_context_option( $manga_context )
{
    if( !is_array( $manga_context ) )
    {
        return;
    }

?>
    <option value="<?= $manga_context['manga_context'] ?>">
        <?= $manga_context['english_title'] ?>
    </option>
<?php
    return;
}
