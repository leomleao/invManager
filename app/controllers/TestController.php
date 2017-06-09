<?php

use Phalcon\Mvc\View;

class TestController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->disable();
        // $test = array();

        
            
        $test  = ['test'];
        // $test['parameter'] = ['param','123123'];
        


        print_r(json_encode($test));


    }

}
