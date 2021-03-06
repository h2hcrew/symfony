<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ToDoListController extends AbstractController
{
   /**
    * @Route("/", name="to_do_list")
    */
    public function index(){
        return $this->render('index.html.twig');
    }

     /**
    * @Route("/create", name="create_task")
    */
    public function create(){
        exit('to do: create a new task!');
    }
    
}






// #[Route('/', name: 'to_do_list')]
// public function index(): Response
// {
//     return $this->render('index.html.twig');
// }
