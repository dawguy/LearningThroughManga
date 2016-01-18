<?php
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/db_lib/get_tags.php' );
    require_once( 'includes/generate_tag_checkboxes.php' );

    $tags = get_tags();

?>

<html>
    <head>
        <title>Admin</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <? require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/includes/header.php' ); ?>
        
        <form class="form-horizontal">
            <div class="form-group">
                <label for="manga_name_input" class="col-sm-2 form-label">Manga Name</label>
                <div class="col-sm-10">
                    <input id="manga_name_input" type="text" class="form-control" placeholder="Manga Name">
                </div>
            </div> 
            <div class="form-group">
                <label for="manga_image_input" class="col-sm-2 form-label">Image</label>
                <div class="col-sm-10">
                    <input id="manga_image_input" type="file" class="form-control" placeholder="Manga Image">
                </div>
            </div> 
            <div class="form-group">
                <label for="english_title_input" class="col-sm-2 form-label">English Title</label>
                <div class="col-sm-10">
                    <input id="english_title_input" type="text" class="form-control" placeholder="English Title">
                </div>
            </div> 
            <div class="form-group">
                <label for="korean_title_input" class="col-sm-2 form-label">Korean Title</label>
                <div class="col-sm-10">
                    <input id="korean_title_input" type="text" class="form-control" placeholder="Korean Title">
                </div>
            </div> 
            <div class="form-group">
                <label for="source" class="col-sm-2 form-label">Manga Source</label>
                <div class="col-sm-10">
                    <input id="source" type="text" class="form-control" placeholder="Source">
                </div>
            </div> 
            <div class="form-group">
                <label for="english_description_input" class="col-sm-2 form-label">English Description</label>
                <div class="col-sm-10">
                    <input id="english_description_input" type="text" class="form-control" placeholder="English Description">
                </div>
            </div> 
            <div class="form-group">
                <label for="korean_description_input" class="col-sm-2 form-label">Korean Description</label>
                <div class="col-sm-10">
                    <input id="korean_description_input" type="text" class="form-control" placeholder="Korean Description">
                </div>
            </div> 
            <div class="form-group">
                <label  class="col-sm-2 form-label">Tags</label>
                <div class="col-sm-10">
                    <? generate_tag_checkboxes(); ?>   
                </div>
            </div>
        </form>
    </body>
</html>
