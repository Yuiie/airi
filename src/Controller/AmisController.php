<?php

namespace App\Controller;

use App\Utils\TchatClass;
use App\Utils\LevelClass;

use App\Entity\Amis;
use App\Entity\Anime;
use App\Entity\Episode;
use App\Entity\Groupe;
use App\Entity\Images;
use App\Entity\Video;
use App\Entity\Tchat;

use App\Form\AddAnimeType;
use App\Form\AddEpisodeType;
use App\Form\VideoType;
use App\Form\TchatType;
use App\Form\UploadImageType;

use App\Utils\AnimeManager;
use App\Form\CreateGroupeType;

use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class AmisController extends AbstractController
{

    public function __construct(ObjectManager $objectManager)
     {
         TchatClass::setObjectManager($objectManager);
     } 

     /**
     * @Route("/amis/cancel-request", name="cancel-friend-req")
     */
    public function removeRequestAmis(Request $request)
    {
        $db = $this->getDoctrine()->getManager();
        $dest = $request->request->get('dest');
        
        $req = $db->getRepository('App:Amis')->find($dest);
        $db->remove($req);
        $db->flush();
        return new Response("Demande d'amis supprimé");
    }

    /**
     * @Route("/amis/accept", name="accept-friend")
     */
    public function acceptFriend(Request $request)
    {
        $db = $this->getDoctrine()->getManager();
        
        $dest = $request->request->get('dest');

        $amis = $db->getRepository('App:Amis')->find($dest);
        
        $amis->setEnable(1);
        $amis->setDate(new \datetime('now'));
        $db->persist($amis);
        $db->flush();

        return new Response("Message bien envoyé");
    }

    /**
     * @Route("/dbamis", name="db-amis")
     */
    public function dbAmis(Request $request)
    {
        $db = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $dest = $request->request->get('dest');
        $dest = $db->getRepository('App:User')->findOneByUsername($dest);

        $check = $db->getRepository('App:Amis')->findBy(
            array('req' => $user, 'dest' => $dest),
            array('id' => 'ASC')
        );
        
        if ($dest != null && $check == null) {

            $amis = new Amis();
            $amis->setReq($user);
            $amis->setDest($dest);
            $amis->setEnable(0);
            $amis->setDate(new \datetime('now'));
            $db->persist($amis);
            $db->flush();   
        }
        return new Response("Message bien envoyé");
    }

    /**
     * @Route("/amis/ajouter", name="add-amis")
     */
    public function addAmis(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        ## Tchat
        TchatClass::Tchat($request);
        $message = $em->getRepository('App:Tchat')->findAll();

        ## Level
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {
                $user_id = $this->getUser()->getId();
                $user = $this->getUser();
                $level = LevelClass::showLevel($request, $user_id);
            } else {
                $user = null;
                $level = null;
            }

        ## Search Bar
        $anime = $em->getRepository('App:Anime')->findBy(
            array(),
            array('nom' => 'ASC')
        );

        $all_user = $em->getRepository('App:User')->findAll();
        $friendReq = $em->getRepository('App:Amis')->findBy(
            array('dest' => $user, 'enable' => '0'),
            array('id' => 'ASC')
        );
        $friend = $em->getRepository('App:Amis')->findBy(
            array('req' => $user, 'enable' => '0'),
            array('id' => 'ASC')
        );


        return $this->render('amis/add-friend.html.twig', [
            'message' => $message,
            'anime' => $anime,
            'level' => $level,
            'user' => $user,
            'users' => $all_user,
            'friendReq' => $friendReq,
            'friend' => $friend
        ]);
    }

    /**
     * @Route("/amis", name="my-friend")
     */
    public function Friend(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        ## Tchat
        TchatClass::Tchat($request);
        $message = $em->getRepository('App:Tchat')->findAll();

        ## Level
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {
                $user_id = $this->getUser()->getId();
                $user = $this->getUser();
                $level = LevelClass::showLevel($request, $user_id);
            } else {
                $user = null;
                $level = null;
            }

        ## Search Bar
        $anime = $em->getRepository('App:Anime')->findBy(
            array(),
            array('nom' => 'ASC')
        );

        $friend = $em->getRepository('App:Amis')->findBy(
            array('req' => $user, 'enable' => '1'),
            array('id' => 'ASC')
        );
        $friend1 = $em->getRepository('App:Amis')->findBy(
            array('dest' => $user, 'enable' => '1'),
            array('id' => 'ASC')
        );


        return $this->render('amis/friend.html.twig', [
            'message' => $message,
            'anime' => $anime,
            'level' => $level,
            'user' => $user,
            'friend' => $friend,
            'friend1' => $friend1
        ]);
    }

    /**
     * @Route("/classement", name="classement")
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
                $user_id = $this->getUser()->getId();
                $user = $this->getUser();
                $level = LevelClass::showLevel($request, $user_id);
            } else {
                $user = null;
                $level = null;
            }

        ## Search Bar
        $anime = $em->getRepository('App:Anime')->findBy(
            array(),
            array('nom' => 'ASC')
        );

        $all_user = $em->getRepository('App:User')->findAll();

        return $this->render('amis/index.html.twig', [
            'message' => $message,
            'anime' => $anime,
            'level' => $level,
            'user' => $user,
            'users' => $all_user
        ]);
    }
}
