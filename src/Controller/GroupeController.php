<?php

namespace App\Controller;
use App\Entity\Groupe;
use App\Form\CreateGroupeType;
use App\Entity\GroupeMember;
use App\Form\GroupMemberType;
use App\Utils\TchatClass;
use App\Utils\LevelClass;
use App\Entity\Tchat;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GroupeController extends AbstractController
{

     /**
     * @Route("/group", name="group")
     */
    public function Group(Request $request)
    {

        $bdd = $this->container->get('security.token_storage')->getToken()->getUser();
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

        $db = $this->getDoctrine()->getManager();

        ## Search Bar
        $anime = $db->getRepository('App:Anime')->findBy(
            array(),
            array('nom' => 'ASC')
        );

        $group = $db->getRepository('App:Groupe')->findAll();
        $my_group = $db->getRepository('App:GroupeMember')->findByMembre($id);
        return $this->render('groupe/group.html.twig', ['message' => $message,
            'controller_name' => 'MainController', 'listarticle' => $group, 'mygroup' => $my_group, 'anime' => $anime, 'level' => $level
        ]);
    }

     /**
     * @Route("/group/create", name="group_create")
     */
    public function CreateGroup(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $Groupe = new Groupe();
        $form = $this->createForm(CreateGroupeType::class, $Groupe);

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

        // verifie que l'utillisateur est bien connecter et recupere les data
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
        {
            // verifie que le formulaire est valide
            if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
            {
                $bdd = $this->container->get('security.token_storage')->getToken()->getUser();
                $id = $bdd->getId();

                
                $id = $this->getDoctrine()->getManager()->getRepository('App:User')->findOneById($id);
                $Groupe->setMember($id);
                $Groupe->setRank(1);
                $em->persist($Groupe);
                
                
                $Groupe_member = new GroupeMember();
                $Groupe_member->setMember($id);
                $Groupe_member->setGroupe($Groupe);
                $Groupe_member->setConfirm(1);
                $Groupe_member->setRank(1);

                $em->persist($Groupe_member);
                
                $em->flush();

                //ajouter un flashbag, oublie pas aussi dans la vue twig
                $this->get('session')->getFlashBag()->add('notice', 'Groupe créer !');
 
            }
        }
        return $this->render('groupe/create-groupe.html.twig', ['message' => $message, 'form' => $form->createView(),
         'anime' => $anime, 'level' => $level]);
    }

    /**
     * @Route("/group/apply", name="group_apply")
     */
    public function GroupMember(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $Groupe = new GroupeMember();
        $form = $this->createForm(GroupMemberType::class, $Groupe);

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

        // verifie que l'utillisateur est bien connecter et recupere les data
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
        {
            // verifie que le formulaire est valide
            if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
            {
                $bdd = $this->container->get('security.token_storage')->getToken()->getUser();
                $id = $bdd->getId();
                
                $id = $this->getDoctrine()->getManager()->getRepository('App:User')->findOneById($id);
                $Groupe->setMember($id);
                $Groupe->setConfirm(0);
                $Groupe->setRank(0);
                $em->persist($Groupe);
                $em->flush();

                //ajouter un flashbag, oublie pas aussi dans la vue twig
                $this->get('session')->getFlashBag()->add('notice', 'Vous avez postulé');
 
            }
        }
        return $this->render('groupe/group-member.html.twig', ['message' => $message, 'form' => $form->createView(),
         'anime' => $anime, 'level' => $level]);
    }

    /**
     * @Route("/group/accept", name="group_accept")
     */
    public function GroupAccept(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $Groupe = new GroupeMember();
        $group = NULL;
        $req;
        $i = 0;
        
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
        // verifie que l'utillisateur est bien connecter et recupere les data
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
        {
         
                $bdd = $this->container->get('security.token_storage')->getToken()->getUser();
                $id = $bdd->getId();

                $mygroup = $this->getDoctrine()->getManager()->getRepository('App:GroupeMember')->findByAdmin($id);
                $req = $this->getDoctrine()->getManager()->getRepository('App:GroupeMember')->findByRequest($mygroup);

                if (isset($_POST['accept']) ) {
                    $confirm = $this->getDoctrine()->getManager()->getRepository('App:GroupeMember')->findOneById($_POST['accept']);
                    $confirm->setConfirm("1");
                    $em->persist($confirm);
                    $em->flush();
                }
                if (isset($_POST['reject']) ) {
                    $confirm = $this->getDoctrine()->getManager()->getRepository('App:GroupeMember')->findOneById($_POST['reject']);
                    $em->remove($confirm);
                    $em->flush();
            }
                            
        }
        return $this->render('groupe/group-accept.html.twig', ['message' => $message, "req" => $req,
         "mygroup" => $mygroup, 'anime' => $anime, 'level' => $level]);
    }
}
