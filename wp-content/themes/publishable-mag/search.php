<?php
/**
 * The template for displaying search results pages.
 *
 * @package publishable Lite
 */

get_header(); ?>
<?php 
function _s_search($offset, $count, $sch){
	//搜索框内有空格
	if(strpos($sch, ' ') !== false){
		$sch = str_replace(' ', '20%', $sch);
	}
	else{
		$sch = $sch;
	}
	// $url = "www.baidu.com";
	$url ="http://wp/wp-content/poster-searcher/poster-searcher.php?offset=".$offset."&count=".$count."&sch=".$sch;
	// echo $offset;
	// echo $count;
	// echo $sch;
	// echo $url;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	$info = curl_getinfo($ch,CURLINFO_HTTP_CODE);
	// curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$rsp = curl_exec($ch);
	
	// echo 'rsp='.$rsp.'<br>';
	$dejson = json_decode($rsp, true);

	// echo $info."<br>";
	
	curl_close($ch);

	// echo ("dejson=".$dejson.'<br>');
	return $dejson;

}

function exist_posts($result){
	$status = "false";
	$result_post = $result["post"];
	if(isset($result_post)){
		$status = 'true';
	}
	// echo json_encode($result_post);
	return $status;
}

function _s_put_post($result,$n){
	$result_post = $result["post"];
	// echo json_encode($result_post);
	$result_post_title = array();
	$result_post_url = array();
	$result_post_content = array();
	foreach ($result_post as $i){
		array_push($result_post_title, $i['title']);
		array_push($result_post_url, $i['url']);
		array_push($result_post_content, $i['content']);
	}
	$html = '<article class="post excerpt">'.'<br>';
	$html.= '<header>'.'<br>';
	$html.= '<h2 class="title">'.'<br>';
	$html.= '<a href='.$result_post_url[$n].' title='.$result_post_title[$n].' rel="bookmark">'.$result_post_title[$n].'</a>'.'<br>';
	$html.= '</h2>'.'<br>';
	$html.= '</header>'.'<br>';
	$html.= '<div class="post-content">'.'<br>';
	$html.= $result_post_content[$n].'<br>';
	$html.= '</div>'.'<br>';
	$html.= '<div class="readMore">'.'<br>';
	$html.= '<a href='.$result_post_url[$n].' title='.$result_post_title[$n].'>
    			Read More    		</a>'.'<br>';
	$html.= '</div>'.'<br>';
	$html.= '</article>';
	echo $html;
	return;
}

$sch='';
if(isset($_GET['s'])){
	$sch = $_GET['s'];
	$offset = 0;
	$count = 6;
	$result = _s_search($offset, $count, $sch);
	// echo json_encode($result);
	$status = exist_posts($result);
    // $html = _s_put_post($result, 1);
}

?>

	<div id="page" class="search-area">
		<div id="content" class="article">
			<?php if ($status == 'true') :
			    //  echo 'aaaa';
				$publishable_lite_full_posts = get_theme_mod('publishable_lite_full_posts');
				$n = 0;
				while ($n<6):
				_s_put_post($result, $n);
				$n += 1;
				endwhile;
				publishable_lite_post_navigation();
			else : ?>
				<div class="single_post clear">
					<article id="content" class="article page">
						<header>
							<h1 class="title"><?php esc_html_e( 'Nothing Found', 'publishable-mag' ); ?></h1>
						</header>
						<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'publishable-mag' ); ?></p>
						<?php get_search_form(); ?>
					</article>
				</div>
			<?php endif; ?>
		</div><!-- .article -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php get_footer(); ?>
