<?php
class Poduim{
    private $db;
    private $selectname;
    public function __construct($db){

    $this->db = $db;
    
    $this->selectname = $db->prepare("select p.id, name from product p where p.id = 1");
    
    
    }

    public function selectname(){
        $this->selectname->execute();
        if ($this->selectname->errorCode()!=0){
        print_r($this->selectname->errorInfo());
        }
        return $this->selectname->fetchAll();
    }

}

?>