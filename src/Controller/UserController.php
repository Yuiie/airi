<?php

namespace App\Controller;
use App\Entity\User;
use App\Entity\Images;
use App\Entity\Groupe;
use App\Form\CreateGroupeType;
use App\Entity\GroupeMember;
use App\Form\GroupMemberType;
use App\Form\UploadImageType;
use App\Utils\TchatClass;
use App\Utils\LevelClass;
use App\Entity\Tchat;

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
     * @Route("/profile/add-image", name="profile-add-image")
     */
    public function addImage(Request $request)
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
                
                ## set image
                $image = new Images();
                $form = $this->createForm(UploadImageType::class, $image);
                $form->handleRequest($request);

                if ($form->isSubmitted() && $form->isValid()) {
                    // $file stores the uploaded PDF file
                    /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                    $file = $image->getImage();
        
                    $fileName = md5(uniqid()).'.'.$file->guessExtension();
                    try {
                        $file->move(
                            $this->getParameter('img_user'),
                            $fileName
                        );
                    } catch (FileException $e) {
                    }
        
                    $image->setImage($fileName);
                    $image->setPseudo($user);
                    $image->setDate(new \datetime('now'));
                    $db->persist($image);
                    $db->flush();

                    return $this->redirect($this->generateUrl('index'));
                }
                ##
                
                return $this->render('user/image.html.twig', [
                    'message' => $message,
                    'anime' => $anime,
                    'level' => $level,
                    'form' => $form->createView()
                    ]);
            }
            else {
                $url = "airi.ovh";
                return $this->redirect($url);
            }
    }
}
