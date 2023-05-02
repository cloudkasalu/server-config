<?php
namespace classes;
use controllers\VisitorController;
class EntryPoint{
    public function __construct(){

    }

    private function loadTemplate($templateFileName, $variables = []) {
        extract($variables);
        ob_start();
        include __DIR__ . '/../templates/' . $templateFileName;
        return ob_get_clean();

    }

    private function checkUri($url) {
        if ($url != strtolower($url)) {
        http_response_code(301);
        header('location: ' . strtolower($url));
        }
    }
        

    public function run($url){



        try {

            include __DIR__ . '/../includes/DatabaseConnection.php';
            // include __DIR__ . '/../controllers/AdminController.php';
            // include __DIR__ . '/../controllers/VisitorController.php';
            // include __DIR__ . '/../includes/autoload.php';

            $this->checkUri($url);

            if ($url == '') {
            $url = 'home';
            }
        
            $url_request = explode('/', $url);
        
            $route = array_shift($url_request);

            if($route === 'dashboard'){

                $action = array_shift($url_request);

                if(!$action){
                    $action = "home";
                }
                $controller = new \controllers\AdminController($pdo);
                $page = $controller->$action($url_request);

            }else{

                $api = array_shift($url_request);
                $controller = new VisitorController($pdo);
                $page = $controller->$route($api);
                
            }

            $title = $page['title'];
            $variables = $page['variables'] ?? [];
            $output = $this->loadTemplate($page['template'], $variables);
        
            
        } catch (\PDOException $e) {
            $title = 'An error has occurred';
            $output = 'Database error: ' . $e->getMessage() . ' in ' .
            $e->getFile() . ':' . $e->getLine();
        }

        $url_request = explode('/', $url);
        $route = array_shift($url_request);

        if($route === "dashboard"){
            include __DIR__ . '/../templates/admin/layout.php';
        }else if($route === "login" || $route === "error"){
            include __DIR__ . '/../templates/blank_layout.php';
        }else{
            include __DIR__ . '/../templates/visitor/layout.php';
        }


    }
}