<?php
namespace app\Frontend\controller;
use think\Db;
use think\View;
use app\Frontend\model\Category;

class Index extends Mkfrontend
{
    public function index()
    {
        // $data = Db::query('select * from mk_category where id=:id',['id'=>1]);
        // $data = model('Category');
        // var_dump($data);die;

        /*$Category = new Category;
        $info = $Category->find(1);
        // var_dump($info->category_name);die;
        var_dump($info);die;*/

        $data = Category::column('category_name','id');
        // var_dump($data);die;
        $title = '米凯博客';
        $this->assign('title',$title);
        return $this->fetch('index',$data);
    }

    public function aaa()
    {
        // $data = Db::query('select * from mk_category where id=:id',['id'=>1]);
        // $data = model('Category');
        // var_dump($data);die;

        /*$Category = new Category;
        $info = $Category->find(1);
        // var_dump($info->category_name);die;
        var_dump($info);die;*/

        $data = Category::column('category_name','id');
        // var_dump($data);die;
        return $this->fetch('aaa',$data);
    }
}
