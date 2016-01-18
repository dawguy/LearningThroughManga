<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/db_lib/get_tags.php' );

function generate_tag_checkboxes()
{
    $tags = get_tags();

    foreach( $tags as $tag )
    {
        if( isset( $tag['tags'] ) )
        {
            generate_tag_checkbox( $tag );
        }
    }
    return;
}

function generate_tag_checkbox( $tag )
{
    if( !is_array( $tag ) )
    {
        return;
    }

?>
    <div class="checkbox">
        <label>
            <input type="checkbox" value="<?= $tag['tags'] ?>">
            <?= $tag['english_tag'] ?>
        </label>
    </div>
<?php
    return;
}
