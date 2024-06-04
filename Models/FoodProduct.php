<?php
require_once __DIR__."/Products.php";
require_once __DIR__."/../traits/weightable.php";
class FoodProduct extends Products{
    # Food Properties
    use Weightable;
    private string $article_type;
    public int $calories;
    public string $expire_date;

    #----------------- CONSTRUCTOR ---------------
    public function __construct(string $_name, string $_description, float $_price, string $_image, Categories $_category, int $_calories, string $_expire_date, int $_g_quantity)
    {
        parent::__construct($_name, $_description, $_price, $_image, $_category);
        $this->calories = $_calories;
        $this->expire_date = $_expire_date;
        $this->setWeight($_g_quantity);
        $this->article_type = "Cibo";
    }

    public function getType(){
        return $this->article_type;
    }
}
?>