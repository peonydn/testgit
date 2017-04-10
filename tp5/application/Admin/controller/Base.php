<?php

namespace app\admin\controller;

class Base extends \think\Controller{
    protected $url;
    public function __construct(\think\Request $request = null) {
        parent::__construct($request);
        //session("userid") 判断session中是否存在某个变量
        if(session('?userid')){
            $this->getMenu();//获取权限列表
            $url= strtolower(\think\Request::instance()->module())."/".strtolower(\think\Request::instance()->controller())."/".strtolower(\think\Request::instance()->action());
            echo $url;
//            dump($this->url);exit;
            if(!in_array($url,$this->url)){  //所获取的权限url是否真的属于这个人
                $this->error("没有权限");
            }
        }  else{
            $this->redirect("Admin/index/login");
        }       
   }  
    
    public function getMenu(){
        $admin_model=new \app\admin\model\Admin;
        $list=$admin_model->getfunc(session('userid'));
        $this->url=$list['url'];
        $this->assign("menu",$list['menu']);
//        $menu=[];
//        foreach ($list as $v) {
//            if($v['func_parent']==0){
//                $menu[$v['func_id']]=$v;
//            }else{
//                $menu[$v['func_parent']]['child'][]=$v;
//            }
//           $this->url[]=$v['func_url'];
//        }
//        $this->assign("menu",$menu);
    }
}
