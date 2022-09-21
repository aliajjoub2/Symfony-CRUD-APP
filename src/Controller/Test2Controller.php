<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class Test2Controller extends AbstractController
{
    #[Route('/test2', name: 'app_test2')]
    public function index(): Response
    {
        return $this->render('test2/index.html.twig', [
            'controller_name' => 'Test2Controller',
        ]);
    }

    #[Route('/test3/{name}', name: 'app_test3')]
    public function test3(Request $info): Response
    
    {
       $name= $info->get('name');
    
        return $this->render('test3/test3.html.twig', [
            'firsr_name'=> 'enter our first name',
            'last_name'=> 'enter our last name',
        ]);
    }
    
    #[Route('/test4', name: 'app_test3')]
    public function test4(): Response
    
    {
     
    
        return $this->render('test3/test4.html.twig', [
            'list'=> ['one','two','three','four','five'],
            
        ]);
    }
}
