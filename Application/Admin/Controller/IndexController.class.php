<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller 
{
    public function index()
    {
        $this->display();
    }

    public function addinfo()
    {
    	$a = M('question')->where(['id'=>1])->find();
    	print_r($a);
    }
}