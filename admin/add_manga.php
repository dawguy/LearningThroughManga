<?php
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/db_lib/get_tags.php' );
    require_once( 'includes/generate_tag_checkboxes.php' );
?>

<html>
    <head>
        <title>Admin Add Manga</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <? require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/includes/header.php' ); ?>
        
        <div class="container">
            <form method="post" action="proc/add_manga.php" class="form-horizontal">
                <div class="form-group">
                    <label for="manga_image" class="col-sm-2 form-label">Image</label>
                    <div class="col-sm-10">
                        <input id="manga_image" name="manga_image" type="file" class="form-control" placeholder="Manga Image">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="english_title" class="col-sm-2 form-label">English Title</label>
                    <div class="col-sm-10">
                        <input id="english_title" name="english_title" type="text" class="form-control" placeholder="English Title">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="korean_title" class="col-sm-2 form-label">Korean Title</label>
                    <div class="col-sm-10">
                        <input id="korean_title" name="korean_title" type="text" class="form-control" placeholder="Korean Title">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="source" class="col-sm-2 form-label">Manga Source</label>
                    <div class="col-sm-10">
                        <input id="source" name="source" type="text" class="form-control" placeholder="Source">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="english_description" class="col-sm-2 form-label">English Description</label>
                    <div class="col-sm-10">
                        <input id="english_description" name="english_description" type="text" class="form-control" placeholder="English Description">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="korean_description" class="col-sm-2 form-label">Korean Description</label>
                    <div class="col-sm-10">
                        <input id="korean_description" name="korean_description" type="text" class="form-control" placeholder="Korean Description">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="rating" class="col-sm-2 form-label">Rating</label>
                    <div class="col-sm-10">
                        <input id="rating" name="rating" type="text" class="form-control" placeholder="Rating">
                    </div>
                </div> 
                <div class="form-group">
                    <label  class="col-sm-2 form-label">Tags</label>
                    <div class="col-sm-10">
                        <? generate_tag_checkboxes(); ?>   
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" class="btn btn-default" value="Submit"></input>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
