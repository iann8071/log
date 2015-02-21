<?php
	if($_GET["log"] != null) {
	echo "log ok";
	file_put_contents('./result/log.txt', $_GET["log"]."\n", FILE_APPEND);
	} else if($_POST["url"] != null){
	file_put_contents('./result/'.urlencode($_POST["url"]), $_POST["source"]);
	echo "source ok";
	} else {
	echo "invalid";
	}
?>
