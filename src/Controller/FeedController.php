<?php

namespace App\Controller;

use App\Entity\Groupe;
use App\Form\CreateGroupeType;
use App\Entity\GroupeMember;
use App\Form\GroupMemberType;
use App\Utils\TchatClass;
use App\Utils\LevelClass;
use App\Entity\Commentaire;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FeedController extends AbstractController
{
    public function recursiveResponse($parent, $array, $myarray)
    {
        foreach ($array as $a)
            {
                if ($a->parent == $parent)
                {
                    $i = 0;
                    foreach ($myarray as $count)
                        { 
                            $i++;
                        }
                    $myarray[$i] = $a;
                    $myarray = $this->recursiveResponse($a->id, $array, $myarray);
                }
            }
            return ($myarray);
    }

    public function showResponse($array)
    {
        $myarray = array();
        $i = 0;
        foreach ($array as $com)
            {
                if ($com->parent == 0)
                {
                    $i = 0;
                    foreach ($myarray as $count)
                        { 
                            $i++;
                        }
                    $myarray[$i] = $com;
                    $myarray = $this->recursiveResponse($com->id, $array, $myarray);
                }
            }
            return ($myarray);
    }

    /**
     * @Route("/dbfeed", name="db feed")
     */
    public function dbFeed(Request $request)
    {
        $user = $this->getUser()->getUsername();
        $msg = $request->request->get('msg');
        $parent = $request->request->get('parent');
        
        $feed = new Commentaire();
        $db = $this->getDoctrine()->getManager();
        
        $feed->setPseudo($user);
        $feed->setMessage($msg);
        $feed->setUrl("e");
        $feed->setParent($parent);
        $feed->setDate(new \datetime('now'));
        $db->persist($feed);
        $db->flush();

        $resp = new Response("Message bien envoyé");
        return $resp;
        
    }

    /**
     * @Route("/feed", name="feed")
     */
    public function index(Request $request)
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

        $reqFeed = $em->getRepository('App:Commentaire')->findBy(array(), array('id' => 'DESC'));
        $arrayFeed = $this->showResponse($reqFeed);

        return $this->render('feed/index.html.twig', [
            'message' => $message, 'anime' => $anime, 'level' => $level, 'arrayFeed' => $arrayFeed
        ]);
    }
}
