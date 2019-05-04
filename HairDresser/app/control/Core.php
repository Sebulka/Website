<?php

class Core{
    
    protected $model = 'page';
    protected $method = 'home';
    protected $parameters = [];
    
    
    function __construct(){
        
            unset($this->parameters);
            $URL = $this->getURL();

            //parameters
            if(!empty($URL[URLparam])){
                for($x=URLparam; $x<sizeof($URL); $x++){
                    $URL[$x] = filter_var($URL[$x], FILTER_SANITIZE_STRING);
                    array_push($this->parameters, $URL[$x]);
                }

            }

            //check does file exist and implement model 

            if(isset($URL[URL1])){

                $URL[URL1] = strtolower($URL[URL1]);

                if(file_exists(ROOT.'/model/'.$URL[URL1].'.php')){

                        $this->model = $URL[URL1];
                }

            }

            require_once ROOT.'/model/'.$this->model.'.php';
            $this->model = ucfirst($this->model);




            if(isset($URL[URL2])){

                $method = strtolower($URL[URL2]);
                if(method_exists($this->model, $method)){

                        $this->method = $method;

                }

            }

            $this->controller(new $this->model, $this->method);


    }
    
    function controller($class, $method){
        
            $class->$method();
        
    }
    
    function getURL(){
        
            $URL = filter_var($_SERVER['SCRIPT_URL'], FILTER_SANITIZE_URL);
            $URL = filter_var($URL, FILTER_SANITIZE_STRING);
            $URL = trim($URL, '/');
            $URL = explode('/', $URL);

            return $URL;
            unset($URL);
    }
    
   function title($title){
        
        echo '<script> document.title="'.$title.'"</script>';
    }
     
}