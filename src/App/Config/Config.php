<?php

namespace src\App\Config;
use Dotenv\Dotenv;


//Creation de la classe config
class Config{

    /** 
     * @param string $path le chemin vers le dossier contenant le fichier .env
    */

    public static function load($path = __DIR__ . '../'):void{

        //on verifie si le fichier .env existe avant de tenter de le charger
        if(file_exists($path . '.env')){
            $dotenv = Dotenv::createImmutable($path);
            $dotenv->load();
        }
    }

    /**
     * @param string $key le nom de la variable 
     * @param mixed $default une valeur par défaut à retourner si la variable n'existe pas
     * @return mixed la valeur de la variable ou la valeur par defaut
     */

    public static function get(string $key, $default = null){
        return $_ENV[$key] ?? $default;
    }

}