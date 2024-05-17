<?php
$route = $_SERVER['PATH_INFO'] ?? '/home';


    switch ($route) {
        case '/':
        case '/home':
            require_once './Contoller/MoleculesController.php';

            $affiche= new MoleculeController;
            $affiche->listMolecule();
            break;

        case '/details':
            $nom=$_GET['nom'];
            require_once './Contoller/MoleculesController.php';

            $affiche= new MoleculeController;
            $affiche->details($nom);
            break;

        case '/ajouter':
            require_once './Contoller/MoleculesController.php';

            $affiche= new MoleculeController;
            $affiche->inserer();
            break;

        case '/supprimer':
            require_once './Contoller/MoleculesController.php';

            $affiche= new MoleculeController;
            $affiche->supprimer();
            break;

        case '/error':
            include __DIR__. '/./View/error.php';
            break;
        case '/success':
            include __DIR__. '/./View/success.php';
            break;
        default:
            include __DIR__ . '/./View/error404.php';
            break;
                
 
        
    }
