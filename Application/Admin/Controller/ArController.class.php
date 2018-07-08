<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/21
 * Time: 16:24
 */
namespace Admin\Controller;
use Think\Controller;
class ArController extends Controller{
    //数据添加
    function goodsadd(){
        $model=D('Goodsinfo');
        $model->typeid=3;
        $model->pname="法拉第";
        $model->price=150000;
        $model->pcount=5;
        $re=$model->add();
        if($re){
            echo '数据添加成功!';
        }else{
            echo '数据添加失败!';
        }
    }
    //数据修改
    function goodsupdate(){
        $model=D('Goodsinfo');
        //$model->pid=9;//修改条件
        $model->find(12);//修改条件
        $model->typeid=5;
        $model->pname="特斯拉";
        $model->price=500000;
        $model->pcount=5;
        $re=$model->save();
        if($re){
            echo '数据修改成功!';
        }else{
            echo '数据修改失败!';
        }
    }
    //数据查看
    function goodslist(){
        $model=D('Goodsinfo');
        //$re=$model->where('typeid=1 and pname="iPhoneX"')->select();
        //$re=$model->limit('5,3')->select();
        //$re=$model->page('3,3')->select();
        //$re=$model->field('pname,price,pcount')->page('3,3')->select();
        //$re=$model->order('price desc')->select();
        $re=$model
            ->field('pname, count(*) as 数量, sum(price) as 总价')
            ->group('pname')
            ->select();
        dump($re);
    }
    //删除数据
    function goodsdel(){
        $model=D('Goodsinfo');
        //$pid=$model->pid=9;//删除条件
        $model->find(10);//删除条件
        $re=$model->delete();
        if($re){
            echo '数据删除成功!';
        }else{
            echo '数据删除失败!';
        }
    }
    //
    function goodscreate(){
        $model=D('Goodsinfo');
       if(IS_POST){//提交表单时，开始验证
           if($data=$model->create()){//收集表单数据
               echo '数据添加成功!';
               dump($data);
               $model->add();//统一添加表单数据
           }else{
               echo '数据添加失败!';
               dump($model->getError());//报错信息
           }
       }
        $this->display();
    }
    function showgoods(){
        $model=D('Goodsinfo');
        //$re=$model->count();
        //echo '总的记录数是:'.$re;
        /*$re=$model->Max('price');
        echo '最大的价格是:'.$re;*/
       /* $re=$model->avg('price');
        echo '价格平均值是:'.$re;*/
        $re=$model->sum('price');
        echo '总价格:'.$re;
    }
    function goodssql(){
        $model=D('Goodsinfo');
        //sql查询语句
       /* $re=$model->query('select *from tp_goodsinfo');*/
       //添加数据
        //$re=$model->execute("insert into tp_goodsinfo(typeid,pname,price,pcount) values('3','大众-凌渡',180000,3)");
        //修改数据
       // $re=$model->execute("update tp_goodsinfo set pname='斯柯达' where pid=2");
       $re=$model->execute("delete from tp_goodsinfo where pid=2");
        dump($re);
    }
    function showtoken(){
        $model = D('Goodsinfo');
        if(IS_POST){
            if($model->autoCheckToken($_POST)){//令牌认证的方法
                echo '令牌认证成功！';
            }
            else{
                echo '令牌认证失败！';
            }

        }
        $this->display();
    }
    //验证码
    function verify(){
        //验证码配置
        $config=array(
            'fontSize'  =>  25,              // 验证码字体大小(px)
            'imageH'    =>  80,               // 验证码图片高度
            'imageW'    =>  200,               // 验证码图片宽度
            'length'    =>  4,               // 验证码位数
        );
        //实例化验证码对象
        $vf=new \Think\Verify($config);
        //输出验证码
        $vf->entry();
    }
    function login(){
        $model=D('Admin');
        $user=I('post.username');//得到用户名
        $pwd=I('post.pwd');//得到密码
        if(IS_POST){
            if($model->checklogin($user,$pwd)){//判断用户名和密码是否相等
              $vf=new \Think\Verify();//实例化验证码对象
              $yzm=I('post.yzm');
              if($vf->check($yzm)){//判断验证码是否相等
                  echo '验证码正确，登录成功!';
              }else{
                  echo '验证码错误，登录失败!';
              }
            }else{
                echo '用户名或者密码错误!';
            }
        }
        $this->display();
    }
}