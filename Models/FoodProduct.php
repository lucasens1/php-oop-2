<?php
require_once __DIR__."/Products.php";
require_once __DIR__."/../traits/weightable.php";
class FoodProduct extends Products{
    # Food Properties
    use Weightable;
    private static string $article_type = "Cibo";
    public int $calories;
    public string $expire_date;

    #----------------- CONSTRUCTOR ---------------
    public function __construct(string $_name, string $_description, float $_price, Categories $_category, int $_g_quantity)
    {
        parent::__construct($_name, $_description, $_price, $_category);
        $this->setWeight($_g_quantity);
    }

    public function getType(){
        # Restituire attributo statico
        return self::$article_type;
    }

    public function setCalories(int $_calories){
        $this->calories = $_calories;
    }

    public function getCalories(){
        return $this->calories;
    }

    public function setExpire_date($_expire_date){
        $this->expire_date = $_expire_date;
    }

    public function getExpire_date(){
        return $this->expire_date;
    }
}
?>