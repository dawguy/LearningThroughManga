<?php
    ini_set( 'default_charset', 'UTF-8' );
    header( 'Content-Type: text/html;charset=utf-8' );
    $pk_vocab = 1;
    $vocab_manga = 'Test';
?>
<html>
    <head>
        <title>Vocabulary</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <div id="vocabulary_list">
            <table class="vocab_table" id="vocabulary_table">
                <thead>
                    <tr>
                        <th>English</th>
                        <th>Korean</th>
                        <th>Definition</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="english_word">
                            English
                        </td>
                        <td class="korean_word">
                            영어
                        </td>
                        <td class="vocab">
                            <a href="define.php?word=<?= $pk_vocab ?>"><?= $vocab_manga ?></a>
                        </td>
                    </tr>
                </tbody>
            </table>         
        </div>
    </body>
</html>
