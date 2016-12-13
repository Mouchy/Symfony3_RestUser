<?php

namespace SD\SnowydayBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations as FOSRestBundleAnnotations;
use  SD\SnowydayBundle\Entity\Hello;

/****************************************************************************/
/* php bin/console debug:router                                             */
/* hello_greetings            GET      ANY      ANY    /greetings/hello.{_format} */
/* curl -X PUT -H "Accept:application/json" https://snowyday-man.c9users.io/web/app_dev.php/greetings/hello */
/****************************************************************************/

/**
 * @FOSRestBundleAnnotations\View()
 */

class GreetingsController implements ClassResourceInterface
{
    public function helloAction()
    {
         $identite = array(
          'nom' => 'getHelloAction', 
          'Protcole' => 'GET', 
          'age' => 19, 
          'estEtudiant' => true
        );
        return new Hello();
        //return array('identite' => $identite);
    }
}