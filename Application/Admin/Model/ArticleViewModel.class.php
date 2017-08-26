<?php
namespace Admin\Model;
/**
 * Created by PhpStorm.
 * User: zyl006
 * Date: 2017/8/25
 * Time: 14:54
 */
use Think\Model\ViewModel;
class ArticleViewModel extends ViewModel
{
    public $viewFields = array(
        'Article'=>array('id','title','pic','sort','createtime','_type'=>'LEFT'),
        'Cate'=>array('catename', '_on'=>'Article.cateid=Cate.id'),

    );
}