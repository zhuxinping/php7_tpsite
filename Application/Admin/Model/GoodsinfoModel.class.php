<?php
//第一步：声明名称空间
namespace Admin\Model;
//第二步：引用父类
use Think\Model;
// 第三步：定义一个自己的模型
class GoodsinfoModel extends Model{
    // 将表单中的每个表单元素的name名称对应数据库表的字段
    protected $_map = array(
        'pt'=>'typeid',
        'pn'=>'pname',
        'pp'=>'price',
        'pc'=>'pcount',
    );
    protected $patchValidate = true;//开启批量验证
    // 验证规则
    protected $_validate = array(
        array('typeid','require','类型不能为空！'),
        array('typeid',array(1,10),'类型范围是(1-10)！',0,'between',3),
        array('pname','require','产品名称不能为空！'),
        array('pname','','产品名称不能重复！',0,'unique',3),
        array('price','require','价格不能为空！'),
        array('pcount','require','数量不能为空！'),
    );
    //自动填充
  /*  protected $_auto = array(
        array('typeid','5'),
        array('pname','泰牛php'),
    );*/
    function showdata(){
        $re = $this->select();
        return $re;
    }
}
