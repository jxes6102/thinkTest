<?php
namespace app\about\controller;
use think\Controller;

class HelloWorld extends Controller
{
    public function Hello()
    {
        $thing['direction'] = '前方有';
        $thing['name'] = '動物';
        return $this-> assign('thing',$thing) ->fetch('HelloWorld');
    }
}