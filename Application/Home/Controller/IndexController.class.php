<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
     echo '中国新四大发明是:高铁、支付宝、共享单车、网购!';
    }
    public function abouts(){
        echo '这是关于我们页面!';
    }
}