<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>『ThinkPHP』BLOG后台管理V0.1</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/tp3/Application/Admin/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="http://localhost/tp3/Application/Admin/Public/css/main.css"/>
    <script type="text/javascript" src="http://localhost/tp3/Application/Admin/Public/js/libs/jquery.min.js"></script>
    <script type="text/javascript" src="http://localhost/tp3/Application/Admin/Public/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">

    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo U('admin/index');?>">首页</a></li>
                <li><a href="<?php echo U('Home/index/index');?>" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员,<?php echo $_SESSION['uname'];?></a></li>
                <li><a href="/tp3/index.php/Admin/Admin/edit/id/<?php echo $_SESSION['uid'];?>">修改密码</a></li>
                <li><a href="<?php echo U('admin/admin/logout');?>">退出</a></li>
            </ul>
        </div>
    </div>
</div>



<div class="container clearfix">
    <div class="sidebar-wrap">
    <div class="sidebar-title">
        <h1>菜单</h1>
    </div>
    <div class="sidebar-content">
        <ul class="sidebar-list">
            <li>
                <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                <ul class="sub-menu">

                    <li><a href="<?php echo U('Admin/Article/index');?>"><i class="icon-font">&#xe005;</i>博文管理</a></li>
                    <li><a href="<?php echo U('Admin/Category/index');?>"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                    <li><a href="<?php echo U('Admin/link/index');?>"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                    <li><a href="<?php echo U('Admin/admin/index');?>"><i class="icon-font">&#xe052;</i>管理员管理</a></li>
                    <!--<li><a href="design.html"><i class="icon-font">&#xe008;</i>作品管理</a></li>-->
                    <!--<li><a href="design.html"><i class="icon-font">&#xe004;</i>留言管理</a></li>-->
                    <!--<li><a href="design.html"><i class="icon-font">&#xe012;</i>评论管理</a></li>-->

                    <!--<li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>-->
                </ul>
            </li>
            <li>
                <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                <ul class="sub-menu">
                    <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                    <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                    <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                    <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/admin">首页</a>
                <span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo U('admin/article/index');?>">文章管理</a>
                <span class="crumb-step">&gt;</span><span>修改文章</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action=" " method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <input type="hidden" name="info[id]" value="<?php echo ($info[id]); ?>">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th width="120"><i class="require-red">*</i>分类：</th>
                            <td>
                                <select name="info[cateid]" id="catid" class="required">

                                    <option value="">请选择</option>
                                    <?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo['id'] == $info['cateid']): ?>selected="selected"<?php endif; ?> ><?php echo ($vo["catename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

                                </select>
                            </td>
                        </tr>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required" id="title" name="info[title]" size="50" value="<?php echo ($info["title"]); ?>" type="text">
                                </td>
                            </tr>

                            <tr>
                                <th><i class="require-red">*</i>缩略图：</th>
                                <td>
                                    <input name="pic" id="" type="file">
                                    <!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>-->
                                    <?php if($info['pic'] != ''): ?><img src="/tp3<?php echo ($info["pic"]); ?>" height="30">
                                        <?php else: endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>描述：</th>
                                <td><textarea name="info[desc]" class="common-textarea" id="desc" cols="30" style="width: 98%;" rows="3"><?php echo ($info["desc"]); ?></textarea></td>
                            </tr>

                        <tr>
                            <th>内容：</th>
                            <td><textarea name="info[content]" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10">
                                <?php echo ($info["content"]); ?>
                            </textarea></td>
                        </tr>

                        <!--<tr>-->
                            <!--<th>状态：</th>-->
                            <!--<td>-->
                                <!--<input type="checkbox" name="info[status]" value="1" checked>启用-->
                                <!--<input type="checkbox" name="info[status]" value="0">禁用-->

                            <!--</td>-->
                        <!--</tr>-->

                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>

    <script src="http://localhost/tp3/Application/Admin/Public/js/kindeditor/kindeditor.config.js"> </script>
    <script src="http://localhost/tp3/Application/Admin/Public/js/kindeditor/kindeditor-all-min.js"> </script>
    <script>
        $(document).ready(function () {
            var _kindEditor;
            KindEditor.ready(function(K) {
                _kindEditor = K.create('#content', KindEditorOptions);

                K('#upload-photo-btn').click(function () {
                    var photo_list_item = '';
                    _kindEditor.loadPlugin('multiimage', function() {
                        _kindEditor.plugin.multiImageDialog({
                            showRemote : false,
                            imageUrl : K('#photo').val(),
                            clickFn : function(data) {
                                $.each(data, function (index, item) {
                                    photo_list_item += '<div class="photo-list"><input type="text" name="photo[]" value="' + item.url + '" class="layui-input layui-input-inline">';
                                    photo_list_item += '<button type="button" class="layui-btn layui-btn-danger remove-photo-btn">移除</button></div>'
                                });
                                $('#photo-container').append(photo_list_item);
                                _kindEditor.hideDialog();
                            }
                        });
                    });
                });
            });

            $('#photo-container').on('click', '.remove-photo-btn', function () {
                $(this).parent('.photo-list').remove();
            });
        });
    </script>
    <!--/main-->
</div>
</body>
</html>