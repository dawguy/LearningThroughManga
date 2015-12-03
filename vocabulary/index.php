<?php
    $manga_root = '/LearningThroughManga';
    require_once( $_SERVER['DOCUMENT_ROOT'] . $manga_root . '/vocabulary/includes/index.php' );
    $pk_vocab = 1;
    $vocab_manga = 'Test';
?>
<html>
    <head>
        <title>Vocabulary</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <div id="nav_bar">
            <ul>
                <li><a href="vocabulary/index.php">Vocabulary</a></li>
                <li><a href="manga/index.php">Manga</a></li>
                <li><a href="blog/index.php">Blog</a></li>
            </ul>
        </div>
        <div id="vocabulary_list">
            <table class="vocab_table" id="vocabulary_table">
                <thead>
                    <tr>
                        <th>English</th>
                        <th>Korean</th>
                        <th>Definition</th>
                        <th>Detailed</th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    <?php generate_word_row( 1 ); ?>
                </tbody>
            </table>         
        </div>
    </body>
</html>
