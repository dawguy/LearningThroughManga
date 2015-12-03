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
        <div id="nav_bar">
            <ul>
                <li><a href="vocabulary/index.php">Vocabulary</a></li>
                <li><a href="manga/index.php">Manga</a></li>
                <li><a href="blog/index.php">Blog</a></li>
            </ul>
        </div>
        <div id="manga">
        </div>
    </body>
</html>
