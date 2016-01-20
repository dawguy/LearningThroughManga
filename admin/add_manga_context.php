<?php
    require_once( 'includes/generate_manga_options.php' );
?>

<html>
    <head>
        <title>Admin Add Manga Context</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <? require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/includes/header.php' ); ?>
        <div class="container"> 
            <form class="form-horizontal" method="post" action="proc/add_manga_context.php">
                <div class="form-group">
                    <label for="manga" class="col-sm-2 form-label">Manga</label>
                    <div class="col-sm-10">
                        <select id="manga" name="manga" class="form-control">
                            <? generate_manga_options() ?>
                        </select>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="path" class="col-sm-2 form-label">Path</label>
                    <div class="col-sm-10">
                        <input id="path" name="path" type="text" class="form-control" placeholder="Path">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="image" class="col-sm-2 form-label">Manga Context Image</label>
                    <div class="col-sm-10">
                        <input id="image" name="image" type="file" class="form-control" placeholder="Manga Context Image">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="meaning" class="col-sm-2 form-label">Meaning</label>
                    <div class="col-sm-10">
                        <input id="meaning" name="meaning" type="text" class="form-control" placeholder="Meaning">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="context" class="col-sm-2 form-label">Context</label>
                    <div class="col-sm-10">
                        <input id="context" name="context" type="text" class="form-control" placeholder="Context">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="translation" class="col-sm-2 form-label">Translation</label>
                    <div class="col-sm-10">
                        <input id="translation" name="translation" type="text" class="form-control" placeholder="Translation">
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
