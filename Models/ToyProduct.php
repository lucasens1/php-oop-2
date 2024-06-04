<?php
require_once __DIR__."/Products.php";
require_once __DIR__."/../traits/weightable.php";
class ToyProduct extends Products{
    # Toy Properties
    private string $article_type;
    use Weightable;
    public string $material;

    #----------------- CONSTRUCTOR ---------------
    public function __construct(string $_name, string $_description, float $_price, string $_image, Categories $_category, int $_weight, string $_material)
    {
        parent::__construct($_name, $_description, $_price, $_image, $_category);
        # Uso il trait
        $this->setWeight($_weight);
        $this->material = $_material;
        $this->article_type = "Gioco";
    }

    public function getType(){
        return $this->article_type;
    }

}
?>