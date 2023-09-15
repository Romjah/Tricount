<?php

namespace App\Controller;

use App\Entity\Calcul;
use App\Entity\Group;
use App\Form\CalculType;
use App\Services\CalculService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

#[Route('/calcul')]
class CalculController extends AbstractController
{
    private $twig;
    private $calculService;
    private $entityManager;


    /**
     * ServiceController constructor
     * @param CalculService $calculService
     * 
     */

    public function __construct(Environment $twig, CalculService $calculService, EntityManagerInterface $entityManager) 
    { 
        $this->twig = $twig;
        $this->calculService = $calculService;
        $this->entityManager = $entityManager;
    }
   
    
    #[Route('/{group}', name: 'app_calcul_index', methods: ['GET'])]
    public function index($group)
    {
         
        $em = $this->entityManager->getRepository(Group::class);
        $group = $em->findOneById($group);
        $content = $this->twig->render('calcul/index.html.twig', ['calcul'=> $this->calculService->calcul($group)]);
        return new Response($content);
    }






    #[Route('/new', name: 'app_calcul_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $calcul = new Calcul();
        $form = $this->createForm(CalculType::class, $calcul);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($calcul);
            $entityManager->flush();

            return $this->redirectToRoute('app_calcul_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('calcul/new.html.twig', [
            'calcul' => $calcul,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_calcul_show', methods: ['GET'])]
    public function show(Calcul $calcul): Response
    {
        return $this->render('calcul/show.html.twig', [
            'calcul' => $calcul,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_calcul_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Calcul $calcul, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CalculType::class, $calcul);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_calcul_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('calcul/edit.html.twig', [
            'calcul' => $calcul,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_calcul_delete', methods: ['POST'])]
    public function delete(Request $request, Calcul $calcul, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$calcul->getId(), $request->request->get('_token'))) {
            $entityManager->remove($calcul);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_calcul_index', [], Response::HTTP_SEE_OTHER);
    }
}
