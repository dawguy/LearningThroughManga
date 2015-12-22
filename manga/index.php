<?php
    $manga_root = '/LearningThroughManga';
    require_once( $_SERVER['DOCUMENT_ROOT'] . $manga_root . '/manga/includes/index.php' );
?>
<html>
    <head>
        <title>Manga</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <? require_once( $_SERVER['DOCUMENT_ROOT'] . 'LearningThroughManga' . '/common/includes/header.php' ); ?>
        <div id="manga_list">
            <h2>Manga List</h2>
            <table class="vocab_table" id="vocabulary_table">
                <thead>
                    <tr>
                        <th>English</th>
                        <th>Korean</th>
                        <th>Rating</th>
                        <th>Read It Here</th>
                        <th>Tags</th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    <?php generate_manga_row( 1 ); ?>
                </tbody>
            </table>         
        </div>
    </body>
</html>
