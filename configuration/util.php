<?php 
include('database_connection.php');

function getRootPathFile($pathFile) {
	return $_SERVER['DOCUMENT_ROOT'].'/'.$pathFile;
}

?>