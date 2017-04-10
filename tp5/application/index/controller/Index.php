<?php
namespace app\index\controller;
use think\Loader;
class index extends \think\Controller{

    // error_reporting(E_ERROR);
       public function wxpay(){
    ini_set('date.timezone','Asia/Shanghai');
    //require_once "vendor/Wxpay/lib/WxPay.Api.php";
    //require_once "vendor/Wxpay/WxPay.NativePay.php";
    //require_once 'vendor/Wxpay/log.php';
    Loader::import('wxpay.lib.WxPay',"",".Api.php");
    Loader::import('wxpay.example.WxPay',"",".NativePay.php");

    $notify = new \NativePay();
    $input = new \WxPayUnifiedOrder();

    $input->SetBody("test");
    $input->SetAttach("test");
    $input->SetOut_trade_no(date("YmdHis"));
    $input->SetTotal_fee("1");//订单金额  单位是分一定要乘100
    $input->SetTime_start(date("YmdHis"));
    $input->SetTime_expire(date("YmdHis", time() + 600));
    $input->SetGoods_tag("test");//
    $input->SetNotify_url("http://192.168.8.26/tp5/index/index/notify");//回到自己方法的路径 自己的url
    $input->SetTrade_type("NATIVE");
    $input->SetProduct_id("123456789");
    $result = $notify->GetPayUrl($input);
    $url2 = $result["code_url"];

    $a = '<div style="margin-left: 10px;color:#556B2F;font-size:30px;font-weight: bolder;">扫描支付模式二</div><br/>
            <img alt="模式二扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data='.urlencode 

    ($url2).'" style="width:150px;height:150px;"/>';
            $this->assign('a',$a);
    return $this->fetch();
       }
       
    //ajax分页怎么用   
    public function ajaxindex(){
        $model=new \app\index\model\User;
        $pagesize=1;//每页显示多少条数据
        $page=empty($_GET['p'])?1:$_GET['p'];//当前页 
        $count=$model->count();//总数据量
        $start=($page-1)*$pagesize;//开始位置 0
        $list=$model->limit($start,$pagesize)->select();
        $total=ceil($count/$pagesize);//总页数
        
        $this->assign("page",$page);
        $this->assign("count",$count);
        $this->assign("list",$list);
        $this->assign("total",$total);
        if(Request::instance()->isAjax()){
          
            return $this->display('ajaxindex');
        }else{
        return $this->fetch();
        }
    }
       
    
    
    
    
    
    
    
    
    
    
}