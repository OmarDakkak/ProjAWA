<?php
namespace App\Controller;

use App\Entity\Etudiants;
use App\Entity\EtudiantSearch;
use App\Form\EtudiantSearchType;
use App\Repository\EtudiantsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController{
    /**
     * @var EtudiantsRepository
     */
    private $repository;

    public function __construct(EtudiantsRepository $repository)
    {
        $this->repository = $repository;
    }



    /**
     * @Route("/etudiants", name="etudiant.index")
     * @return Response;
     */ 
    public function index(Request $request):Response {
        // $Etudiant = new Etudiants();
        
        // $Etudiant->setCNE("Z141283456")
        //     ->setNom("Bendahan Cohen")
        //     ->setPrenom("Omar")
        //     ->setCIN("Z608298")
        //     ->setTel("0666063087")
        //     ->setDateNaiss("21-06-1998")
        //     ->setAdresse("42, Bloc 4, Hay Al Andalouss, Taza")
        //     ->setNiveau("GI2")
        //     ->setIdE(10);
        // $em = $this->getDoctrine()->getManager();
        // $em->persist($Etudiant);
        // $em->flush();
        $search = new EtudiantSearch();

        $form = $this->createForm(EtudiantSearchType::class, $search);
        // $form->handleRequest($request);



        $repository = $this->getDoctrine()->getRepository(Etudiants::class);
        
        $Etudiants = $this->repository->findByFilter($search);
        // $Etudiants = $this->repository->findAll();
        return $this->render('etudiant/index.html.twig', [
            'current_menu' => 'etudiants',
            'Etudiants' =>$Etudiants,
            'form'  => $form->createView()
        ]);
    }

    /**
     * @Route("/etudiants/{slug}-{id}", name="etudiant.show", requirements={"slug": "[a-z0-9\-]*"})
     * @return Response
     */
    public function show($slug, $id) {
        $Etudiant = $this->repository->find($id);
        return $this->render('etudiant/show.html.twig', [
            'Etudiant' => $Etudiant, 
            'current_menu' => 'etudiants'
        ]);
    }
}