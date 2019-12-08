<?php


namespace App\Service;


class Greeter
{
    public $name;

    /**
     * Greeter constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    /**
     * @return string
     */
    public function greet(){
    return "Hello" . $this->name . "!";
}
}