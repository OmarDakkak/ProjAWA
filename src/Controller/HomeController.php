<?php
 namespace App\Controller;

use App\Repository\EtudiantsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\Annotation\Route;
 use Twig\Environment;

    class HomeController extends AbstractController{ 
        /**
        * @Route("/", name="home")
        * @return Response;
        */ 
        public function index():Response {
            
            return $this->render('Pages/home.html.twig');
        }
    }
 

//    , [
//         'Etudiants' =>$etudiants
//         ]

// $etudiants = $repository->findAll();

// * @param EtudiantsRepository $repository