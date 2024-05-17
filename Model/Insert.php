<?php
require_once __DIR__ . '/BaseDD.php';

class Insert extends BaseDD{
    function inser(string $nom, string $formule){
        $db= $this->connexion();
        $req=$db->prepare("INSERT INTO molecule(nom, formule) VALUES(:nom,:formule)");
        $req->bindParam(':nom',$nom);
        $req->bindParam(':formule',$formule);
        if($req->execute()){
            return true;
        }else{
             return false;
        }
    }
}