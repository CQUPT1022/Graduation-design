<?php
if (array_key_exists("CONTEXT_DOCUMENT_ROOT", $_SERVER)) {
	require_once( $_SERVER["CONTEXT_DOCUMENT_ROOT"] . '/wp-config.php' );
	require_once( $_SERVER["CONTEXT_DOCUMENT_ROOT"] . '/wp-load.php' );
	require_once( $_SERVER["CONTEXT_DOCUMENT_ROOT"] . '/wp-includes/wp-db.php' );
	require_once( $_SERVER["CONTEXT_DOCUMENT_ROOT"] . '/wp-includes/pluggable.php' );
} else {
	require_once( $_SERVER["DOCUMENT_ROOT"] . '/wp-config.php' );
	require_once( $_SERVER["DOCUMENT_ROOT"] . '/wp-load.php' );
	require_once( $_SERVER["DOCUMENT_ROOT"] . '/wp-includes/wp-db.php' );
	require_once( $_SERVER["DOCUMENT_ROOT"] . '/wp-includes/pluggable.php' );
}

if (false) {
	$whiteList = array(
		"180.169.95.101" => "",
		"180.169.95.102" => "",
		"180.169.95.103" => "",
		"172.16.10.145" => "",
		"172.16.40.137" => "",
		"103.66.30.29" => "",
	);
	$uip = "0.0.0.0";
	if(isset($_GET['uip'])) {
		$uip = $_GET['uip'];
	} else if (isset($_SERVER['REMOTE_ADDR'])) {
		$uip = $_SERVER['REMOTE_ADDR'];
	} else if (isset($_SERVER['HTTP_X_REAL_IP'])) {
		$uip = $_SERVER['HTTP_X_REAL_IP'];
	}
	if (!array_key_exists($uip, $whiteList)) {
		die ('{"errorCode":"INVALID_IP", "ipAddress":"'.$uip.'"}');
	}
}

// if (true) {
// 	$token = "";
// 	if(isset($_GET['token'])) {
// 		$token = $_GET['token'];
// 	}
// 	if ($token !== "P@ssw0rd") {
// 		die ('{"errorCode":"INVALID_TOKEN"}');
// 	}
// }
// die ('{"errorCode":"ACCESS_DENIED"}');
?>
