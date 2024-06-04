<?php
require_once __DIR__."/Products.php";
require_once __DIR__."/../traits/weightable.php";
class ToyProduct extends Products{
    # Toy Properties
    private static string $article_type = "Gioco";
    use Weightable;
    public string $material;

    #----------------- CONSTRUCTOR ---------------
    public function __construct(string $_name, string $_description, float $_price, Categories $_category, int $_weight)
    {
        parent::__construct($_name, $_description, $_price, $_category);
        # Uso il trait
        $this->setWeight($_weight);
    }

    public function getType(){
        # Restituire attributo statico
        return self::$article_type;
    }


    /**
     * Get the value of material
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */ 
    public function setMaterial($_material)
    {
        $this->material = $_material;
    }
}
?>