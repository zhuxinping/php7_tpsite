<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/20
 * Time: 17:42
 */
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends Controller{
    function login(){
        //echo '欢迎登陆后台管理系统!';
        //方式1
        //$obj=new \Home\Controller\UserController();//实例化前台模块的对象
        //echo $obj->showuser();
        //方式2 通过大A函数实例化一个对象
        //$obj=A('Home/user');
       // echo $obj->showuserb();
        //方式2 通过大R函数实例化一个对象
        //R('Home/user/showuser');
        //$this->display('logind');
        //$this->display('news/shownews');
        $this->display('Home@user:showuser');
        $this->display('news/shownews');
    }
    function loginb(){
        $made='1';
        if($made=='德国制造4.0'){
            $this->success('成功跳转',U('login'));
        }elseif ($made=='美国制造'){
            $this->error('失败跳转',U('loginc'));
        }else{
            $this->redirect('logind',array('id'=>'100'),3,'跳转中....');
        }
    }
    function loginc(){
        //echo '美国制造!';
        //$this->display();
    }
    function logind(){
        echo '中国制造!';
    }
    function showlogin(){
        $this->display();
    }
}