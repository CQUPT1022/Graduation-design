<?php
/*
Plugin Name: poster-searcher
Plugin URI:  http://link to your plugin homepage
Description: This plugin replaces words with your own choice of words.
Version:     1.0
Author:      qzm
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

require_once('poster-searcher-setting.php');


function _ps_contentToexcerpt($content){
		$source = $content['_source'];
		$con = $source['content'];
		$con = strip_tags(strip_shortcodes($con));
		$n = 500;
		if (strlen($con)<$n){
			return $content;
		}
		else{
			$con = strip_tags(strip_shortcodes($con));
			$con = substr($con, 0, $n);
			$con = $con."...";
			$content['content'] = $con;
			return $content; 
		}
}

function _ps_es($searchType, $s, $offset, $count){
	$url = 'http://127.0.0.1:9200/wp_htq_ab/blog/_search';
	$random = rand(0,10);
	if ($searchType == 'internal') {
		$search = array(
			"from" => $offset,
			"size" => $count,
			"query" => array(
				"match" => array(
					"title" => $s,
				)
			)
		);
	} else {
		$search = array(
			"from" => $random,
			"size" => $count,
			"query" => array(
				"match_all" => array("boost" => 1.2 ),
				)
			);

	}
  // echo $random;


	$json = json_encode($search);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: '.strlen($json)));
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$rsp = curl_exec($ch);
	// echo 'rsp='.$rsp;
	curl_close($ch);
	$dejson = json_decode($rsp, true);
    return $dejson;
}




// offset = 0, count = 6
function _ps_search($sch, $offset, $count) {

	$posts = array();
	$istag = array('random', 'not_random');
	$searchType = 'internal';
	$dejson = _ps_es($searchType, $sch, $offset, $count);
	// echo json_encode ($dejson);

   if ($dejson['hits']){
	    $first = $dejson['hits'];
			$second = $first['hits'];
			foreach ($second as $third){
				$new_i = _ps_contentToexcerpt($third);
				$fourth = $third['_source'];
				$post = array (
					'blogId' => $fourth['blogId'],
					'author' => $fourth['author'],
					'title' => $fourth['title'],
					'content' => $new_i['content'],
					'url' => $fourth['url'],
					'updatedTime' => $fourth['updatedTime'],
					'tag_type' => $istag[1],
				);
				array_push($posts, $post);
			}
		}
			$sizeOF = count($posts);
			// echo $sizeOF;
		  if ($sizeOF < $count){
			  $searchType = 'not_enough';
			  $counts = $count - $sizeOF;
				$rand_dejson = _ps_es($searchType, $sch, $offset, $counts);
				// echo json_encode ($rand_dejson);
			  if ($rand_dejson['hits']){
				$rand_first = $rand_dejson['hits'];
					$rand_second = $rand_first['hits'];
					foreach ($rand_second as $rand_third){
						$newrand_i = _ps_contentToexcerpt($rand_third);
						$rand_fourth = $rand_third['_source'];
						$rand_post = array(
							'blogId' => $rand_fourth['blogId'],
							'author' => $rand_fourth['author'],
							'title' => $rand_fourth['title'],
							'content' => $newrand_i['content'],
							'url' => $rand_fourth['url'],
							'updatedTime' => $rand_fourth['updatedTime'],
							'tag_type' => $istag[0],
						);
						array_push($posts, $rand_post);
			}
			// echo json_encode($posts);
		}
	}
	$result = array(
		'errorCode' => 'OK',
		'post' => $posts,
	);
    return $result;
}
			
$sch = "";
if(isset($_GET['sch'])){
	$sch = $_GET['sch'];
}
$offset = 0;
if(isset($_GET['offset'])){
	$offset = intval($_GET['offset']);
}
$count = 1;
if(isset($_GET['count'])){
	$count = intval($_GET['count']);
}


$result = _ps_search($sch,$offset,$count);
// echo 'the keyword is:'.$_GET['sch']."\n".
echo json_encode($result);


   
// http://wp/wp-content/poster-searcher/poster-searcher.php?offset=0&count=6&sch=for