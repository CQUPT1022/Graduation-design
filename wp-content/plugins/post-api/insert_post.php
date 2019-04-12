<?php
/*
Insert Post.
*/

# curl -XPOST -H"Content-Type:application/json" http://wp/wp-content/plugins/post-api/insert_post.php -d"{\"ID\": 0, \"author\": 1, \"title\": \"post title\", \"excerpt\": \"post excerpt\", \"content\": \"post content\", \"categories\": [1], \"tags\": [1]}"

require_once('pa_settings.php');

function _pa_insert_post($req) {
	$errorCode = "ERROR";
	if (!array_key_exists('ID', $req)) {
		$array['ID'] = 0;
	}
	$postarr = array (
		"ID" => $req->ID,
		"post_author" => $req->author,
		"post_title" => $req->title,
		"post_excerpt" => $req->excerpt,
		"post_content" => $req->content,
		"post_type" => "post",
		"post_status" => "publish",
		"comment_status" => "open",
		"ping_status" => "open",
		"post_category" => $req->categories,
		"tags_input" => $req->tags,
	);
	$newID = wp_insert_post($postarr, false);
	if ($newID > 0) {
		return array(
			"errorCode" => "OK",
			"ID" => $newID,
		);
	} else {
		return array(
			"errorCode" => "ERROR",
			"ID" => $newID,
		);
	}
}

$entityBody = file_get_contents('php://input');
$req = json_decode($entityBody);
$result = _pa_insert_post($req);
echo json_encode($result);	
?>