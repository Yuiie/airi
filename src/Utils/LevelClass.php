<?php

namespace App\Utils;

use App\Form\TchatType;
use App\Entity\Tchat;

use Doctrine\ORM\EntityManager;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;


class LevelClass
{
    protected $requestStack;
    
    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
        $this->request = $requestStack->getCurrentRequest();
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

    public function showLevel($request, $userId)
    {
        $session = $request->getSession();
        
        $my = $session->get($userId);
        $a = json_decode($my);
        
        return ($a);
    }

    public function addLevel($request, $userId, $addexp)
    {
        $session = $request->getSession();

        $encoded_level = $session->get($userId);
        $level = json_decode($encoded_level);

        if (!isset($level->lvl) || $level->lvl == NULL) {
            $lvl = 0;
        }else {
            $lvl = $level->lvl;
        }
        if (!isset($level->exp) || $level->exp == NULL){
            $exp = 1;
        }else {
            $exp = $level->exp + $addexp;
        }
        if (!isset($level->max) || $level->max == NULL){
            $max = 100;
        }else {
            $max = $level->max;
        }
        if (!isset($level->timeout) || $level->timeout == NULL){
            $timeout = 10000;
        }else {
            $timeout = $level->timeout;
        }
        $myJSON = json_encode(array(
            'lvl' => $lvl,
            'exp' => $exp,
            'max' => $max,
            'timeout' => $timeout                
        ));

        $session->set($userId, $myJSON);
    }
}