<?php

namespace SD\SnowydayBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/****************************************************************************/
/* php bin/console debug:router                                             */
/*  get_hello                  GET      ANY      ANY    /hello.{_format}    */
/*  put_hello                  PUT      ANY      ANY    /hello.{_format}    */
/* curl -X PUT -H "Accept:application/json" https://snowyday-man.c9users.io/web/app_dev.php/hello*/
/****************************************************************************/

class GreetingsController 
{
    public function getHelloAction()
    {
         $identite = array(
          'nom' => 'getHelloAction', 
          'Protcole' => 'GET', 
          'age' => 19, 
          'estEtudiant' => true
        );
            
        return array('identite' => $identite);
    }
    
     public function putHelloAction()
    {
         $identite = array(
          'nom' => 'putHelloAction', 
          'Protcole' => 'PUT', 
          'age' => 19, 
          'estEtudiant' => true
        );
            
        return array('identite' => $identite);
    }
}