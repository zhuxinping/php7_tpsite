<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/22
 * Time: 15:56
 */
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model{
    function checklogin($user,$pwd){//表单输入的值
        $data=$this->where("username='$user' and password='$pwd'")->find();
        if($data){
            return $data;
        }else{
            return null;
        }
    }
}