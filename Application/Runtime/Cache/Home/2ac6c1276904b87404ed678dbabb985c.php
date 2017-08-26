<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="applicable-device" content="pc">
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" media="screen" href="/tp3/Public/static/style/style.css"  />
<link rel="shortcut icon" href="" />
	<script src="/tp3/Public/static/style/jquery.min.js"></script>

<title><?php echo ($info[title]); ?></title>
<script type="text/javascript">
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

<link rel='prev' title='<?php echo ($info[title]); ?>' href='http://yispace.net/42797.html' />

<link rel="alternate" type="application/json+oembed" href="" />
<link rel="alternate" type="text/xml+oembed" href="" />
<meta name="keywords" content="<?php echo ($info[title]); ?>" />
<meta name="description" content="<?php echo ($info[title]); ?>" />

<!-- 跳出 -->
<script type="text/javascript">/*frame*/ if (top.location != self.location) { top.location=self.location } </script>

</head>
<body class="single single-post postid-42805 single-format-standard">

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
        <div class="meta">
             <h1 class="meta-tit"><?php echo ($info["title"]); ?></h1>
              <p class="meta-info">发表：
                    <a href="/tp3/index.php/Home/cate/index/id/<?php echo ($info["cateid"]); ?>"><?php echo ($cateinfo[catename]); ?></a> &nbsp;&nbsp; 发表日期：<?php echo (date("Y-m-d",$info["createtime"])); ?>&nbsp;
              </p>
         </div>
<!-- 广告代码2 -->

<div class="entry" style="min-height: 300px">
		<?php echo htmlspecialchars_decode($info['content']);?>
</div>

        <div>
            <strong>上一篇：</strong>
            <?php if($prevs): ?><a class="prev-post icon-right" href="<?php echo U('article/index',array('id'=>$prevs['id']));?>">
                <?php echo ($prevs['title']); ?>
                </a>
                <?php else: ?>
                <a class="prev-post" href="javascript:alert('你正在看的文章已经是最新的了...');">
                    没有上一篇</a><?php endif; ?>
        </div>
        <div style="margin:10px 0;">
            <strong>下一篇：</strong>
            <?php if($nexts): ?><a class="next-post " href="<?php echo U('article/index',array('id'=>$nexts['id']));?>">
                    <?php echo ($nexts['title']); ?>
                </a>
                <?php else: ?>
                <a class="next-post" href="javascript:alert('你正在看的文章已经是最新的了...');">
                    没有下一篇</a><?php endif; ?>

        </div>
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
<!-- 百度自动推送 -->

</body>
</html>

<!-- Dynamic page generated in 0.509 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2016-08-23 19:33:53 -->

<!-- super cache -->