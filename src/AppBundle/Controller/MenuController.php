<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    /**
     * @Route("/que-e-symfony", name="que-e-symfony")
     */
    public function wathAction()
    {

        // replace this example code with whatever you need
        return $this->render(':menu:que-e-symfony.html.twig', array(
            'prefijo' => 'what',
        ));
    }

    /**
     * @Route("/mapa-do-caminho", name="roadmap")
     */
    public function roadmapAction()
    {
        $json = file_get_contents('https://symfony.com/roadmap.json?version=all.json');
        $obj = json_decode($json);
//        dump($json, $obj);
        // replace this example code with whatever you need
        return $this->render(':menu/submenu:roadmap.html.twig', [
            'roadmap' => $obj,
        ]);
    }

}
