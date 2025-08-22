<?php

class View
{
    private static $_instance;
    public static function getInstance()
    {
        if(is_null(self::$_instance)){
            self::$_instance = new View();
        }
        return self::$_instance;
    }

    public function render($viewName, $data = array()){
        $file = "views/{$viewName}.php";

        if (file_exists($file)) {
            extract($data); // pour rendre les variables accessibles dans la vue
            require $file;
        } else {
            echo "Vue {$viewName} introuvable.";
        }
    }
}