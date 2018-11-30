<?php

namespace App\Controller;

use App\Utils\LevelClass;
use \DateTime;

use App\Entity\Groupe;
use App\Form\CreateGroupeType;
use App\Entity\GroupeMember;
use App\Form\GroupMemberType;
use App\Utils\TchatClass;
use App\Entity\Messenger;
use App\Entity\Tchat;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessengerController extends AbstractController
{

    /**
     * @Route("/messenger", name="messenger")
     */
    public function index(Request $request)
    {

        $bdd = $this->container->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        ## Tchat
        TchatClass::Tchat($request);
        $message = $em->getRepository('App:Tchat')->findAll();

        ## Level
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {
                $userid = $this->getUser()->getId();
                $user = $this->getUser();
                $level = LevelClass::showLevel($request, $userid);

                ## Messages
                $messages = $em->getRepository('App:Messenger')->findAllMessages($user);

            } else {
                $level = null;
                $messages = null;
            }

            ## Search Bar
            $anime = $em->getRepository('App:Anime')->findBy(
                array(),
                array('nom' => 'ASC')
            );

            if (isset($_POST['message']) && $_POST['destinataire'] && $_POST['message'] != null)
            {
                        $dest = $em->getRepository('App:User')->findOneByUsername($_POST['destinataire']);
                    
                        $sendMessage = new Messenger;
                        $sendMessage->setDestinataire($dest);
                        $sendMessage->setExpediteur($user);
                        $sendMessage->setMessage($_POST['message']);
                        $sendMessage->setDate(new \datetime('now'));

                        $em->persist($sendMessage);
                        $em->flush();
                
                }

        return $this->render('messenger/index.html.twig', ['message' => $message, 'level' => $level, 'anime' => $anime, 'messages' => $messages
        ]);
    }
}
