<?php
namespace Admin\Controller;
/**
 * Created by PhpStorm.
 * User: zyl006
 * Date: 2017/8/25
 * Time: 12:09
 */

class ArticleController extends BaseController
{
        public function index()
        {
            $Article=D('ArticleView');
            $count=$Article->count();
            $Page=new \Think\Page($count,5);
            $infos=$Article->order('article.sort asc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('infos',$infos);
            $this->assign('page',$Page->show());// 赋值分页输出
            $this->display();
        }

        public function  add()
        {
            $Article=D('article');
           if(IS_POST){
                $data=I('info');
               $data['inputtime']=$data['createtime']=time();
               $data['status']=1;
               if($_FILES['pic']['tmp_name']!=''){
                   $upload = new \Think\Upload();// 实例化上传类
                   $upload->maxSize   =     3145728 ;// 设置附件上传大小
                   $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                   $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                   $upload->rootPath  =      './'; // 设置附件上传目录
                   $info   =   $upload->uploadOne($_FILES['pic']);
                   if(!$info){
                       $this->error($upload->getError());
                   }else{
                       $data['pic']=$info['savepath'].$info['savename'];
                   }
               }
               if($Article->create($data)){
                   if($Article->add()){
                       $this->success("添加成功",U('index'));
                   }else{
                       $this->success("添加失败");
                   }
               }else{
                   $this->error($Article->getError());
               }
               return ;
           }
            $cate=D('cate');
            $cates=$cate->order('sort asc')->select();
            $this->assign('cates',$cates);
           $this->display();

        }

        /*
         * 修改
         * */
    public function  edit()
    {
        $Article=D('article');
        if(IS_POST){
            $data=I('info');
            $data['createtime']=time();
            $data['status']=1;
            if($_FILES['pic']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $upload->rootPath  =      './'; // 设置附件上传目录
                $info   =   $upload->uploadOne($_FILES['pic']);
                if(!$info){
                    $this->error($upload->getError());
                }else{
                    $data['pic']=$info['savepath'].$info['savename'];
                }
            }
            if($Article->create($data)){
                if($Article->save()!==false){
                    $this->success("修改成功",U('index'));
                }else{
                    $this->success("修改失败");
                }
            }else{
                $this->error($Article->getError());
            }
            return ;
        }
        $cate=D('cate');
        $cates=$cate->order('sort asc')->select();
        $id=I('id');
        $info=$Article->where(array('id'=>$id))->find();
        $this->assign('cates',$cates);
        $this->assign('info',$info);
        $this->display();

    }



    public function listorder(){
        //$sort=I('sort');
        $article=D('article');
        foreach ($_POST as $id => $sort) {
            $article->where(array('id'=>$id))->setField('sort',$sort);
        }
        $this->success('排序成功！',U('index'));
    }
/*删除*/
    public function  del()
    {
        $article=D('article');
        if($article->delete(I('id'))){
            echo json_encode(array('code'=>1,'data'=>array('msg'=>'删除成功','url'=>U('index'))));
        }else{
            echo json_encode(array('code'=>0,'data'=>array('msg'=>'删除失败','url'=>U('index'))));
        }
    }


}