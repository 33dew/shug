<?php

namespace Helper;
namespace Helper;
class Functions {
    static function view($path, $variables = []){
        extract($variables);
        return include "./views/".$path.".view.php";
    }

    static function redirect($path): void {
        header("Location: ".$path);
    }
}