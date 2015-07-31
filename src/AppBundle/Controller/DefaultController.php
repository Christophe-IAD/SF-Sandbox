<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example/{id}", requirements={"id" = "\d+"}, name="homepage")
     */
    public function indexAction(Product $product, Request $request)
    {
        /*$product = new Product();

        $product->setName('Sponge');
        $product->setPrice('4.99');
        $product->setDescription('A sponge that will clean everything ... don\'t use on your wife.');

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($product);
        $em->flush();*/

       /* $product = $this->getDoctrine()->getRepository('AppBundle:Product')->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'Aucun produit trouvé pour cet id : '.$id
            );
        }*/

        /*$product = $this->getDoctrine()->getRepository('AppBundle:Product');
        $product->findAllOrderedByName();*/

//        var_dump($product);

        /*$em = $this->getDoctrine()->getEntityManager();
        $em->remove($product);
        $em->flush();*/

        return $this->render('default/index.html.twig', array(
            'product'   => $product
        ));
    }
}
