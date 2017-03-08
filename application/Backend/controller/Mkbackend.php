<?php
namespace app\Backend\controller;

use think\Controller;

class Mkbackend extends Controller
{
    public function index()
    {
        // 获取包含域名的完整URL地址
        $this->assign('domain',$this->request->url(true));
        return $this->fetch('index');
    }
}
