<?php
namespace Home\Controller;

class ArticleController extends BaseController  {
    public function index()
    {
        $id=I('id');
        $article=D('article');
        $info=$article->where(array('id'=>$id))->find();
        $cateinfo=D('cate')->find($info['cateid']);
        $this->assign('info',$info);
        $this->assign('cateinfo',$cateinfo);

        /*上一篇下一排呢*/
        $prevs=D('article')->where('id<'.$id)->where(array('cateid'=>$info['cateid']))->order('cateid desc')->find();
        $nexts=D('article')->where('id>'.$id)->where(array('cateid'=>$info['cateid']))->order('cateid asc')->find();

        $this->assign('prevs',$prevs);
        $this->assign('nexts',$nexts);

        $this->current();
        $this->display();
    }

    public function current()
    {
        $id=I('id');
        $article=D('article');
        $info=$article->where(array('id'=>$id))->find();
        $this->assign('current',$info['cateid']);
    }

}