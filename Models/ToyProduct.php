<?php
class ToyProduct extends Products{
    # Toy Properties
    public string $weight;
    public string $material;

    #----------------- CONSTRUCTOR ---------------
    public function __construct(string $_name, string $_description, float $_price, string $_image, Categories $_category, string $_weight, string $_material, int $_age)
    {
        parent::__construct($_name, $_description, $_price, $_image, $_category);
        $this->weight = $_weight;
        $this->material = $_material;
    }
}
?>