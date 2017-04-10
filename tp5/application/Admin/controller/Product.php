<?php
namespace app\admin\controller;

class Product extends \think\Controller{
    public function productadd(){
        if(!empty($_POST)){ 
            
         //	获取表单上传文件	例如上传了001.jpg
        $file = request()->file('image');
        //移动到框架应用根目录/public/uploads/	目录下
        $info =	$file->move(ROOT_PATH.'public'.DS.'uploads');
        if($info){
        // 成功上传后 获取上传信息
         
        // 输出 jpg 输出方式一
//        echo $info->getExtension(); 
        
        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg   输出方式二
        $a= $info->getSaveName();  
        $res='/uploads/'.$a;
        $res= str_replace('\\', '/', $res); //原本打印出的路径是反斜杠  用str_replace 转义成斜杠
        $_POST['image']=$res;
        db('goods')->where('image',$_POST['image'])->update($_POST);
        
        // 输出 42a79759f284b767dfcb2a0197904287.jpg    输出方式三
//        echo $info->getFilename();
        }else{
        // 上传失败获取错误信息
        echo $file->getError();
        }  
           $res =  db('goods')->insert($_POST);  
                 if($res){
                    $this->success('添加成功', 'product/productlist');
                 }else{
                    $this->error('添加失败');
                 }
         }
      
     return $this->fetch('product-add');
     
    }

    public function delete($goods_id){
       
        $res=db('goods')->where('goods_id',$goods_id)->delete();
           if($res){
                    $this->success('删除成功', 'product/productlist');
                 }else{
                    $this->error('删除失败');
                 }
     }
     
    public function edit($goods_id=''){
            $info=db('goods')->where('goods_id',$goods_id)->find();
            $this->assign('info',$info);
            if(!empty($_POST)){

                    $file = request()->file('image');
                   //移动到框架应用根目录/public/uploads/	目录下
                   $info =$file->move(ROOT_PATH.'public'.DS.'uploads');
                   if($info){
                   // 成功上传后 获取上传信息

                   $a= $info->getSaveName();  
                   $res='/uploads/'.$a;
                   $res= str_replace('\\', '/', $res); //原本打印出的路径是反斜杠  用str_replace 转义成斜杠
                   $_POST['image']=$res;
                   db('goods')->where('image',$_POST['image'])->update($_POST);

                   }else{
                   // 上传失败获取错误信息
                   echo $file->getError();
                   }  
                   
             $z=db('goods')->update($_POST);
              if($z){
                //$this->redirect([分组/控制器/操作方法]地址，参数，延迟时间，提示信息);
                $this->success('修改成功', 'product/productlist');
        }else{
                $this->error('修改成功', 'product/productlist');
        }
        } 
           return  $this->fetch('product-edit');
     }
    
    public function productbrand(){
        return view('product-brand');
    }
    public function productcategory(){
        return view('product-category');
    }
    public function productlist(){
        $info=db('goods')->select();
        $this->assign('info',$info);
        return view('product-list');
    }
     public function category_add(){
        return view('product-category-add');
    }
}
