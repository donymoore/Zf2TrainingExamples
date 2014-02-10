<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Models\MyModel;

class AnimalController extends AbstractActionController
{
    public function animalAction()
    {
        return array();
    }

    public function animalSaysAction()
    {
        $animal = new animal();
        $sound = $animal->makeNoise();
        $sound = $this->params()->fromRoute('sound','groof');

        return array('sound'=>$sound,'second_sound'=>$secondSound);
    }
}