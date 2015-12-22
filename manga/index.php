<?php
    $manga_root = '/LearningThroughManga';
    require_once( $_SERVER['DOCUMENT_ROOT'] . $manga_root . '/manga/includes/index.php' );
    require_once( $_SERVER['DOCUMENT_ROOT'] . $manga_root . '/common/db_lib/get_manga_list.php' );

    $manga_list = get_manga_list();
?>
<html>
    <head>
        <title>Manga</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <? require_once( $_SERVER['DOCUMENT_ROOT'] . 'LearningThroughManga' . '/common/includes/header.php' ); ?>
        <div class="container">
            <h2>Manga</h2>
            <div class="container" style="text-align: center;">
                <div class="row">
                    <div class="col-md-2">
                        <h3>English</h3>
                    </div>
                    <div class="col-md-2">
                        <h3>Korean</h3>
                    </div>
                    <div class="col-md-2">
                        <h3>Rating</h3>
                    </div>
                    <div class="col-md-3">
                        <h3>Read It Here</h3>
                    </div>
                    <div class="col-md-3">
                        <h3>Tags</h3>
                    </div>
                </div>

                <?php generate_manga_rows( $manga_list ); ?>
            </table>         
        </div>
    </body>
</html>
