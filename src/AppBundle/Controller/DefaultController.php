<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contador;
use AppBundle\Form\ContadorType;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\ContatoType;
use AppBundle\Entity\Contato;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $usuario = null;
        // Identificar o usuario se registrado
        $securityContext = $this->container->get('security.authorization_checker');
        if ($securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
            $usuario = $this->getUser();
        }

        $destacado = $em->getRepository('AppBundle:Evento')->findDestacado();
        $eventos = $em->getRepository('AppBundle:Evento')->findDestacados();
        $treinos = $em->getRepository('AppBundle:Treinamento')->findTreinos();
        $posts = $em->getRepository('AppBundle:Post')->findPosts(3);

        // replace this example code with whatever you need
        return $this->render(':menu:inicio.html.twig', [
            'destacado' => $destacado,
            'eventos'   => $eventos,
            'usuario'   => $usuario,
            'treinos'   => $treinos,
            'posts'     => $posts,
        ]);
    }

    /**
     * @Route("/download", name="download")
     */
    public function downloadAction()
    {
        // replace this example code with whatever you need
        return $this->render(':menu:download.html.twig');
    }

    /**
     * @Route("/contato", name="contato")
     */
    public function contactAction(Request $request)
    {
        $contato =  new Contato();
        $form = $this->createForm(ContatoType::class, $contato);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $contato->setSlug('sluggable');
            $em = $this->getDoctrine()->getManager();
            $em->persist($contato);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render(':menu:contato.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/num-relance", name="num-relance-simple")
     */
    public function relanceAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':sidebar:num-relance.html.twig', array(
            'prefijo' => 'what'
        ));
    }

    /**
     * @Route("/get-certification", name="get-certification")
     */
    public function getCertification(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $cont = new Contador();

        $cont->setIp($request->getClientIp());
        $cont->setTipo('Get certification');
        $em->persist($cont);
        $em->flush();

        $referer = $request->headers->get('referer');

        if ($referer == NULL) {
            $url = $this->router->generate('fallback_url');
        } else {
            $url = $referer;
        }

        return new RedirectResponse($url);
    }

    /**
     * @Route("/gostaria-em-portugues", name="video-instalar")
     */
    public function VideoInstall(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $cont = new Contador();

        $cont->setIp($request->getClientIp());
        $cont->setTipo('Gostaria em Português');
        $em->persist($cont);
        $em->flush();

        $referer = $request->headers->get('referer');

        if ($referer == NULL) {
            $url = $this->router->generate('fallback_url');
        } else {
            $url = $referer;
        }

        return new RedirectResponse($url);
    }

}
