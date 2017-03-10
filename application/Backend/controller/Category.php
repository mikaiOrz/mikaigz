<?php
namespace app\Backend\controller;
use think\Db;
use think\View;
use think\Request;
use app\Backend\model\Category as CategoryModel;

class Category extends Mkbackend
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

        $data = CategoryModel::select();
        $title = '米凯博客';
        $this->assign('title',$title);
        $this->assign('data',$data);
        return $this->fetch('index');
    }

    /**
     * edit编辑数据
     *
     * @author Luwk <luwk@1101260312@qq.com>
     */
    public function edit($id = 0)
    {  
        $Model = new CategoryModel;
        $data = $Model->edit($id);
        $request = Request::instance();

        if (!$data) {
            $this->jsonReturn(0, '数据不存在');
        }
        if ($request->isAjax()) {       
            $postData = $request->param();
            if ($Model->updateData($postData)) {
                return $this->s('编辑成功！');
            } else {
                return $this->e('编辑失败！');
            }
        } else {
            $this->assign('data', $data);
            return $this->fetch('edit');
        }
    }

}
