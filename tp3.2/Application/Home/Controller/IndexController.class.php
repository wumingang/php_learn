<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->output();
    }
    public function t1(){
    	$this->output();
    }
    
    public function t2(){
    	$this->output();
    }
    
    private function output(){
    	echo '<pre>';
    	var_dump($_GET);
    	debug_print_backtrace();
    }
}