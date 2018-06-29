<?php
namespace app\index\validate;
use think\Validate;
class Reg extends Validate
{
	protected $rule = [
      'a_user|用户名'  => 'require|max:25|chsAlpha',
      'a_pass|密码'   => 'require|alphaNum|min:8',
      'a_sex|性别' => 'require',
      'a_phone|手机号'=>'require|mobile',
      'a_time|注册时间' =>'require',
    ];
}