<?php
$links = array(
    'vocab' => '/' . 'LearningThroughManga' . '/vocabulary/index.php',
    'manga' => '/' . 'LearningThroughManga' . '/manga/index.php',
    'blog'  => '/' . 'LearningThroughManga' . '/blog/index.php'
);
?>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div id="nav_bar" class="navbar-header">
            <div id="navbar_header" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= $links['vocab'] ?>">Vocabulary</a></li>
                        <li><a href="<?= $links['manga'] ?>">Manga</a></li>
                        <li><a href="<?= $links['blog'] ?>">Blog</a></li>
                    </ul>
            </div>
        </div>
    </div>
</nav>
