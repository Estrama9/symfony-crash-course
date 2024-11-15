<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


//waiter: "'HomeController' aka M. Welcome"
class HomeController extends AbstractController {
    //area: "front door 'home'"
    #[Route('/', name: 'home')]
    //task: "greets people" and ask a question "Request"
    function index(Request $request): Response {
        //service/response: "greets them 'Welcome and guide them to the table with their 'name'"
        // return new Response('Hello world '. $_GET['name']);
        return new Response('Welcome ' . $request->query->get('name', 'unknow guest'));
    }
}

// class HomeController extends AbstractController
// {
    // #[Route('/home', name: 'app_home')]
    // public function index(): Response
    // {
    //     return $this->render('home/index.html.twig', [
    //         'controller_name' => 'HomeController',
    //     ]);
    // }

// }
