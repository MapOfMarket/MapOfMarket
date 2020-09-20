<?php
class User{
    
     private int $id; 
     private string $name;
     private string $items;
     private string $boxes;


     public function __construct(int $id, string $name, string $items, string $boxes) {
         $this->id = $id;
         $this->name = $name;
         $this->items = $items;
         $this->boxes = $boxes;
     }
     
     public function setName(string $name): void {
        $this->name = $name;
     }
     
     public function setItems(string $items): void {
        $this->items = $items;
     }
     
     public function setBoxes(string $boxes) {
         $this->boxes = $boxes;
     }
     
     public function getName(): string {
         return $this->name;
     }
     
     public function getItems(): string {
         return $this->items;
     }
     
     public function getBoxes(): string {
         return $this->boxes;
     }
     
     public function getInfo(): void{
         echo "Id: $this->id ; Имя: $this->name ; Товары: $this->items ; Боксы: $this->boxes. <br>";
     }
     
     
     public function __destruct() {
         echo "Вызов деструктора";
     }
}
