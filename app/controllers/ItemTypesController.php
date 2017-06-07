<?php

use Phalcon\Mvc\View;

class ItemTypesController extends \Phalcon\Mvc\Controller
{

    public function createAction()
    {
        $this->view->setRenderLevel(
            View::LEVEL_NO_RENDER
        );
        echo "ha create";    
    }

    public function readAction()
    {
        $this->view->setRenderLevel(
            View::LEVEL_NO_RENDER
        );
        echo "ha read";    
    }

    public function updateAction()
    {
        $this->view->setRenderLevel(
            View::LEVEL_NO_RENDER
        );
        echo "ha update";    
    }

    public function deleteAction()
    {
        $this->view->setRenderLevel(
            View::LEVEL_NO_RENDER
        );
        echo "ha delete";    
    }

}
