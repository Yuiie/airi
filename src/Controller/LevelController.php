<?php

namespace App\Controller;

use App\Utils\TchatClass;
use App\Utils\LevelClass;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LevelController extends AbstractController
{

    /**
     * @Route("/game", name="game")
     */
    public function game(Request $request)
    {
        return $this->render('level/index.html.twig', []);
    }

    /**
     * @Route("/level", name="level")
     */
    public function level(Request $request)
    {
        LevelClass::addLevel($request);

        $level = LevelClass::showLevel($request);

        $message = "";
        $anime = "";

        return $this->render('level/print-level.html.twig', [
            'message' => $message, 'anime' => $anime, 'level' => $level
        ]);
    }

}
