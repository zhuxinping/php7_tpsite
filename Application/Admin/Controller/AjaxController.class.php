<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/21
 * Time: 16:24
 */
namespace Admin\Controller;
use Think\Controller;
class AjaxController extends Controller{
    function ajaxgoods(){
        $this->display();
    }
    //向数据库添加数据
    function addgoods(){
        $model=D('Goodsinfo');
      /*  $data['typeid']=I('post.pt');//产品类型
        $data['pname']=I('post.pn');//产品名称
        $data['price']=I('post.pp');//产品价格
        $data['pcount']=I('post.pc');//产品数量*/
        $data=$model->create();
        $re=$model->add($data);
        if($re){
            $this->ajaxReturn('数据添加成功!','eval');
        }else{
            $this->ajaxReturn('数据添加失败!','eval');
        }
    }
    function showmemory(){
       /* echo '内存开销使用情况:'.memory_get_usage()."<br>";
        $str=str_repeat('welcome to itbull',1000);
        echo '内存开销使用情况:'.memory_get_usage()."<br>";
        unset($str);
        echo '变量销毁后内存开销使用情况:'.memory_get_usage()."<br>";*/
       G('start');
       $model=D('Goodsinfo');
       $re=$model->select();
       G('end');
       echo '程序执行了多长时间:<br>';
       echo G('start','end','m').'kb';
    }
    function showtrace(){
        $str='男人来自金星，女人来自火星';
        trace($str,'str=','user');
    }
    function showfun(){
       // echo '圆的面积:'.circle();
        //echo '长方形的面积:'.rect();
        load('@/f2');
        echo '随机数是:'.rd();
    }
    //查看数据
    function goodslist(){
        $model=D('Goodsinfo');
        $re=$model->select();
        $this->assign('re',$re);
        echo '查看的sql语句是:'.$model->_sql();
        echo '查看的sql语句是:'.$model->getLastSql();
        $this->display();
    }
    // 修改数据
    function goodsupdate(){
        $model = D('Goodsinfo');
        $pid = I('get.pid');//得到从查看页面传递的id的值
        if(IS_GET){
            $fd=$model->find($pid);//得到id在修改页面显示你也要修改的数据
            $this->assign('fd',$fd);
        }
        if(IS_POST){
            $data['pid'] = $pid;//修改的条件
            $data['typeid'] = I('post.pt');//产品类型的值
            $data['pname'] = I('post.pn');//产品名称的值
            $data['price'] = I('post.pp');//产品价格的值
            $data['pcount'] = I('post.pc');//产品数量的值
            $re = $model->save($data);
            if($re){
                $this->success('数据修改成功！',U('goodslist'));
            }
            else{
                $this->error('数据修改失败！');
            }
        }
        $this->display();
    }
    //删除数据
    function goodsdel(){
        $model=D('Goodsinfo');
        $pid=I('get.pid');
        $re=$model->delete($pid);
        if($re){
            $this->success('数据删除成功！',U('goodslist'));
        }
        else{
            $this->error('数据删除失败！');
        }
    }
}