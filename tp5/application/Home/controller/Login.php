<?php
namespace app\Home\controller;
use think\Controller;
use app\Home\model\User;
use think\Db;
class Login extends Controller{

    public function login(){
       return view('login');
  }
  
    public function dologin($username='',$password=''){
       
        if(!empty($_POST)){
           $captcha=$_POST['checkcode'];
           if(captcha_check($captcha)){
                $user = User::get([
                        'username' => $username,
                        'password' => $password
                        ]);
                if($user){
                    session('username',$username);
//                   $this->success('登录成功', 'index/index');
                   $this->redirect('index/index');
                }else{
                    $this->error('用户名或密码不正确');
                }
          }
          else{
                    $this->error('验证码不正确');//错误页面的默认跳转页面是返回前一页，通常不需要设置
                }
        } 

  }
  
 
    
  
}
