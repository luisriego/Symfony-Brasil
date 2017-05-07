<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/que-e-symfony")
 */
class SidebarController extends Controller
{
    /**
     * @Route("/num-relance", name="num-relance")
     */
    public function relanceAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':sidebar:num-relance.html.twig', array(
            'prefijo' => 'what'
        ));
    }

    /**
     * @Route("/componentes-symfony", name="componentes")
     */
    public function componentsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':sidebar:componentes.html.twig', array(
            'prefijo' => 'what'
        ));
    }

    /**
     * @Route("/projetos-utilizando-symfony", name="projects-using")
     */
    public function projectsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':sidebar:projects-using.html.twig', array(
            'prefijo' => 'what'
        ));
    }

    /**
     * @Route("/marcas-e-licencas", name="trademarks")
     */
    public function trademarksAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':sidebar:trademark.html.twig', array(
            'prefijo' => 'what'
        ));
    }

    /**
     * @Route("/estudo-de-casos", name="case-studies")
     */
    public function caseAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':sidebar:casos.html.twig', array(
            'prefijo' => 'what'
        ));
    }

    /**
     * @Route("/logo", name="logo")
     */
    public function logoAction()
    {
        // replace this example code with whatever you need
        return $this->render(':sidebar:logo.html.twig', array(
            'prefijo' => 'what'
        ));
    }

    /**
     * @Route("/symfony-5-minutos", name="5-minutos")
     */
    public function cincoMinutosAction()
    {
        // replace this example code with whatever you need
        return $this->render(':que-e-symfony:5minutos.html.twig', array(
            'prefijo' => 'what'
        ));
    }

    /**
     * @Route("/porque-usar-framework", name="porque-usar")
     */
    public function porqueAction()
    {
        // replace this example code with whatever you need
        return $this->render(':que-e-symfony:porque-usar.html.twig', array(
            'prefijo' => 'what'
        ));
    }

    /**
     * @Route("/quando-usar-framework", name="quando-usar")
     */
    public function quandoAction()
    {
        // replace this example code with whatever you need
        return $this->render(':que-e-symfony:quando-usar.html.twig', array(
            'prefijo' => 'what'
        ));
    }

    /**
     * @Route("/6-razoes-para-usar-symfony", name="6-razoes")
     */
    public function seisRazoesAction()
    {
        // replace this example code with whatever you need
        return $this->render(':que-e-symfony:seis-razoes.html.twig', array(
            'prefijo' => 'what'
        ));
    }

    /**
     * @Route("/beneficios-tecnologicos-do-symfony-em-6-licoes-faceis", name="beneficios")
     */
    public function beneficiosAction()
    {
        // replace this example code with whatever you need
        return $this->render(':que-e-symfony:beneficios.html.twig', array(
            'prefijo' => 'what'
        ));
    }

    /**
     * @Route("/10-criterios-para-a-escolha-de-um-framework", name="criterios")
     */
    public function criteriosAction()
    {
        // replace this example code with whatever you need
        return $this->render(':que-e-symfony:criterios.html.twig', array(
            'prefijo' => 'what'
        ));
    }
}
