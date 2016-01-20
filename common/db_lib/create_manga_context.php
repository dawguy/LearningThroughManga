<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );

function create_manga_context( $manga, $path, $image, $meaning, $context, $translation )
{
    global $pdo;

    $statement = "INSERT INTO tb_manga_context ( manga, path, image, meaning, context, translation ) VALUES ( :manga, :path, :image, :meaning, :context, :translation )";

    $sth = $pdo->prepare( $statement );
    $sth->bindParam( ':manga', $manga );
    $sth->bindParam( ':path', $path );
    $sth->bindParam( ':image', $image );
    $sth->bindParam( ':meaning', $meaning );
    $sth->bindParam( ':context', $context );
    $sth->bindParam( ':translation', $translation );

    $retval = $sth->execute();

    return $pdo->lastInsertId();
}
