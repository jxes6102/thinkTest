<?php
namespace app\about\controller;
use think\Controller;
use app\about\model\about as aboutModel;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        return 'About!';
    }

    public function sayhi ($name = 'undefined')
    {
        return 'Hi：' . $name;
    }

    public function user () {
        $title = '新增資料';
      
        $this->assign('title',$title);
        return $this -> fetch('index');
    }

    public function create ($name, $height, $weight) {
        $user = new aboutModel;
        $user->name = $name;
        $user->height = $height;
        $user->weight = $weight;
        if($user -> save()){
            return '名稱：'.$user->name.',ID：'.$user->id.'。<br/>新增成功';
        }else {
            $user->getError(); // 輸出錯誤
        }
         // return '姓名：'.$name.'<br/>'.'身高：'.$height.'<br/>'.'體重：'.$weight;
    }

    public function select($id) {
        $user = aboutModel::get($id);
        echo $user->name.'<br/>';
        echo $user->height.'<br/>';
        echo $user->weight.'<br/>';
    }

    public function all() {
        // $user = aboutModel::all();
        $user = aboutModel::paginate(5);
        $title = '全部使用者資料';
        $this->assign('title', $title)->assign('user', $user);
        return $this->fetch('getAllUser');
    }

    public function selectTest() {
        $user = aboutModel::where('height', '>', 200)->select();
        return $user;
    }
    
    public function delete($id) {
        $user = aboutModel::get($id);
        if ($user->delete()) {
         return '刪除成功'.$user->id;
        } else {
            return $user->getError();
        }
    }

    public function helloeq($name){
        $title = 'helloeq';
        return $this->assign('name',$name)->assign('title',$title)->fetch('hello');
    }
}