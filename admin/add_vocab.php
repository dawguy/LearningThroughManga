<?php
    require_once( 'includes/generate_manga_context_options.php' );
?>

<html>
    <head>
        <title>Admin Add Vocab</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <? require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/includes/header.php' ); ?>
        <div class="container"> 
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="manga_context" class="col-sm-2 form-label">Manga Context</label>
                    <div class="col-sm-10">
                        <select id="manga_context" class="form-control">
                            <? generate_manga_context_options() ?>
                        </select>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="path" class="col-sm-2 form-label">Path</label>
                    <div class="col-sm-10">
                        <input id="path" type="text" class="form-control" placeholder="Path">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="english" class="col-sm-2 form-label">English</label>
                    <div class="col-sm-10">
                        <input id="english" type="text" class="form-control" placeholder="English">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="korean" class="col-sm-2 form-label">Korean</label>
                    <div class="col-sm-10">
                        <input id="korean" type="text" class="form-control" placeholder="Korean">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="english_definition" class="col-sm-2 form-label">English Definition</label>
                    <div class="col-sm-10">
                        <input id="english_definition" type="text" class="form-control" placeholder="English Definition">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="korean_definition" class="col-sm-2 form-label">Korean Definition</label>
                    <div class="col-sm-10">
                        <input id="korean_definition" type="text" class="form-control" placeholder="Korean Definition">
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
