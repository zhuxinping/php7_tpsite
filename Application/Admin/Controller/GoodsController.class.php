<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller{

	function showlist(){
		// 方式1：直接实例化模型对象
       // $model = new \Admin\Model\GoodsinfoModel();//实例化模型
        //dump($model);
        //方式2
       //$model=M('Goodsinfo');//new Model();实例化父类
        //方式3
        $model=D('Goodsinfo');//实例化自己的
       //$re=$model->select();//从数据库中查询所有数据
       //$re=$model->select('1,2,3');
       //$re=$model->find();
        $re=$model->showdata();
        //dump($re);
        $this->assign('re',$re);
        $this->display();
	}
	//添加数据
    function addgoods(){
	    $model=D('Goodsinfo');
	    $data=array(
	        'typeid'=>'11',
            'pname'=>'<script>121212</script>',
            'price'=>5200,
            'pcount'=>20
        );
	    $re=$model->filter('strip_tags')->add($data);
	    if($re){
	        echo '添加数据成功!';
        }else{
            echo '添加数据失败!';
        }
    }
    //修改数据
    function updategoods(){
        $model=D('Goodsinfo');
        $data=array(
            'pid'=>6,//修改条件
            'typeid'=>'5',
            'pname'=>'宝马',
            'price'=>520000,
            'pcount'=>2
        );
        $re=$model->save($data);//修改方法
        if($re){
            echo '修改数据成功!';
        }else{
            echo '修改数据失败!';
        }
    }
    //删除数据
    function delgoods(){
        $model=D('Goodsinfo');
        $re=$model->delete('7,8,9');
        if($re){
            echo '数据删除成功';
        }else{
            echo '数据删除失败';
        }
    }
    function showgetpost(){
        //$name1=$_GET['username'];
        $name2=I('get.username');
       // var_dump($name1);
        var_dump($name2);
    }
}