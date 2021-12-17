<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'default')]
    public function index(Request $request): Response
    {
        $session = $request->getSession();
        $session->set('test','test4');

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController::index',
        ]);
    }
    #[Route('/test', name: 'test')]
    public function test(Request $request): Response
    {
        $session = $request->getSession();
        $test = $session->get('test','err');
        
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController::test ' . $test,
        ]);
    }
}
