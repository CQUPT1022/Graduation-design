<?php
/*
Plugin Name: poster-indexer
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

require_once('poster-settings.php');

function _pi_log($msg){
    $dt = new DateTime("now", new DateTimeZone('Asia/Chongqing'));
	$now = $dt->format('Y-m-d H:i:s');

    $content = $now.' '.$msg."\r\n";

    file_put_contents('E:/workspace/logs/log.txt',$content,FILE_APPEND);
}

//标签与分类
function _pi_post_term_list($post, $termTaxonomy) {
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

//获取摘要，如果文章没有摘要属性的话。
function _pi_excerpt($post){
	$the_excerpt = $post->post_content; //Gets post_content to be used as a basis for the excerpt
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

function on_post_published($post){
	$title = $post->post_title;
	$cats = _pi_post_term_list($post,'category');
	$tags = _pi_post_term_list($post,'post_tags');
	$author = $post->post_author;
	$updatedTime = str_replace(" ", "T", $post->post_date);
	$updatedTime = $updatedTime."Z";
	$excerpt = $post->post_excerpt;
	if (strlen($excerpt) <= 0) {
		$excerpt = _pi_excerpt($post);
	}
	else{
		$excerpt = $post->post_excerpt;
	}
	$message = '作者为：'.$author.'的人于：'.$updatedTime.'发表了标题为:'.$title.'标签为：'.$tags.'分类为：'.$cats.'内容大致为：'.$excerpt.'的文章！'; 
	_pi_log($message);
}

function on_post_trashed($post){
	$title = $post->post_title;
	$author = $post->post_author;
	$updatedTime = str_replace(" ", "T", $post->post_date);
	$updatedTime = $updatedTime."Z";
	$excerpt = _pi_excerpt($post);
	if (strlen($excerpt) <= 0) {
		$excerpt = _pi_excerpt($post);
	}
	else{
		$excerpt = $post->post_excerpt;
	}
	$message = '作者为：'.$author.'的人于：'.$updatedTime.'删除了标题为:'.$title.'内容大致为：'.$excerpt.'的文章！'; 
	_pi_log($message);
}

function on_post_status_transitions( $new_status, $old_status, $post ) {	
	if ($new_status == 'publish') {
		on_post_published($post);
	}
			
	if ($old_status == 'publish' and $new_status != 'publish') {
		on_post_trashed($post);
	}
}
add_action('transition_post_status', 'on_post_status_transitions', 10, 3 );

?>