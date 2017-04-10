<?php

namespace app\admin\controller;

class Admin extends \think\Controller{
 
    public function adminadd(){
       if(!empty($_POST)){
           $admin=$_POST['admin'];
          $res=db('admin')->where('admin',$admin)->find();
          if($res){
              echo '此用户名已经存在';
          }else{
              db('admin')->insert($_POST);
              $this->success('注册成功', 'admin/adminlist');
          }
       }
    return view('admin-add');
    }


    public function adminlist(){
//        $admin= new Admin;
        $admin=db('admin')->select();
        $this->assign('info',$admin);
        return view('admin-list');
    }
    public function adminpermission(){
        return view('admin-permission');
    }
    public function adminrole(){
        return view('admin-role');
    }
}
