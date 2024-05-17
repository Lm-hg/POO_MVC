<?php
require_once __DIR__ . '/BaseDD.php';
class Delete extends BaseDD{
    function remove(string $molecule){
        $db= $this->connexion();
        $req=$db->prepare("DELETE 
         FROM atome_molecule
         WHERE id_molecule IN(SELECT id FROM molecule WHERE nom=:nom)");
        $req->bindParam(':nom',$molecule);
        if($req->execute()){
            $de=$db->prepare("DELETE FROM molecule WHERE nom=:nom");
            $de->bindParam(':nom',$molecule);
            if($de->execute()){
                return true;
            }else{
                return false;
            }
        }
    }
}