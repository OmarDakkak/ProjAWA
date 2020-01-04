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
use App\Form\EtudiantType;

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
        
        // $Etudiant->setCNE("Z141213131")
        //     ->setNom("Malek")
        //     ->setPrenom("Jouhayna")
        //     ->setCIN("Z521409")
        //     ->setTel("0666063211")
        //     ->setDateNaiss("22-08-1998")
        //     ->setAdresse("44, Bloc 5, Hay Al Andalouss, Taza")
        //     ->setNiveau("GI2")
        //     ->setIdE(11);
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
     * @Route("/ajout-Etudiant", name="ajout-Etudiant")
     * @Route("/etudiants/{id}/edit-Etudiant", name="edit-Etudiant")
     */
    public function form(Etudiants $etudiant=null,Request $request)
    {
        if(!$etudiant){
            $etudiant = new Etudiants();
        }

        $manager = $this->getDoctrine()->getManagerForClass(Etudiants::class);

        $form = $this->createForm(EtudiantType::class,$etudiant);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($etudiant);
            $manager->flush();
            return $this->redirectToRoute('ajout-Etudiant',['id' => $etudiant->getId()]);
        }
        return $this->render('etudiant/ajout.html.twig', [
            'formEtudiant' => $form->createView(),
            'editMode' => $etudiant->getId() !==null
        ]);
    }
     /**
     * @Route("/etudiants/{slug}-{id_e}", name="etudiant.show", requirements={"slug": "[a-z0-9\-]*"})
     * @return Response
     */
    public function show(Etudiants $etudiant) {
        // $etudiant = $this->repository->find($id);
        return $this->render('etudiant/show.html.twig', [
            'etudiant' => $etudiant, 
            'current_menu' => 'etudiants'
        ]);
    }
}