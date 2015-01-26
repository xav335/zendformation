<?php

namespace POTM\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel(
        	array(
        		'message' => 'Hello word'
        	)
       	);
    }

    public function listAction()
    {
        return new ViewModel();
    }

    public function addAction()
    {
        return new ViewModel();
    }

    public function deleteAction()
    {
        return new ViewModel();
    }

    public function updateAction()
    {
        return new ViewModel();
    }

    public function showAction()
    {
        return new ViewModel();
    }


}

