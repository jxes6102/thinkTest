<?php
namespace app\dbexample\controller;

use think\Controller;

use think\Db;

class Index extends Controller
{
    public function index()
    {
        return 'in dbexample';
    }

    public function add()
    {
        $name =  '貓'.rand(10,10000);
        $result = Db::execute("INSERT INTO think_db (name) VALUE ('".$name."')");
        dump($result);
        Db::table('think_db')->insert(['name'=>'奇怪狗'.rand(10,10000)]);
    }
    public function update() 
    {
        // $result = Db::execute('UPDATE think_db SET name="正常狗" WHERE name="奇怪狗66"');
        // dump($result);
        Db::table('think_db')->where('name','王大明II')->update(['name'=>'王大明NN']);
        
    }
    public function select() 
    {
        // $result = Db::query('SELECT * FROM think_db');
        // dump($result);
        
        // return json(Db::table('think_db')->select());
    }
    public function delete() 
    {
        // $result = Db::execute('DELETE FROM think_db WHERE name="QQ 先生"');
        // dump($result);

        Db::table('think_db')->where('name','王大明NN')->delete();
    }
}