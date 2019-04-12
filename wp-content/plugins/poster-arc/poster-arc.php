<?php
/*
Plugin Name: poster-arc
Plugin URI:  http://link to your plugin homepage
Description: This plugin replaces words with your own choice of words.
Version:     1.0
Author:      QZM
Author URI:  http://link to your website
License:     GPL2 etc
License URI: https://link to your plugin license

Copyright YEAR PLUGIN_AUTHOR_NAME (email : your email address)
(Plugin Name) is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
(Plugin Name) is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with (Plugin Name). If not, see (http://link to your plugin license).
*/

require_once('poster-setting.php');

function _pa_get_index_options($option_name) {
	$optionValue = get_option($option_name);
	return $optionValue;
}

//方法：记录日志内容
function _pa_log_api($content) {
	if (false) {
		$filePath = 'E:\workspace\logs\log.txt';
		$dt = new DateTime("now", new DateTimeZone('Asia/Chongqing'));
		$now = $dt->format('Y-m-d H:i:s');
		$fp = fopen($filePath, 'a');
		$line = $now." ".$content."\n";
		fwrite($fp, $line);
		fclose($fp);
	}
}

//方法：标签和分类
function _pa_get_post_term_list($post, $termTaxonomy) {
	if ($termTaxonomy == 'category') {
		$terms = wp_get_post_categories($post_id = $post->ID, $args = array('fields' => 'all'));
	} else if ($termTaxonomy == 'post_tag') {
		$terms = wp_get_post_tags($post_id = $post->ID, $args = array('fields' => 'all'));
	}
	$targetTerms = array();
	foreach( $terms as $term) {
		//array_push($targetTerms, array('name' => $term->name, 'term_id' => $term->term_id));
		array_push($targetTerms, htmlspecialchars_decode($term->name));//向数组尾部添加元素
	}
	return $targetTerms;
}

//方法：获取摘要
function _pa_get_excerpt($the_post){
	$the_excerpt = $the_post->post_content; //Gets post_content to be used as a basis for the excerpt
    $excerpt_length = 35; //Sets excerpt length by word count
    $the_excerpt = strip_tags(strip_shortcodes($the_excerpt)); //Strips tags and images
    $words = explode(' ', $the_excerpt, $excerpt_length + 1);

    if(count($words) > $excerpt_length) :
        array_pop($words);
        array_push($words, '…');
        $the_excerpt = implode(' ', $words);
	endif;
	return $the_excerpt;
}
//方法：获取内容
function _pa_get_content($postID) {
	if (true) {
		return null;
	} else {
		$url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/wp-content/plugins/post-filler/api_single_v4.php';
		_pa_log_api($url);
		$data = array(
			'plink' => null,
			'pid' => $postID,
		);
		
		$data_json = json_encode($data);
		_pa_log_api($data_json);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($data_json)));
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$rsp = curl_exec($ch);
		curl_close($ch);
		
		$line = "rsp=".$rsp."\n";
		_pa_log_api($line);

		$theRsp = json_decode($rsp);
		return $theRsp;
	}
}

//方法：索引文章
function _pa_index_post($indexHost, $indexName, $indexType, $index_id_prefix, $posts) {
	$lines = '';

	foreach ($posts as $post) {

		// Validate post
		if (strlen($post->post_title) <= 0) {
			_pa_log_api("post title is empty, return");
			return;
		}
		
		$result = _pa_get_content($post->ID);
		if ($result != null && $result->errorCode == 'OK') {
			$postContent = $result->postFinalContent;
		}
		if ($postContent == null) {
			$postContent = $post->post_content;
		}
		if (strlen($postContent) <= 0) {
			_pa_log_api("post contennt is empty, return");
			return;
		}
	
		$excerpt = $post->post_excerpt;
		if (strlen($excerpt) <= 0) {
			$excerpt = _pa_get_excerpt($post);
		}
		
		// Categories and Tags
		$cats = _pa_get_post_term_list($post, 'category');
		$tags = _pa_get_post_term_list($post, 'post_tag');
		$updatedTime = str_replace(" ", "T", $post->post_date);
		$updatedTime = $updatedTime."Z";
		$id = $index_id_prefix."_".$post->ID;
		$data = array(
			'blogId' => $id,
			'author' => $post->post_author,
			'title' => $post->post_title,
			'excerpt' => $excerpt,
			'content' => $post->post_content,
			'url' => $post->guid,
			'updatedTime' => $updatedTime,
			'categories' => $cats,
			'tags' => $tags,
			'domain' => $index_id_prefix,
			'name' => $post->post_name,
			'image' => null
		);

		$json = json_encode($data);
	
// 		{"index": {"_id": "200"}}
// {"blogId": "200", "tags": "[]", "url": "http://localhost:8000/pointclickcares/?p=23", "title": "lantus insulin 200", "categories": "[\"Health\",\"Insurance\"]", "content": "the content of lantus insulin", "excerpt": "this post provide the lantus insulin", "updatedTime": "2017-11-23T03:45:50Z", "author": "author 200"}

		$lines .= '{"index":{"_id":"'.$id.'"}}'."\n".$json."\n";
	}
	
	_pa_log_api($lines);
//echo 'lines='.$lines.'<br />';
	
	if ($indexName == false) {
		//_pa_log_api("index_name NOT set, exit");
		// echo "index_name NOT set, exit.<br />";
		return false;
	}
	$url = $indexHost."/".$indexName."/".$indexType."/_bulk";
//echo 'url='.$url.'<br />';

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($lines)));
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	curl_setopt($ch, CURLOPT_POSTFIELDS, $lines);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$rsp = curl_exec($ch);
	curl_close($ch);
