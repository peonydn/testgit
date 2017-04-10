<?php

namespace app\Home\controller;

class Goods extends \think\Controller{

    public function goods($goods_id=''){
        $info=db('goods')->where('goods_id',$goods_id)->find();
//        var_dump($info);
        $this->assign('info',$info); 

         if(!empty($_POST)){
              var_dump($_POST);
              $res =  db('flow')->insert($_POST);  
                 if($res){
                    $this->success('添加成功', 'Home/cart/cart');
                 }else{
                    $this->error('添加失败');
                 }
         }
        
        return view('goods');
    }

    public function goodslist(){
         $info=db('goods')->paginate(10);

         $this->assign('info',$info);  
         return view('list');
    }
    public function order(){
        return view('order');
    }
}
