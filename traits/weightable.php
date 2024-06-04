<?php
trait Weightable{
    private int $weight;

    public function setWeight(int $_weight){
        $this->weight = $_weight;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getKgWeight(){
        return $this->weight / 1000;
    }
}
?>