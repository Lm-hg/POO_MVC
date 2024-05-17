<?php
require_once __DIR__ . '/BaseDD.php';
class MonoMolecule extends BaseDD{
    function uneMolecule(string $molecule){
        $db= $this->connexion();
        $req=$db->prepare("SELECT molecule.nom,
                    molecule.formule,
                    atome.nom AS n,
                    atome.symbole
         FROM molecule
         JOIN atome_molecule ON molecule.id=atome_molecule.id_molecule
         JOIN atome ON atome.id=atome_molecule.id_atome WHERE molecule.nom=:nom");
        $req->bindParam(':nom',$molecule);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}