<?php
class Produit{
    private $db;
    private $select;
    public function __construct($db){


    $this->db = $db;
    
    // $this->select = $db->prepare("select p.id, name, description, price, image_url, category, stock, id_podium from product p");
    $this->select = $db->prepare("select p.id, name, description, price, id_podium from product p");
    
    }

    public function select(){
        $this->select->execute();
        if ($this->select->errorCode()!=0){
        print_r($this->select->errorInfo());
        }
        return $this->select->fetchAll();
    }

}

?>