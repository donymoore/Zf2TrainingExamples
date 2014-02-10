<?php

namespace Application\Models;

class Animal
{
    public $sound = 'sound';

    public function makeNoise() {
        return $this->sound;
    }

}