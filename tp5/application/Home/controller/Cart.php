<?php

namespace app\Home\controller;
use app\Home\model\Flow;
use think\Controller;
use think\Db;
class Cart extends Controller{
    public function cart(){
        $info=db('flow')->paginate(10);
        $this->assign('info',$info);   
        return view('flow1');
      
    }


     public function delete($goods_id){

         $res=db('flow')->where('goods_id',$goods_id)->delete();
           if($res){
                    $this->success('删除成功', 'cart/cart');
                 }else{
                    $this->error('删除失败');
                 }
     }
     
    
     public function flow2(){
         $info1=db('address')->select();
//         var_dump($info1);
         $this->assign('info1',$info1); 
        return view('flow2');
        }
    
    public function flow3(){
        return view('flow3');
    }
    
}
