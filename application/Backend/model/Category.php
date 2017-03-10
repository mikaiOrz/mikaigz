<?php 
namespace app\Backend\model;

use think\Model;

class Category extends Mkmodel
{
    //自定义初始化
    protected function initialize()
    {
        //需要调用`Model`的`initialize`方法
        parent::initialize();
        //TODO:自定义的初始化
    }

    /**
     * 编辑
     *
     * @author Luwk <luwk@1101260312.com>
     */
    public function edit($id)
    {
        $map = array();
        $data = $this->alias('c')->field(true)->where($map)->find();

        return $data;
    }
}
