<?php

class Heels{
    //fields
    private $id;
    private $name;
    private $thumbnail;
    private $look;
    private $quantity;
    private $price;

    //constructor

    function __construct($id,$name,$thumbnail,$look,$quantity,$price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->thumbnail = $thumbnail;
        $this->look = $look;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    //getters and setters

    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getId(){
       return $this->id;

    }

    public function setName($name){
        $this->name = $name;
        return $this;
    }
    
    public function getName(){
       return $this->name;

    }

    public function setThumbnail($thumbnail){
        $this->thumbnail = $thumbnail;
        return $this;
    }
    
    public function getThumbnail(){
       return $this->thumbnail;

    }

    public function setPrice($price){
        $this->price = $price;
        return $this;
    }
    
    public function getPrice(){
       return $this->price;

    }

    public function setQuantity($quantity){
        $this->quantity = $quantity;
        return $this;
    }
    
    public function getQuantity(){
       return $this->quantity;

    }

    public function setLook($look){
        $this->look = $look;
        return $this;
    }
    
    public function getLook(){
       return $this->look;

    }

    //methods

    public function sellHeels() {

        if ($this->quantity) {
        
            $this->quantity = 0;
            return true;

        } else {  
            return false;
        }
    }
  
    public function displayStock() {

        if ( $this->quantity > 0 ) {
            return "<p style='color:green;'>In stock</p>";
            
        } else if( $this->quantity == 0) {
            return "<p style='color:#ff1e00;'>Out of stock</p>";
        }
    }




}