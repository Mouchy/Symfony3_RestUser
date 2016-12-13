<?php

namespace SD\SnowydayBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Routing\ClassResourceInterface;

/****************************************************************************/
/* php bin/console debug:router                                             */
/* get_greetings_greetings    GET      ANY      ANY    /greetings/greetings.{_format} */
/* put_greetings_hello        PUT      ANY      ANY    /greetings/hello.{_format} */
/* curl -X GET -H "Accept:application/json" https://snowyday-man.c9users.io/web/app_dev.php/greetings/greetings */
/* curl -X PUT -H "Accept:application/json" https://snowyday-man.c9users.io/web/app_dev.php/greetings/hello */
/****************************************************************************/

class GreetingsController implements ClassResourceInterface
{
    public function getGreetingsAction()
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