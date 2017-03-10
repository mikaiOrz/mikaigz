<?php 
namespace app\Backend\model;

use think\Model;
// 米凯通用模型
class Mkmodel extends Model
{
    const STATUS_ACTIVE = 1;
    const STATUS_DISABLE = 0;

    /**
     * 创建数据
     */
    public function postData($data)
    {
        if ($this->create()) {
            return $this->insert($data);
        } else {
            return false;
        }
    }

    /**
     * 编辑数据
     */
    public function updateData($data)
    {
        if ($this->create()) {
            return $this->update($data);
        } else {
            return false;
        }
    }

    /**
     * 删除数据
     * 可单个和批量删除
     */
    public function removeData($ids = '')
    {
        $ids = trim($ids, ',');
        if ($ids) {
            $map['is_fixed'] = array('neq', 1);
            if ($pos = strpos($ids, ',')) {
                $map['id'] = array('in', $ids);
            } else {
                $map['id'] = $ids;
            }

            return $this->where($map)->delete();
        } else {
            $this->error = '缺少删除对象';
            return false;
        }
    }
}
