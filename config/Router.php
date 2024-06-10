<?php

class Router {
    
    public function __construct() {
        
    }
    
    public function handleRequest(array $get) : void {
        if (isset($get["route"]) && $get["route"] === "about") {
            $controller = new PageController();
            $controller->about();
        }
        else if (isset($get["route"]) && $get["route"] === "contact") {
            $controller = new PageController();
            $controller->contact();
        }
        else if (!isset($get["route"])) {
            $controller = new PageController();
            $controller->home();
        } 
        else {
            $controller = new PageController();
            $controller->notFound404();
        }
    }
    
}

?>