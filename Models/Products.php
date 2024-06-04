<?php
require_once __DIR__."/Categories.php";
class Products {
    # Product Properties
    public string $name;
    public string $description;
    public float $price;
    private static string $image = "./Imgs/abc.jpg";
    private Categories $category; 

    #----------------- CONSTRUCTOR ---------------
    public function __construct(string $_name, string $_description, float $_price, Categories $_category)
    {
        $this->name = $_name;
        $this->description =  $_description;
        $this->price = $_price;
        $this->category = $_category;
    }   

    public function getName(){
        return $this->name;
    }
    public function getDesc(){
        return $this->description;
    }
    public function getPrice(){
        return number_format($this->price,2,'.','');
    }
    public function getCategory(){
        return $this->category->getCatName();
    }

    public function getImage(){
        return self::$image;
    }
}

?>