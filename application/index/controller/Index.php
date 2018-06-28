<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Index  extends Controller
{
    public function index()
    {
        $data = input("post.");
        // $data['code'] = "2345";
        $validate = validate('Index');
        if($validate->check($data)){
        	 $arr = Db::table("t_admin")->where('a_user',$data['a_user'])->find();
        	 //判断用户是否存在
        	 if($data['a_user']==$arr['a_user']){
        	 //判断密码
        	 	if($data['a_pass']==$arr['a_pass']){
        	 	    session("userinfo",$data);
        	 		$this->result($data,1,'登录成功');
        	 	}else{
        	 		$this->result('',0,'密码错误');
        	 	}
        	 }else{
        	 	$this->result('',0,'用户不存在');
        	 }
        }else{
        	$this->result('',0,$validate->getError());
        }
    }
   

}

 

