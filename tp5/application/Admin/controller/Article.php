<?php

namespace app\admin\controller;

class Article extends \think\Controller{
     public function articlelist(){
          $info=db('article')->select();
         $this->assign('info',$info);
         
        return view('article-list');
    }
     public function articleadd(){
        
         if(!empty($_POST)){
             
         db('article')->insert($_POST);
         $this->success('注册成功', 'article/articlelist');
        }
        return view('article-add');
    }
}
