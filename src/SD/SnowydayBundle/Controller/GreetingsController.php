<?php

namespace SD\SnowydayBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GreetingsController 
{

    public function helloAction()
    {
         $identite = array(
          'nom' => 'helloAction', 
          'prenom' => 'GET', 
          'age' => 19, 
          'estEtudiant' => true
        );
            
        return array('identite' => $identite);
    }
    
    public function byeAction()
    {
         $identite = array(
          'nom' => 'byeAction', 
          'prenom' => 'GET', 
          'age' => 19, 
          'estEtudiant' => true
        );
            
        return array('identite' => $identite);
    }
    
    public function getHelloAction()
    {
         $identite = array(
          'nom' => 'Man', 
          'prenom' => 'Del', 
          'age' => 19, 
          'estEtudiant' => true
        );
            
        return array('identite' => $identite);
    }
    
     public function putHelloAction()
    {
         $identite = array(
          'nom' => 'Man', 
          'prenom' => 'Del', 
          'age' => 19, 
          'estEtudiant' => true
        );
            
        return array('identite' => $identite);
    }
    
    
}