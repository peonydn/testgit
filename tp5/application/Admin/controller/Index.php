<?php
namespace app\admin\controller;
use think\Request;
   class Index extends \think\Controller{
       public function index(){
        return view('index');
      }
         public function welcome(){
          return view('welcome');
      }
       //用户登录
       public function login(){
           if(\think\Request::instance()->isPost()){
               $username=input("post.username");
               $password=input("post.password");
               $model=new \app\Admin\model\Admin();
               $user=$model->where("admin",$username)->find();
//               var_dump($user['password']);exit;//输入用户名会打印出对应的密码
               if($user){
                   if(md5($password)==$user['password']){
                       session("userid",$user['admin_id']);
                       session("user",$user);//把所有信息都存在session中
//                       var_dump($_SESSION);exit;
                       $d=$model->getfunc(session('userid'));
                       echo "<pre>";
                       var_dump($d);
//                       $this->getMenu();
                       $this->success("登录成功",'Admin/index/index');
                   }
//                   exit;
               }else{
                   $this->error("登录失败");
               }
           }
           return $this->fetch();
       }
               
   
}
