<?php
class Item{
    
    private int $id;
    private string $specs;
    private float $price;
    
    public function __construct(int $id, string $specs, float $price) {
        $this->id = $id;
        $this->specs = $specs;
        $this->price = $price;
    }
    
    public function setSpecs(string $specs): void {
        $this->specs = $specs;
    }
    
    public function setPrice(float $price): void {
        $this->price = $price;
    }
    
    public function getSpecs(): string{
        return $this->specs;
    }
    
    public function getPrice(): float {
        return $this->price;
    }


    public function getInfo(){
         echo "Характеристики: $this->name ; Цена: $this->items <br>";
     }
     
     
     public function __destruct() {
         echo "Вызов деструктора";
     }
}

