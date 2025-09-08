<?php
// Je creer cette page pour gerer mes vu en separant chanque parti de mon code sela me permet de controller mes vue
//Cest le principe DRY Don't Repeat Yourself (evite des repetition et ne coder le code sur chaque page)
//Donc j'enleve tou',t mon code html 
//Je charge les variables d'environnement
//Permette de charger le fichier en continu 
//(il va chercher le fichier autoload.php generer par composer) 
//il sert a charger les librairies installée automatiquement.
require __DIR__ . '/../vendor/autoload.php'; //__DIR__ va chercher l'enplacement de mon fichier pour retrouver autoload

//J'utilise la class Dotenv 
//qui se trouve dans le dossier vendor/vlucas...
//j'instancie (cree un objet) la class Dotenv
// en appellant la methode::createImmutable et va chercher le dossier dans .env
use Dotenv\Dotenv;  
$dotenv = Dotenv::createImmutable(__DIR__ . '/..'); //Cherche .env dans le dossier au dessus de public donc ecoride
$dotenv->load(); //Dit a l'objet de charger les variable du fichier .env qui est dans la memoire de l'aplication
//Ces ligne signifie que je fais apel a la bibliotheque vlucas/phpdotenv installer par composer

//Je recupère le nom des pages 
//JE verifie si le paramètre 'page' existe dans l'URL (cest la superglobale $_GET qui conteint les données de l'URL)

    if(isset($GET['page'])){
        //Si 'page' existe j'assigne sa valeur à la varible $page
        $page = $_GET['page'];
    }else{
        //sinon 'page' n'existe pas j'assigne la valeur par defaut 'accueil'
        $page = 'accueil';
    }

    //Je verifie si la page demandée exte dans le tableau que je vien de creer
    //Si le tableau existe alors j'inclu je fichier correspondant
    //je defini l'etat de la page
    $page_trouvee = false;
    $fichier_a_inclure = ''; 
    
    //je definis un tableau des pages autorisée (toutes mes pages afin d'eviter les failles de sécurité)
    $page_autorisees = [
        'navbar' => __DIR__ . '/../vue/layout/navbar.php',
        'accueil' => __DIR__ . '/../vue/accueil.php',
        'a-propos' => __DIR__ . '/../vue/apropos.php', //CODER CETTE PAGE
        'contact' => __DIR__ . '/../vue/contact.php', //CODER CETTE PAGE
        'connexion'=> __DIR__ . '/../vue/connexion.php',
        'inscription'=> __DIR__ . '/../vue/inscription.php',
        'listecovoiturage' => __DIR__ . '/../vue/listecovoiturage.php',
        'Recherche' => __DIR__ . '/../vue/recherches.php', //CODER CETTE PAGE
        '404.php' => __DIR__ . '/../vue/404.php' //CODER CETTE PAGE
    ];

    //Pour chaque pages autorisées correspondans a la cle = valeur
    // alr vrai on a trouvée la page 

    foreach($page_autorisees as $cle => $valeur) {
        if ($page === $cle){
            $fichier_a_inclure = $valeur;
            $page_trouvee = true; 
            break;// arret de la boucle
        }
    }
    //si la page n'a pas été trouvée apres la boucle alors message d'erreur
    if ($page_trouvee === false){
        $fichier_a_inclure = '404.php'; //CODER CETTE PAGE
    }

    include $fichier_a_inclure;

    //j'inclu mon pied de page
    include '../vue/layout/base.php';
    

?>
