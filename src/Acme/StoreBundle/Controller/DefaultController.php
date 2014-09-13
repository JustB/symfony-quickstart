<?php

namespace Acme\StoreBundle\Controller;

use Acme\StoreBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeStoreBundle:Default:index.html.twig', array('name' => $name));
    }

    public function createAction()
    {
        $product = new Product();
        $product->setName('Stampo per dolci');
        $product->setPrice('34.10');
        $product->setDescription('Uno stampo per dolci grande quanto una casa');

        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return new Response('Created product id ' . $product->getId());
    }

    public function showAction($id)
    {
        $product = $this->getDoctrine()->getRepository('AcmeStoreBundle:Product')->find($id);
        if(!$product) {
            throw $this->createNotFoundException('No product for id ' . $id);
        }
        return $this->render('AcmeStoreBundle:Default:show.html.twig', array('product' => $product));
    }
}
