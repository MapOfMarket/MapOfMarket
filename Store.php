<?php
class Store{
    
    private int $id;
    private string $name;
    
    public function __construct(int $id, string $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getPrice(): float {
        return $this->name;
    }

    public function getInfo(){
         echo "Название рынка: $this->name <br>";
     }
     
     
     public function __destruct() {
         echo "Вызов деструктора";
     }
}

