<?php
class Categories{
    private string $name;

    #----------- CONSTRUCTOR -----------
    public function __construct(string $_name)
    {
        $this->name = $_name;
    }
    
    public function getCatName(){
        return $this->name;
    }
}
?>