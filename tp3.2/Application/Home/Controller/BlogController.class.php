<?php
namespace Home\Controller;
use Think\Controller;
class BlogController extends Controller {
    public function index(){
    	$this->output();
    }
    public function read(){
    	$this->output();
    }
    
    private function output(){
    	echo '<pre>';
    	var_dump($_GET);
    	debug_print_backtrace();
    }
}