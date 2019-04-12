
<script>

(function () {

    function _pf_log(content) {if(true){console.log(content);}}

    jQuery(function($){     
        var BOTTOM_DISTANCE = 10;
        var NEW_PE = 0; 
        // var PE = '.post';
        // var OLD_PE = $(PE).length;
        // _pf_log($(PE).length);

        function ajaxGet(){
            // _pf_log('进入ajaxGet方法');
            var offset = Math.floor(Math.random()*200);
            _pf_log(offset);
            var url = location.origin + "/wp/wp-content/poster-searcher/poster-searcher.php?offset="+offset+"&count=2&sch=)))";
            _pf_log(url);
            $.getJSON(url, function(data){
                // _pf_log(data.errorCode);
                $(".loading").remove();

                if (data.errorCode == 'OK'){
                    _pf_log(data.post);
                    // _pf_log('load Post is OK');
                    html = fillPost(data);
                    // _pf_log(html);
                    $('.post').last().after(html);
                }
                else{
                    _pf_log('defeat');
                }
            })
        }

        function fillPost(data){
            var posts = data.post;
            var html = "";
 
            // _pf_log(posts);
            for (var i=0;i<2;i++){
                // _pf_log('这是第'+i+'次进入循环');
                html+= '<article class="post excerpt">'+'<br>';
                html+= '<header>'+'<br>';
                html+= '<h2 class="title">'+'<br>';
                html+= '<a href='+getpostURL(posts)[i]+' title='+getpostTITLE(posts)[i]+' rel="bookmark">'+getpostTITLE(posts)[i]+'</a>'+'<br>';
                html+= '</h2>'+'<br>';
                html+= '</header>'+'<br>';
                html+= '<div class="post-content">'+'<br>';
                html+= getpostCONTENT(posts)[i]+'<br>';
                html+= '</div>'+'<br>';
                html+= '<div class="readMore">'+'<br>';
                html+= '<a href='+getpostURL(posts)[i]+' title='+getpostTITLE(posts)[i]+'>               Read More    		</a>'+'<br>';
                html+= '</div>'+'<br>';
                html+= '</article>';
            }
            return html;
        }

        function getpostURL(posts){
            var postURL = new Array();
            for (var i=0;i<2;i++){
                postURL.push(posts[i].url);
            }
            // _pf_log(postURL);
            return postURL;
        }

        function getpostTITLE(posts){
            var postTITLE = new Array();
            for (var i=0;i<2;i++){
                postTITLE.push(posts[i].title);
            }
            // _pf_log(postTITLE);
            return postTITLE;
        }

        function getpostCONTENT(posts){
            var postCONTENT = new Array();
            for (var i=0;i<2;i++){
                postCONTENT.push(posts[i].content);
            }
            // _pf_log(postCONTENT);
            return postCONTENT;
        }

        $(document).ready(function(){

            _pf_log('aaaaaa');

        });
        
        $(window).scroll(function(event){
			var scrollHeight = $(window).scrollTop();
			var windowHeight = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
            var documentHeight = $(document).height();
            
            if(scrollHeight + windowHeight > documentHeight - BOTTOM_DISTANCE){
                var PE = '.post';
                var OLD_PE = $(PE).length;
                if (NEW_PE != OLD_PE){
                    NEW_PE = OLD_PE;
                    // _pf_log('111');
                    if ($(PE).length > 0){
                        $(PE).last().after("<div class='loading'>正在加载更多内容</div>");
                        ajaxGet();
                    }
                   
                }
            }
        });

      
            
    });

})();

</script>