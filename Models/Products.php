<?php
require_once __DIR__."/ProducType.php";
require_once __DIR__."/Categories.php";
class Products {
    # Product Properties
    public string $name;
    public string $description;
    public float $price;
    public string $image;
    private Categories $category; 

    #----------------- CONSTRUCTOR ---------------
    public function __construct(string $_name, string $_description, float $_price, string $_image, Categories $_category)
    {
        $this->name = $_name;
        $this->description =  $_description;
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $_category;
    }

    
}

?>