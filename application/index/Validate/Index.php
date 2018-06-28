<?php
namespace app\index\validate;
use think\Validate;
class Index extends Validate
{	
    protected $rule = [
      'a_user|用户名' => 'require',
      'a_pass|密码'   => 'require',
      'code|验证码'=>'require|length:4|confirm:verify',
    ];
    protected $message=[
    	'code.confirm'=>'验证码错误',
	];
}