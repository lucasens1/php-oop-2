<?php
class FoodProduct extends Products{
    # Food Properties
    public int $calories;
    public string $expire_date;
    public int $g_quantity;

    #----------------- CONSTRUCTOR ---------------
    public function __construct(string $_name, string $_description, float $_price, string $_image, Categories $_category, int $_calories, string $_expire_date, int $_g_quantity)
    {
        parent::__construct($_name, $_description, $_price, $_image, $_category);
        $this->calories = $_calories;
        $this->expire_date = $_expire_date;
        $this->g_quantity = $_g_quantity;
    }
}
?>