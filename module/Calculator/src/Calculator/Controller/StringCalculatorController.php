<?php

namespace Calculator\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class StringCalculatorController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }

    public function CalculateAction()
    {
        return new ViewModel();
    }

}

