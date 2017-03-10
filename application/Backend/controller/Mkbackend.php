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

    public function s($message = 'success', $data = '')
    {        
        $return = array();
        $return['code'] = 200;
        $return['message'] = $message;
        $return['data'] = $data;
        return $return;
    }

    public function e($message = 'error', $data = '')
    {        
        $return = array();
        $return['code'] = 201;
        $return['message'] = $message;
        $return['data'] = $data;
        return $return;
    }


}
