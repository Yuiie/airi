<?php

namespace App\Utils;

use App\Form\TchatType;
use App\Entity\Tchat;

use Doctrine\ORM\EntityManager;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;


class TchatClass
{
    protected $requestStack;
    
    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
        //$request = $requestStack->getCurrentRequest();
    }

    /**
     * @var ObjectManager
     */
    private static $em;

    /**
     * @param ObjectManager $manager
     */
    public static function setObjectManager(ObjectManager $manager)
    {
        self::$em = $manager;
    }


    public function Tchat($request)
    {
        $tchat = new Tchat();

        if ($request->isMethod('POST')){
            if (isset($_POST['p']) && $_POST['p'] != NULL){
                $message = $_POST['p'];
                if ($message != NULL){   
                    $tchat->setNom("okllik");
                    $tchat->setMessage($message);
                    self::$em->persist($tchat);
                    self::$em->flush();
                }
            }
        }
    }


     /*
      Route("/tchat", name="tchat")
      public function tchat(Request $request)
      {
          $em = $this->getDoctrine()->getManager();
          $tchat = new Tchat();
          
          if ($request->isMethod('POST')){
              $message = $_POST['p'];
              
              $tchat->setNom("ok");
              $tchat->setMessage($message);
              $em->persist($tchat);
              $em->flush();
            }
            return $this->render('tchat/tchat.html.twig');
            
        }
        */
}