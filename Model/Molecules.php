<?php
require_once __DIR__ . '/BaseDD.php';
class Molecules extends BaseDD{
    public function toutesMolecules(){
        $db= $this->connexion();
        $req=$db->query("SELECT * FROM molecule");
        
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}
