<?php

class UsersController extends \Phalcon\Mvc\Controller
{

    public function createAction()
    {       
        $this->view->disable();

        $jsonResponse = new JsonResponse();

        //deu merda
        $error = new JsonException();
        $error->addLink('http://deuMerda.com.br')
              ->addStatus('200')
              ->addCode('200')
              ->addTitle('Deu coco')
              ->addDetail('Esclareco aqui que deu merda')
              ->addSource('pointer', 'parameter')
              ->addMeta('Esclareco aqui que deu merda');

        $jsonResponse->addError($error->getError()); 


        $jsonResponse->send(200);
       

    }

    public function readAction()
    {
        $this->view->disable();
        
        echo "ha read";    
    }

    public function updateAction()
    {
        $this->view->disable();
        
        echo "ha update";    
    }

    public function deleteAction()
    {
        $this->view->disable();
        
        echo "ha delete";    
    }

}

