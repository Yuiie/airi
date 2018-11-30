<?php

namespace App\Controller;

use App\Entity\Groupe;
use App\Form\CreateGroupeType;
use App\Entity\GroupeMember;
use App\Form\GroupMemberType;
use App\Utils\TchatClass;
use App\Utils\LevelClass;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HistoriqueController extends AbstractController
{

    public function Streaming($path, $id, $ep, $nom, $content, $image)
    {
        $name = "historique";

        if (isset($_COOKIE[$name])){
            $historique = unserialize($_COOKIE[$name]);
            
            $i = 0;
            $m = "";
            foreach ($historique as $m)
            { 
                $i++;
            }
            $a = array();
            $a[0] = $path;
            $a[1] = $id;
            $a[2] = $ep;
            $a[3] = $nom;
            $a[4] = $content;
            $a[5] = $image;
            $historique[$i] = $a;
            setcookie($name, serialize($historique),strtotime( '+30 days' ),"/",$_SERVER['SERVER_NAME']);
        } else {
            $historique = array();
            setcookie($name, serialize($historique),strtotime( '+30 days' ),"/",$_SERVER['SERVER_NAME']);
        }
        return new Response("");
    }

    /**
     * @Route("/historique/stream", name="historique-streaming")
     */
    public function showStream(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();

        ## Tchat
        TchatClass::Tchat($request);
        $message = $em->getRepository('App:Tchat')->findAll();

        ## Level
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {
                $user = $this->getUser()->getId();
                $level = LevelClass::showLevel($request, $user);
            } else {
                $level = null;
            }

        ## Search Bar
        $anime = $em->getRepository('App:Anime')->findBy(
            array(),
            array('nom' => 'ASC')
        );



        $name = "historique";

        if (isset($_COOKIE[$name])){
            $historique = unserialize($_COOKIE[$name]);
        } else {
            $historique = NULL;
        }

        return $this->render('historique/show-stream.html.twig', [
            'historique' => $historique, 'message' => $message, 'anime' => $anime, 'level' => $level
        ]);
    }
}
