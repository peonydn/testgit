<?php
namespace app\Home\controller;
use think\Controller;
use app\Home\model\User;
class Regist extends Controller{

    public function regist(){

        if(!empty($_POST)){
           $captcha=$_POST['checkcode'];
           if(captcha_check($captcha)){
                $username=$_POST['username'];
                $password=$_POST['password'];
                $password=$_POST['password'];
 //                $user->username=input('post.username');
 //                $user->password=input('post.password');
 //                $user->password=input('post.password');

                 $res=db('user')->where('username',$username)->find();
                 if($res){  //如果正在上传的用户名与表中的一致
                     echo "用户名已经存在";
                 }else{
                     $arr=array('username'=>$username,'password'=>$password);
                     db('user')->insert($arr);
                     $this->success('注册成功', 'login/login');
                 }
                 }
                else{
                  $this->error("验证码错误",'Regist/regist');
                }
    }  
    return $this->fetch('regist');
         }
 }
