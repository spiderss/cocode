<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="applicable-device" content="pc">
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" media="screen" href="/tp3/Public/static/style/style.css"  />
<link rel="shortcut icon" href="http://yispace.net/wp-content/themes/weiweiqi/img/favicon.ico" />
	<script src="/tp3/Public/static/style/jquery.min.js"></script>
<title>美文网_美文欣赏_经典美文_励志文章_优美散文_意空间阅读网</title>		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https://s.w.org/images/core/emoji/72x72/","ext":".png","source":{"concatemoji":"http://yispace.net/wp-includes/js/wp-emoji-release.min.js?ver=4.5.2"}};
			!function(a,b,c){function d(a){var c,d,e,f=b.createElement("canvas"),g=f.getContext&&f.getContext("2d"),h=String.fromCharCode;if(!g||!g.fillText)return!1;switch(g.textBaseline="top",g.font="600 32px Arial",a){case"flag":return g.fillText(h(55356,56806,55356,56826),0,0),f.toDataURL().length>3e3;case"diversity":return g.fillText(h(55356,57221),0,0),c=g.getImageData(16,16,1,1).data,d=c[0]+","+c[1]+","+c[2]+","+c[3],g.fillText(h(55356,57221,55356,57343),0,0),c=g.getImageData(16,16,1,1).data,e=c[0]+","+c[1]+","+c[2]+","+c[3],d!==e;case"simple":return g.fillText(h(55357,56835),0,0),0!==g.getImageData(16,16,1,1).data[0];case"unicode8":return g.fillText(h(55356,57135),0,0),0!==g.getImageData(16,16,1,1).data[0]}return!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i;for(i=Array("simple","flag","unicode8","diversity"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='https://api.w.org/' href='http://yispace.net/wp-json/' />
<meta name="keywords" content="意空间,美文阅读,情感美文,励志生活,生活感悟" />
<meta name="description" content="意空间青春励志文章阅读网为读者奉献青春励志人生哲理文章故事阅读，励志的文章大全，青春励志语录名言，青春励志短文阅读，励志的故事欣赏阅读，提升思想意境，阅读改变思想。" />

<!-- 跳出 -->
<script type="text/javascript">/*frame*/ if (top.location != self.location) { top.location=self.location } </script>

</head>
<body class="home blog">
<div class="topbar">
    <div class="inner">
        <a class="logo" href="/tp3/" title="tp3.2博客网站">tp3.2博客网站</a>
        <ul class="nav">
            <?php if(is_array($naves)): $i = 0; $__LIST__ = $naves;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($current == $vo['id']): ?>class='current-menu-item'<?php endif; ?> >
                <a href="/tp3/index.php/Home/Cate/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>


    </div>
</div>
<div class="wrapper">
	<div class="content">


	
	<!-- 分享代码 --><div class="baidufenxiang" style="overflow:auto;margin-bottom:10px"><!-- Baidu Button BEGIN -->
<div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
<a class="bds_bdhome"></a>
<a class="bds_renren"></a>
<a class="bds_kaixin001"></a>
<a class="bds_douban"></a>
<a class="bds_youdao"></a>
<a class="bds_sqq"></a>
<a class="bds_hi"></a>
<a class="bds_baidu"></a>
<a class="bds_qq"></a>
<a class="bds_tqq"></a>
<a class="bds_tsina"></a>
<a class="bds_qzone"></a>
<a class="bds_mshare"></a>
<span class="bds_more"></span>
<a class="shareCount"></a>
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=53164" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
<!-- Baidu Button END --></div><!-- 分享代码 -->
	
<ul class="excerpt thumb">
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
			<a href="/tp3/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>" class="pic">
				<img <?php if($vo["pic"] != ''): ?>src="/tp3<?php echo ($vo["pic"]); ?>"<?php endif; ?> alt="<?php echo ($vo["title"]); ?>" /></a>
				<h2 class="excerpt-tit">
				<a href="/tp3/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>" ><?php echo ($vo["title"]); ?></a>
			</h2>
			<p class="excerpt-desc"><?php echo ($vo["desc"]); ?>...</p>
			<div class="excerpt-time"><?php echo (date("m-d",$vo["time"])); ?></div>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>	
	</ul>

<div class="paging"><?php echo ($page); ?></div>

</div>
<div class="sidebar">
    <ul class="mypages">
        <li><a href="http://t.qq.com/weibogo2010" class="my-a my-tqq" target="_blank" rel="nofollow"><span><strong>腾讯微博</strong></span>腾讯微博 »</a></li>
        <li><a href="http://weibo.com/534260789" class="my-a my-weibo" target="_blank" rel="nofollow"><span><strong>新浪微博</strong></span>新浪微博 »</a></li>
        <li><a href="http://mail.qq.com/cgi-bin/bookcol?colid=20296" class="my-a my-feed" target="_blank" rel="nofollow"><span><strong>订阅本站</strong></span>订阅本站 »</a></li>
        <li><a href="http://172108624.qzone.qq.com" class="my-a my-theme" target="_blank" rel="nofollow"><span><strong>腾讯博客</strong></span>腾讯博客 »</a></li>
    </ul>
    <div class="widget widget_categories"><h3 class="widget-tit">文章分类</h3>
        <ul>
            <?php if(is_array($naves)): $i = 0; $__LIST__ = $naves;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="cat-item cat-item-18"><a href="/tp3/index.php/Home/Cate/index/id/<?php echo ($vo["id"]); ?>" ><?php echo ($vo["catename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

    </ul>
    </div>
    <div class="widget widget_recent_entries">
        <h3 class="widget-tit">最新发表</h3>
        <ul>
            <?php if(is_array($artres)): $i = 0; $__LIST__ = $artres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <a href="/tp3/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <!--友情链接-->
    <div class="widget widget_links"><h3 class="widget-tit">友情链接</h3>
    <ul class="xoxo blogroll">
        <?php if(is_array($linkres)): $i = 0; $__LIST__ = $linkres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["url"]); ?>" rel="friend" target="_blank"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    </div>
    <!--友情链接-->
</div>
</div>

<div class="footer">
    <div class="inner">
        <div class="manage">
            <a target="_blank" href="http://yispace.net/copyright">站内导航</a>  | <script type="text/javascript">
            var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
            document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F99c2c06a529fc4c8787deb597141fe76' type='text/javascript'%3E%3C/script%3E"));
        </script>		</div>
        <div class="copyright">
            <a href="http://yispace.net">意空间阅读网</a>，版权所有！ &copy; 2016 <img src="http://www.weiweiqi.com/wp-content/themes/weiweiqi/img/beian.png" /> <a rel="nofollow" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=43010202000139">湘公网安备43010202000139号</a> <a rel="nofollow" target="_blank" href="http://www.miitbeian.gov.cn">湘ICP备13010121号-3</a>
        </div>
    </div>
</div>

<script type='text/javascript' src='http://yispace.net/wp-includes/js/wp-embed.min.js?ver=4.5.2'></script>

<!-- 百度自动推送 -->
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</body>
</html>

<!-- Dynamic page generated in 0.992 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2016-08-23 19:32:28 -->

<!-- super cache -->