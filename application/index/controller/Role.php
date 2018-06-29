<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Role  extends Controller
{   
    //角色添加
    public function role()
    {
    	$data = input("post.");
    	$data['r_time'] = time();
    	if($data != null){
    		$arr = Db::table('t_role')->insert($data);
	    	if($arr){
	    		$this->result($arr,1,'添加成功');
	    	}else{
	    		$this->result('',0,'添加失败');
	    	}
    	}else{
    		$this->result('',0,'请填写角色名称');
    	}
    }
    //练习
    public function show(){
    	//查询
    	// $arr = Db::table('t_admin')->where('a_sex','2')->cursor();
    	// foreach ($arr as $t_admin) {
    	// 	echo $t_admin['a_user'];
    	// }
    	//添加
    	// $data = input('post.');
    	// Db::name('admin')->insertGetId($data);
    	//修改
    	// Db::table('t_admin')->where('a_user','sun')->setField(['a_user'=>'孙烨兰']);
    	// Db::name('admin')->where('a_id',2)
    	// 				 ->inc('a_time')
    	// 				 ->dec('a_sex',3)
    	// 				 ->exp('name','UPPER(name)')
    	// 				 ->update();
    	// Db::table('t_admin')->where('a_id','2')->setInc('score',1,10);
    	Db::table('t_admin')->where('a_id',3)->delete();

    }

}s