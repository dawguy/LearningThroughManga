<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/common/functions/db_lib.php' );

function get_vocab( $pk_vocab )
{
    $db = new manga_db();
    $query = "SELECT vocab, manga_context, english, korean, english_definition, korean_definition FROM tb_vocab WHERE vocab = $pk_vocab;";
    $retval = $db->query_select( $query );

    return $retval;
}
