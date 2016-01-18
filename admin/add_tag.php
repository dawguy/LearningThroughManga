<?php
?>

<html>
    <head>
        <title>Admin Add Tag</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <? require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/includes/header.php' ); ?>
        
        <div class="container">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="english_tag" class="col-sm-2 form-label">English Tag</label>
                    <div class="col-sm-10">
                        <input id="english_tag" type="text" class="form-control" placeholder="English Tag">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="korean_tag" class="col-sm-2 form-label">Korean Tag</label>
                    <div class="col-sm-10">
                        <input id="korean_tag" type="file" class="form-control" placeholder="Korean Tag">
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
