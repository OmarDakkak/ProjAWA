<?php
namespace App\Controller;

use App\Entity\Note;
use App\Entity\NoteSearch;
use App\Repository\NoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\NoteSearchType;
use App\Form\NoteType;

class NoteController extends AbstractController{
    /**
     * @var NoteRepository
     */
    private $repository;

    public function __construct(NoteRepository $repository)
    {
        $this->repository = $repository;
    }



    /**
     * @Route("/note", name="note.index")
     * @return Response;
     */ 
    public function index(Request $request):Response {
       
        $note = new NoteSearch();

        $form = $this->createForm(NoteSearchType::class, $note);
        // $form->handleRequest($request);



        $repository = $this->getDoctrine()->getRepository(Note::class);
        
        $Note = $this->repository->findAll();
        // $Note = $this->repository->findAll();
        return $this->render('note/index.html.twig', [
            'current_menu' => 'Note',
            'notes' =>$Note,
            'form'  => $form->createView()
        ]);
    }

   
    /**
     * @Route("/ajout-Note", name="ajout-Note")
     * @Route("/note/{id}/edit-Note", name="edit-Note")
     */
    public function form_add_modify(Note $Note=null,Request $request)
    {
        if(!$Note){
            $Note = new Note();
        }

        $manager = $this->getDoctrine()->getManagerForClass(Note::class);

        $form = $this->createForm(NoteType::class,$Note);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($Note);
            $manager->flush();
            return $this->redirectToRoute('ajout-Note',['id' => $Note->getId()]);
        }
        return $this->render('note/ajout.html.twig', [
            'formNote' => $form->createView(),
            'editMode' => $Note->getId() !==null
        ]);
    }
     /**
     * @Route("/ajout-Note", name="ajout-Note")
     * @Route("/Note/{id}/edit-Note", name="edit-Note")
     */
    public function form(Note $Note=null,Request $request)
    {
        if(!$Note){
            $Note = new Note();
        }

        $manager = $this->getDoctrine()->getManagerForClass(Note::class);

        $form = $this->createForm(NoteType::class,$Note);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($Note);
            $manager->flush();
            return $this->redirectToRoute('ajout-Note',['id' => $Note->getId()]);
        }
        return $this->render('note/ajout.html.twig', [
            'formNote' => $form->createView(),
            'editMode' => $Note->getId() !==null
        ]);
    }
     /**
     * @Route("/note/{slug}-{id}", name="note.show", requirements={"slug": "[a-z0-9\-]*"})
     * @return Response
     */
    public function show(Note $Note) {
        // $Note = $this->repository->find($id);
        return $this->render('note/show.html.twig', [
            'note' => $Note, 
            'current_menu' => 'Note'
        ]);
    }
}