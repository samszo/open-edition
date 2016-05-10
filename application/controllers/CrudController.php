<?php

class CrudController extends Zend_Controller_Action
{
    
    public function insertAction()
    {
    		//récupère les paramètres
    		$params = $this->_request->getParams();

    		//enlève les paramètres Zend
    		unset($params['controller']);
    		unset($params['action']);
    		unset($params['module']);
    		//et les paramètres de l'ajout
    		unset($params['obj']);
    		
		$this->view->message="Les données ont été ajoutées.".$mess;
			
    }

    public function updateAction()
    {    	
    		//récupère les paramètres
    		$params = $this->_request->getParams();
    		$id = $this->_getParam('recid');
    		$obj = $this->_getParam('obj');

    		//enlève les paramètres Zend
    		unset($params['controller']);
    		unset($params['action']);
    		unset($params['module']);
    		//et les paramètres de l'ajout
    		unset($params['obj']);
    		unset($params['recid']);
    		
    		$this->view->message = "Les modifications ont été effectuées.";
	
    } 
    
}



