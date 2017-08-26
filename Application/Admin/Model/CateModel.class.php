<?php
namespace Admin\Model;
/**
 * Created by PhpStorm.
 * User: zyl006
 * Date: 2017/8/25
 * Time: 14:54
 */
use Think\Model;
class CateModel extends Model
{
        protected  $_validate=array(
            array('catename','require','栏目名称不得为空！',1,'regex',3),
            array('catename','','栏目名称不得重复！',1,'unique',3),

        );
}