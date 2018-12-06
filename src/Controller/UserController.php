<?php

namespace App\Controller;
use App\Entity\User;
use App\Entity\Images;
use App\Entity\Groupe;

use App\Form\CreateGroupeType;
use App\Entity\GroupeMember;
use App\Form\GroupMemberType;
use App\Form\UploadImageType;
use App\Form\UserImageType;
use App\Form\UserCouvertureType;

use App\Utils\TchatClass;
use App\Utils\LevelClass;
use App\Entity\Tchat;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user/{id}", name="user")
     */
    public function Profile(Request $request, $id)
    {
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {
                
                $bdd = $this->container->get('security.token_storage')->getToken()->getUser();
                $db = $this->getDoctrine()->getManager();

                ## Tchat
                TchatClass::Tchat($request);
                $message = $db->getRepository('App:Tchat')->findAll();

                ## Level
                if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
                    {
                        $user = $this->getUser()->getId();
                        $level = LevelClass::showLevel($request, $user);
                    } else {
                        $level = null;
                    }

                ## Search Bar
                $anime = $db->getRepository('App:Anime')->findBy(
                    array(),
                    array('nom' => 'ASC')
                );


                $user = new User();
                $user = $db->getRepository(User::Class)->findOneById($id);
                
                return $this->render('user/index.html.twig', [
                    'message' => $message,
                    'anime' => $anime,
                    'level' => $level,
                    'user' => $user,
                    'me' => $bdd,
                    'id' => $id
                    ]);
            }
            else {
                $url = "airi.ovh";
                return $this->redirect($url);
            }
    }


    /**
     * @Route("/profile/gallery", name="gallery")
     */
    public function showImage(Request $request)
    {
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {
                
                $user = $this->container->get('security.token_storage')->getToken()->getUser();
                $db = $this->getDoctrine()->getManager();

                ## Tchat
                TchatClass::Tchat($request);
                $message = $db->getRepository('App:Tchat')->findAll();

                ## Level
                if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
                    {
                        $userid = $this->getUser()->getId();
                        $level = LevelClass::showLevel($request, $userid);
                    } else {
                        $level = null;
                    }

                ## Search Bar
                $anime = $db->getRepository('App:Anime')->findBy(
                    array(),
                    array('nom' => 'ASC')
                );
                
                ## show image
                $image = $user->getImage();
                
                return $this->render('user/show-image.html.twig', [
                    'message' => $message,
                    'anime' => $anime,
                    'level' => $level,
                    'image' => $image
                    ]);
            }
            else {
                $url = "airi.ovh";
                return $this->redirect($url);
            }
    }

    /**
     * @Route("/profile/set/image", name="add_episode")
     */
    public function setImage(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();

        ## tchat
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

        ## Check Connexion
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {
                ## Get user info
                $bdd = $this->container->get('security.token_storage')->getToken()->getUser();
                $nom = $bdd->getUsername();
                $user = $em->getRepository('App:User')->findOneById($bdd->getId());

                $form = $this->createForm(UserImageType::class, $user);

                ## Check form
                if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
                    {
                        $em->persist($user);
                        $em->flush();
                    }
            }
            else {
                return $this->redirect('http://airi.ovh');
            }
        return $this->render('user/set-image.html.twig', ['form' => $form->createView(),
         'message' => $message, 'anime' => $anime, 'level' => $level]);
    }
    /**
     * @Route("/profile/set/couverture", name="add_couverture")
     */
    public function setCouverture(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();

        ## tchat
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

        ## Check Connexion
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {
                ## Get user info
                $bdd = $this->container->get('security.token_storage')->getToken()->getUser();
                $nom = $bdd->getUsername();
                $user = $em->getRepository('App:User')->findOneById($bdd->getId());

                $form = $this->createForm(UserCouvertureType::class, $user);

                ## Check form
                if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
                    {
                        $em->persist($user);
                        $em->flush();
                    }
            }
            else {
                return $this->redirect('http://airi.ovh');
            }
        return $this->render('user/set-couverture.html.twig', ['form' => $form->createView(),
         'message' => $message, 'anime' => $anime, 'level' => $level]);
    }

}
