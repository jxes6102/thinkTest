<?php
namespace app\user\controller;
use think\Controller;
use app\user\model\user as userModel;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        return 'user index!';
    }
    
    public function signin()
    {
        return $this->fetch('signin');
    }

    public function signup()
    {
        return $this->fetch('signup');
    }

}