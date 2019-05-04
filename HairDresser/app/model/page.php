<?php

class Page{
    
    function home(){
        
        $data = [
            'title' => Core::title('Home'),
            'intro' => 'Fashion Hair Designs.'
        ];
        
        require_once ROOT.DS.'view'.DS.'home.php';
        return $data;
       
    }
    
    function contact(){
        
        $data = [
            'title' => Core::title('Contact Us'),
            'intro' => 'Fasion Hair Designs is located between "Costa cafe" and "Frends at the town".'
        ];
        
        require_once ROOT.DS.'view'.DS.'contact.php';
        return $data;
       
    }
    
     function galeries(){
        
        $data = [
            'title' => Core::title('Galeries'),
            'intro' => 'A few of ours designs.'
        ];
        
        require_once ROOT.DS.'view'.DS.'galeries.php';
        return $data;
       
    }
    
     function about(){
        
        $data = [
            'title' => Core::title('About Us'),
            'intro' => 'Beauty is the ascription of a property or characteristic to an animal, idea, object, person or place that provides a perceptual experience of pleasure or satisfaction. Beauty is studied as part of aesthetics, culture, social psychology, philosophy and sociology.'
        ];
        
        require_once ROOT.DS.'view'.DS.'about.php';
        return $data;
       
    }
}