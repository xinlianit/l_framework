<?php
/**
 * 首页控制器
 */
class IndexController extends Yaf_Controller_Abstract  {
    /**
     * 首页方法
     */
    public function indexAction(){
        $this->getView()->assign("content", "Hello World");
    }
    
    /**
     * 测试方法
     */
    public function testAction(){
        echo "nihao ";die;
    }
}
