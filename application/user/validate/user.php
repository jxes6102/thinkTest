<?php

namespace app\user\validate;

use think\Validate;

class user extends Validate
{
  protected $rule = [
    'email' => 'require|email', // 驗證 Email 格式並且要必填
    'password' => 'require|min:8|max:30', // 必填且最小長度 8 最大長度 30
    'gender' => 'require|number',// 必填，只接受 number
  ];
  protected $message = [
    'email.require' => 'Email 必填',
    'email.email'=> 'Email 格式錯誤',
    'password.require' => '密碼欄位必填',
    'password.min' => '密碼最短長度為 8',
    'password.max' => '密碼長度最長為 30',
    'gender.require' => '性別必填',
    'gender' => '性別必須為是數字'
  ];
}