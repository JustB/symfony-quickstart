<?php

namespace Justb\RecipeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JustbRecipeBundle:Default:index.html.twig', array('name' => $name));
    }
}
