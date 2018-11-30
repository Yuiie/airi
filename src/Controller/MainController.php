<?php

namespace App\Controller;

use App\Utils\TchatClass;
use App\Utils\LevelClass;
use \DateTime;

use App\Entity\Anime;
use App\Entity\Episode;
use App\Entity\Groupe;
use App\Entity\Video;
use App\Entity\Tchat;
use App\Form\AddAnimeType;
use App\Form\AddEpisodeType;
use App\Form\VideoType;
use App\Form\TchatType;
use App\Utils\AnimeManager;
use App\Form\CreateGroupeType;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Request;



class MainController extends AbstractController
{
    
    public function __construct(ObjectManager $objectManager)
     {
         TchatClass::setObjectManager($objectManager);
     }

     public function reloadTchat(Request $request)
    {
        # get session, token and ../img/idity
        $session = $request->getSession();
        $date = new DateTime();
        $this->tchat_time = $date->getTimestamp();
        $tchat_time = $session->set('tchat_time', $this->tchat_time);

    }

     public function CountTime(Request $request)
    {
        # get session, token and ../img/idity
        $session = $request->getSession();
        $tchat_time = $session->get('tchat_time');

        # if token is not NULL check ../img/idity
        if ($tchat_time != NULL) {
            $date = new DateTime();
            $date_courante = $date->getTimestamp();
            $interval = $date_courante - $tchat_time;
            if ($interval > 15){
                $this->reloadTchat($request);
                return 1; 
            }
        }
        else{
            $this->reloadTchat($request);
            return 1;
        }
        return 0;
    }
    /**
     * @Route("/tchat", name="ma")
     */
    public function dkd(Request $request)
    {
        $db = $this->getDoctrine()->getManager();
        $message = $db->getRepository('App:Tchat')->findAll();

        return $this->render('index.html.twig', ['message' => $message]);
    }

     /**
     * @Route("/carousel", name="carousel")
     */
    public function carousel(Request $request)
    {
        return $this->render('carousel1.html.twig');
    }

    /**
     * @Route("/dbtchat", name="db tchat")
     */
    public function dbTchat(Request $request)
    {
        $user = $request->request->get('user');
        $msg = $request->request->get('msg');
        
        $tchat = new Tchat();
        $db = $this->getDoctrine()->getManager();
        
        $tchat->setNom($user);
        $tchat->setMessage($msg);
        $tchat->setDest(0);
        $db->persist($tchat);
        $db->flush();

        $resp = new Response("Message bien envoyé");
        return $resp;
        
    }


    /**
     * @Route("/", name="main")
     */
    public function index(Request $request)
    {
        ## Tchat
        TchatClass::Tchat($request);

        ## Level
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {
                $user = $this->getUser()->getId();
                LevelClass::addLevel($request, $user, 10);
                $level = LevelClass::showLevel($request, $user);
            } else {
                $level = null;
            }

        $db = $this->getDoctrine()->getManager();

        $message = $db->getRepository('App:Tchat')->findAll();

        ## Search Bar
        $anime = $db->getRepository('App:Anime')->findBy(
            array(),
            array('nom' => 'ASC')
        );

        $episode = $db->getRepository('App:Episode')->findByPage(
            $request->query->getInt('page', 1),
            8
        );
        return $this->render('main/home.html.twig', [
            'controller_name' => 'MainController', 'listarticle' => $episode, 'random' => $anime,
            'message' => $message, 'anime' => $anime, 'level' => $level
        ]);
    }

    /**
     * @Route("/Animes/{letter}", name="animes")
     */
    public function HomeAnime(Request $request)
    {
        TchatClass::Tchat($request);

        ## Level
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {
                $user = $this->getUser()->getId();
                $level = LevelClass::showLevel($request, $user);
            } else {
                $level = null;
            }
 
        $db = $this->getDoctrine()->getManager();

        $message = $db->getRepository('App:Tchat')->findAll();
        $anime = $db->getRepository('App:Anime')->findBy(
            array(),
            array('nom' => 'ASC')
        );
        
        if (isset($_POST['letter']) && $_POST['letter'] != NULL) {
            $anime = $db->getRepository('App:Anime')->recherche($nom);
        }

        return $this->render('main/All-Anime.html.twig', [
            'listanime' => $anime, 'message' => $message, 'level' => $level
        ]);
    }

    /**
     *  @Route("/Anime", name="anime")
     */
    public function Anime($id, $ep, Request $request)
    {
        TchatClass::Tchat($request);

        ## Level
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {
                $user = $this->getUser()->getId();
                $level = LevelClass::showLevel($request, $user);
            } else {
                $level = null;
            }
 
        $db = $this->getDoctrine()->getManager();
        $message = $db->getRepository('App:Tchat')->findAll();

        // afficher l'anime en fonction de son id
        $manga = $this->getDoctrine()
        ->getManager()
        ->getRepository('App:Anime')
        ->findOneById($id)
      ;

        $carousel = $db->getRepository('App:Episode')->findByAnime($id);

        $categorie = $manga->getCategorie($manga);
        ## Search Bar
        $anime = $db->getRepository('App:Anime')->findBy(
            array(),
            array('nom' => 'ASC')
        );


      $episode = $this->getDoctrine()
        ->getManager()
        ->getRepository('App:Video')
        ->findByEp($id, $ep)
      ;
        return $this->render('main/Anime.html.twig', array('id' => $id, 'article' => $manga,
                                'episode' => $episode, 'message' => $message, 'anime' => $anime, 'categorie' => $categorie,
                            'carousel' => $carousel, 'level' => $level, 'ep' => $ep));
    }

    /**
     *  @Route("/recherche", name="recherche")
     */
    public function recherche($nom)
    {

        ## Level
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {
                $user = $this->getUser()->getId();
                $level = LevelClass::showLevel($request, $user);
            } else {
                $level = null;
            }

        $db = $this->getDoctrine()->getManager();

        $episode = $db->getRepository('App:Anime')->recherche($nom);
        return $this->render('main/recherche.html.twig', ['listarticle' => $episode, 'level' => $level
        ]);
    }

    
}

       //chercher tous les episodes
        /*
        $episode = $this->getDoctrine()
      ->getManager()
      ->getRepository('App:Episode')
      ->findAll()
    ;
    */