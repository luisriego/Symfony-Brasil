<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Author;
use AppBundle\Entity\Evento;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/blog")
 */
class BlogController extends Controller
{
    /**
     * @Route("/", name="blog-index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Post')->findPosts();

        return $this->render(':blog:blog.html.twig', array(
            'posts' => $posts,
        ));
    }

    /**
     * @Route("/{slug}", name="post-model")
     */
    public function PostAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Post')->findPosts();
        $post = $em->getRepository('AppBundle:Post')->findPost($slug);

        return $this->render('blog/blog.model.html.twig', array(
            'posts' => $posts,
            'post' => $post,
        ));
    }

    /**
     * @Route("/estudo-de-casos/", name="blog-case-studies")
     */
    public function caseStudiesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Post')->findCaseStudies();

        return $this->render('blog/blog.html.twig', array(
            'posts' => $posts,
        ));
    }

    /**
     * @Route("/noticias-da-semana/", name="blog-a-week")
     */
    public function aWeekOfAction()
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Post')->findCaseAWeek();

        return $this->render('blog/blog.html.twig', array(
            'posts' => $posts,
        ));
    }

    /**
     * @Route("/eventos-no-brasil/", name="blog-brasil-events")
     */
    public function brasilEventsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $publicar = $em->getRepository('AppBundle:Post')->findEvents();
        $nao_publicar = $em->getRepository('AppBundle:Post')->findEventsSemPublicar();

        return $this->render('blog/brasil_events.html.twig', array(
            'pubicar'    => $publicar,
            'noPublicar' => $nao_publicar,
        ));
    }

    /**
     * @Route("/formulario-eventos-no-brasil/", name="blog-brasil-events-form")
     */
    public function brasilEventsFormAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
//        $posts = $em->getRepository('AppBundle:Post')->findCaseAWeek();
        $evento = new Evento();
        $form = $this->createForm('AppBundle\Form\EventoType', $evento);
        $form->handleRequest($request);
        $author = new Author();
        $usuario = $this->getUser()->getNomeCompleto();
        $author = $em->getRepository('AppBundle:Post')->findCaseAWeek();
        dump($usuario);

        if ($form->isSubmitted() && $form->isValid()) {
            $evento->setNoBrasil(true);
            $evento->setAuthor($usuario);

            $em->persist($evento);

            $em->flush();
        }

        return $this->render('blog/brasil_events_form.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
