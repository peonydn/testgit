<?php
namespace app\admin\controller;

class login extends \think\Controller{
  public function index($admin){
      
//       if(!empty($_POST)){
//           $captcha=$_POST['checkcode'];
//           if(captcha_check($captcha)){
//                $user = User::get([
//                        'admin' => $admin,
//                        'password' => $password
//                        ]);
//                if($user){
//                    session('admin',$admin);
////                   $this->success('登录成功', 'index/index');
//                   $this->redirect('index/index');
//                }else{
//                    $this->error('用户名或密码不正确');
//                }
//          }
//          else{
//                    $this->error('验证码不正确');//错误页面的默认跳转页面是返回前一页，通常不需要设置
//                }
//        } 
      
     if(!empty($_POST)){
         
       $user = Admin::get([
                        'admin' => $admin,
                        'password' => $password
                        ]);

                if($user){
                   $this->redirect('Admin/index/index');
                }else{
                    $this->error('用户名或密码不正确');
                }
     }      
    return view('login');
  }
  
}
