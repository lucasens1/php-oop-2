<?php
class Categories{
    private string $name;

    #----------- CONSTRUCTOR -----------
    public function __construct(string $_name)
    {
        if(is_string($_name) && !is_numeric($_name)){
            $this->name = $_name;
        } else {
            throw new Exception("Non è possibile categorizzare per numero ");
        }
    }
    
    public function getCatName(){
        return $this->name;
    }
}
?>