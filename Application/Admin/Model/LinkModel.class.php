<?php
namespace Admin\Model;
/**
 * Created by PhpStorm.
 * User: zyl006
 * Date: 2017/8/25
 * Time: 14:54
 */
use Think\Model;
class LinkModel extends Model
{
        protected  $_validate=array(
            array('title','require','名称不得为空！',1,'regex',3),
            array('title','','名称不得重复！',1,'unique',3),
            array('url','require','链接地址不能为空！',1,'regex',3),

        );
}