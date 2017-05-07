<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contador;
use AppBundle\Form\ContadorType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DocumentacaoController
 * @package AppBundle\Controller
 * @Route("/doc")
 */
class DocumentacaoController extends Controller
{
    /**
     * @Route("", name="documentacao")
     */
    public function documentacaoAction()
    {

        // replace this example code with whatever you need
        return $this->render(':documentacao:doc.html.twig', array(
            'prefijo'   => 'doc',
        ));
    }

    /**
     * @Route("/contribuicao/codigo/seguranca", name="seguranca")
     */
    public function segurancaAction()
    {


        // replace this example code with whatever you need
        return $this->render(':documentacao:seguranca.html.twig', array(
            'prefijo'   => 'doc',
        ));
    }

    /**
     * @Route("/guia-rapida/panorama", name="panorama")
     */
    public function panoramaAction(Request $request)
    {
        $cont = new Contador();
        $form = $this->createFormBuilder($cont)
            ->add('save', SubmitType::class, array('label' => 'gostaria em português!'))
            ->getForm();
        $form->handleRequest($request);

//        if ($form->isSubmitted() && $form->isValid())
//        {
//            $em = $this->getDoctrine()->getManager();
////            $suma = $em->getRepository('AppBundle:Contador')->find(1);
//            $cont->setContador($cont->maisum());
//            $em->persist($cont);
//            $em->flush();
//        }

        // replace this example code with whatever you need
        return $this->render(':documentacao:panorama.html.twig', array(
            'prefijo' => 'doc',
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/artigos/{slug}", name="artigo-model")
     */
    public function artigoAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Post')->findPosts();
//        $post = $em->getRepository('AppBundle:Post')->findPost($slug);

        // replace this example code with whatever you need
        return $this->render(':documentacao:article.model.html.twig', array(
            'prefijo' => 'doc',
            'posts' => $posts,
        ));
    }

    /**
     * @Route("/bundles/como-comezar-com-fosuserbundle", name="fosuserbundle")
     */
    public function fosUserAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render(':tutoriais:fosuserbundle.html.twig', array(
            'prefijo' => 'doc',
        ));
    }

    /**
     * @Route("/guia-rapida/a-vista", name="a-vista")
     */
    public function aVistaAction()
    {
        // replace this example code with whatever you need
        return $this->render('@App/documentacao/a-vista.html.twig', array(
            'prefijo'=> 'doc'
        ));
    }

}
