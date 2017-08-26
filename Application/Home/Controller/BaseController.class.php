<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->getNav();
        $this->getNews();
        $this->getLink();
    }

    public function getNav(){
        $cate=D('cate');
        $cates=$cate->order('sort asc')->select();
        $this->assign('naves',$cates);
    }

    public function getLink(){
        $link=D('link');
        $linkres=$link->order('sort desc')->select();
        $this->assign('linkres',$linkres);
    }

    public function getNews(){
        $artres=D('article')->order('inputtime desc')->limit(4)->select();
        $this->assign('artres',$artres);
    }


}