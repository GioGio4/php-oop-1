<?php
class Actor
{
    // Variabili istanza (classe actor) provvisorio 
    public $actor1;
    public $actor2;
    public $actor3;

    public function __construct($_actor1, $_actor2, $_actor3)
    {
        $this->actor1 = $_actor1;
        $this->actor2 = $_actor2;
        $this->actor3 = $_actor3;
    }
}
