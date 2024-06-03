<?php
class ToyProduct extends Products{
    # Toy Properties
    private string $article_type;
    public string $weight;
    public string $material;

    #----------------- CONSTRUCTOR ---------------
    public function __construct(string $_name, string $_description, float $_price, string $_image, Categories $_category, string $_weight, string $_material)
    {
        parent::__construct($_name, $_description, $_price, $_image, $_category);
        $this->weight = $_weight;
        $this->material = $_material;
        $this->article_type = "Gioco";
    }

    public function getType(){
        return $this->article_type;
    }

}
?>