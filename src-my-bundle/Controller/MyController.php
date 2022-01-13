<?php

namespace MyBundle\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;

class MyController extends AbstractController
{
    public function __construct(private RouterInterface $router)
    {

    }
    public function index(Request $request, EntityManagerInterface $em) : Response
    {
        return $this->render('base.html.twig');
    }
}
