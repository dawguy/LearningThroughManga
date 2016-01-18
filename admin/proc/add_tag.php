<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );

global $pdo;

$statement = "INSERT INTO tb_tags (english_tag, korean_tag) VALUES ( :english, :korean )";

$sth = $pdo->prepare( $statement );

$sth->bindParam( ':english', $_REQUEST['english_tag'] );
$sth->bindParam( ':korean', $_REQUEST['korean_tag'] );

$sth->execute();
