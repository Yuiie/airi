<?php

namespace App\Utils;

use App\Entity\Anime;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;

class AnimeManager
{
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

    /**
     * @param $path
     * @param $device_id
     * @param $user_email
     * @return Anime
     */
    public static function mangaCall()
    {
        $log = new Anime();

        $log->setImage("1");
        $log->setContent("2");
        $log->setNom("3");
        $log->setUrl("4");

        self::$em->persist($log);
        self::$em->flush();

        return ($log);
    }
}