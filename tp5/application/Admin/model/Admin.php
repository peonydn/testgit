<?php
namespace app\Admin\model;
use think\Db;
class Admin extends \think\Model {
    protected $table="tb_admin";
    
    public function getfunc($admin_id){
        
        $sql1="select func_ids from tb_admin_role ar left join tb_role r on ar.role_id=r.role_id where ar.admin_id=$admin_id";
        $func_ids=Db::query($sql1);
        var_dump($func_ids);//用哪个用户登录 用户id对应权限id,权限id对应func_id, 如打印出func_id（1,2,3,4,5）
        $sql="select * from tb_func where func_id in({$func_ids[0]['func_ids']})"; //in(1,2,3,4,5)
        $func_list=Db::query($sql);
//        var_dump($func_list);
//        return $func_list;
        $menu=[];//定义空数组 往里存东西
        $url=[];
        
          foreach ($func_list as $v) { //遍历作用：哪个角色对应哪些功能
            if($v['func_parent']==0){
                $menu[$v['func_id']]=$v;
            }else{
                $menu[$v['func_parent']]['child'][]=$v;
            }
           $url[]=$v['func_url'];
        }
        $data['menu']=$menu;
        $data['url']=$url;
        return $data;
        
        
    }
    
}
