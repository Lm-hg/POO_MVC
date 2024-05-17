<?php


class MoleculeController{
    public function listMolecule(){
        require_once __DIR__ . '/../Model/Molecules.php';
        $molecules= new Molecules();
        $molecule=$molecules->toutesMolecules();
        require_once __DIR__ .'/../View/Molecules.php';
    }
    function details(string $nom){
        require_once __DIR__ . '/../Model/MonoMolecule.php';
        $at=new MonoMolecule();
        $une=$at->uneMolecule($nom);
        require_once __DIR__ . '/../View/details.php';
        
    }
    function inserer(){
        require_once __DIR__ . '/../View/ajout.php';
        if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST["nom"] && !empty($_POST["formule"]))){
            require_once __DIR__ . '/../Model/Insert.php';
            $ajout= new Insert();
            if($ajout->inser($_POST["nom"],$_POST["formule"])){
                header('Location: success');
            }else{
                header('Location: error');
            }
        }
    }
    function supprimer(){
        require_once __DIR__.'/../View/supprimer.php';
        if( $_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST["nom"])){
            require_once __DIR__. '/../Model/Delete.php';
            $sup= new Delete();
            if($sup->remove($_POST["nom"])){
                header('Location: success');
            }else{
                header('Location: error');
            }
        }
    }
}