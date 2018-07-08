<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/20
 * Time: 18:27
 */
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller{
    function shownews(){
        $arr=array('唐三藏','孙悟空','猪八戒','沙悟净');
        $name='科比';
        $from='美国';
        $this->assign('arr',$arr);
        $this->assign('name',$name);
        $this->assign('from',$from);
        $gd=new goods();//实例化对象
        $gd->pid='100001';
        $gd->pname='华为P10';
        $gd->price=5800;
        //dump($gd);
        $this->assign('gd',$gd);
        $this->display();//显示网页内容
       //$re=$this->fetch();//获取网页内容
       // dump($re);
       // $this->show();//输出网页的内容
    }
    function getnews(){
        $time=time();
        $pwd='abc123';
        $str='welcome to itbull';
        $name='';
        $this->assign('pwd',$pwd);
        $this->assign('str',$str);
        $this->assign('time',$time);
        $this->assign('name',$name);
        $this->display();
    }
    function newslist(){
        $a=2;
        $b=3;
        $score=90;
        $this->assign('a',$a);
        $this->assign('b',$b);
        $this->assign('score',$score);
        $this->display();
    }
    function showforeach(){
        $arr=array('唐三藏','孙悟空','猪八戒','沙悟净');
        $arr2=array('name'=>'唐三藏','from'=>'洛阳','age'=>'28');
        $arr3=array(
            array('唐三藏1','孙悟空1','猪八戒1','沙悟净1'),
            array('唐三藏2','孙悟空2','猪八戒2','沙悟净2'),
            array('唐三藏3','孙悟空3','猪八戒3','沙悟净3'),
            array('唐三藏4','孙悟空4','猪八戒4','沙悟净4')
        );
        $arr4=array(
            array('name'=>'唐三藏1','from'=>'洛阳1','age'=>'28'),
            array('name'=>'唐三藏2','from'=>'洛阳2','age'=>'28'),
            array('name'=>'唐三藏3','from'=>'洛阳3','age'=>'28'),
            array('name'=>'唐三藏4','from'=>'洛阳4','age'=>'28'),
        );
        $this->assign('arr',$arr);
        $this->assign('arr2',$arr2);
        $this->assign('arr3',$arr3);
        $this->assign('arr4',$arr4);
        $this->display();
    }
    function getlist(){
        $name='科比';
        $nicname='麦迪';
        $this->assign('name',$name);
        $this->assign('nicname',$nicname);
        $this->display();
    }
    function getallnews(){
        $title='这是国内新闻标题';
        $this->assign('title',$title);
        $this->display();
    }
}