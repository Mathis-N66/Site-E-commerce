<?php
class Poduim{
    private $db;
    private $selectname;
    public function __construct($db){

    $this->db = $db;
    
    $this->selectname = $db->prepare("select * from product where id_podium=:id");

    }

    public function selectname($id){
        $this->selectname->execute(array(':id'=>$id));
        if ($this->selectname->errorCode()!=0){
        print_r($this->selectname->errorInfo());
        }
        return $this->selectname->fetchAll();
    }

}

?>