//echo 'rsp='.$rsp.'<br />';
	
	$line = "Bulk index, rsp=".$rsp."\n";
	_pa_log_api($line);
	
	$result = json_decode($rsp, true);
	if (isset($result['errors']) && $result['errors'] == false) {
		return true;
	} else {
		return false;
	}
}

function _pa_index_all_posts($indexHost, $indexName, $indexType, $index_id_prefix, $offset, $count) {
	global $wpdb;

	$sql = "SELECT p.ID, u.display_name as post_author, p.post_title, p.post_excerpt, p.post_content, p.guid, p.post_date, p.post_name FROM $wpdb->posts p join $wpdb->users u on p.post_author=u.ID WHERE post_status = 'publish' AND (post_type = 'post' OR post_type = 'page') ORDER BY ID LIMIT ".$count." OFFSET ".$offset.";";
	$posts = $wpdb->get_results($sql);
	if (sizeof($posts) > 0) {
		$indexResult = _pa_index_post($indexHost, $indexName, $indexType, $index_id_prefix, $posts);
		if ($indexResult) {
			return array (
				'errorCode' => 'OK',
				'count' => sizeof($posts),
			);
		} else {
			return array (
				'errorCode' => 'ERROR',
				'count' => sizeof($posts),
			);
		}
	} else {
		return array (
			'errorCode' => 'NO_MORE_POST',
			'count' => sizeof($posts),
		);
	}
}

function _pa_index_selected_posts($indexHost, $indexName, $indexType, $index_id_prefix, $ids) {
	global $wpdb;

	$idArray = preg_split("[-]", $ids);
	$where = "AND p.ID IN (0";
	foreach ($idArray as $id) {
		if (strlen($id) > 0 && is_numeric($id)) {
			$where .= ",".$id;
		}
	}
	$where .= ")";
	
	$sql = "SELECT p.ID, u.display_name as post_author, p.post_title, p.post_excerpt, p.post_content, p.guid, p.post_date, p.post_name FROM $wpdb->posts p join $wpdb->users u on p.post_author=u.ID WHERE post_status = 'publish' AND post_type='post' ".$where." ORDER BY ID;";
//echo "sql=".$sql."<br />";
	$posts = $wpdb->get_results($sql);
	if (sizeof($posts) > 0) {
		$indexResult = _pa_index_post($indexHost, $indexName, $indexType, $index_id_prefix, $posts);
		if ($indexResult) {
			return array (
				'errorCode' => 'OK',
				'count' => sizeof($posts),
				'ids' => $idArray,
			);
		} else {
			return array (
				'errorCode' => 'ERROR',
				'count' => sizeof($posts),
				'ids' => $idArray,
			);
		}
	} else {
		return array (
			'errorCode' => 'NO_MORE_POST',
			'count' => sizeof($posts),
		);
	}
}

function _pa_remove_post($indexHost, $indexName, $indexType, $index_id_prefix, $author_id){
	$url = $indexHost."/".$indexName."/".$indexType."/". $author_id;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: '));
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$rsp = curl_exec($ch);
	curl_close($ch);
	$result = json_decode($rsp, true);
	if ($result['result']= "deleted") {
		return "success";
	} else {
		return "defeat";
	}
	
}

$offset = "0";
$isRange = false;
if(isset($_GET['offset'])) {
	$offset = $_GET['offset'];
	$isRange = true;
}
$count = "1";
if(isset($_GET['count'])) {
	$count = $_GET['count'];
}
$ids = "";
$isSingle = false;
if(isset($_GET['ids'])) {
	$ids = $_GET['ids'];
	$isSingle = true;
}
$remove = "";
$isRemove = false;
if(isset($_GET['rmv'])) {
	$remove = $_GET['rmv'];
	$isRemove = true;
}

$indexHost = 'http://127.0.0.1:9200';
$indexName = 'wp_htq_ab';
$indexType = 'blog';
$index_id_prefix = 'htq';

if ($isRange) {
	$result = _pa_index_all_posts($indexHost, $indexName, $indexType, $index_id_prefix, $offset, $count);
	// echo json_encode($result);
} else if ($isSingle) {
	$result = _pa_index_selected_posts($indexHost, $indexName, $indexType, $index_id_prefix, $ids);
	// echo json_encode($result);	
} else if($isRemove){
	$result = _pa_remove_post($indexHost, $indexName, $indexType, $remove);
	//  echo $result;
}
   



// Test
// http://wp/wp-content/plugins/poster-arc/poster-arc.php?offset=0&count=100&ids=