<?php
//第一步:声明命名空间
namespace Home\Controller;
//第二步:使用父类控制器
use Think\Controller;
//第三步:定义自己的控制器并继承父类
class UserController extends  Controller{
    function showuser(){
        $name='康熙';
        $from='清朝';
        $this->assign('name',$name);//分配一个模板变量 一个是模板变量 一个是PHP变量
        $this->assign('from',$from);
        //echo '对儿媳妇有什么标准?王健林:我说了不算';
        $this->display();
    }
    function showuserb(){
        C('DEFAULT_M_LAYER','NEW_MODEL');
        echo '默认的模型层名称:'.C('DEFAULT_M_LAYER');
    }
}
