<?php
require_once __DIR__."/Products.php";
require_once __DIR__."/../traits/weightable.php";
class ToyProduct extends Products{
    # Toy Properties
    private static string $article_type = "Gioco";
    use Weightable;
    public string $material;

    #----------------- CONSTRUCTOR ---------------
    public function __construct(string $_name, string $_description, float $_price, Categories $_category, int $_weight, string $_material)
    {
        parent::__construct($_name, $_description, $_price, $_category);
        # Uso il trait
        $this->setWeight($_weight);
        $this->material = $_material;
    }

    public function getType(){
        # Restituire attributo statico
        return self::$article_type;
    }

}
?>