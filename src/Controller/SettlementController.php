<?php

namespace App\Controller;

use App\Entity\Settlement;
use App\Form\SettlementType;
use App\Repository\SettlementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/settlement')]
class SettlementController extends AbstractController
{
    #[Route('/', name: 'app_settlement_index', methods: ['GET'])]
    public function index(SettlementRepository $settlementRepository): Response
    {
        return $this->render('settlement/index.html.twig', [
            'settlements' => $settlementRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_settlement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $settlement = new Settlement();
        $form = $this->createForm(SettlementType::class, $settlement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($settlement);
            $entityManager->flush();

            return $this->redirectToRoute('app_settlement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('settlement/new.html.twig', [
            'settlement' => $settlement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_settlement_show', methods: ['GET'])]
    public function show(Settlement $settlement): Response
    {
        return $this->render('settlement/show.html.twig', [
            'settlement' => $settlement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_settlement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Settlement $settlement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SettlementType::class, $settlement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_settlement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('settlement/edit.html.twig', [
            'settlement' => $settlement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_settlement_delete', methods: ['POST'])]
    public function delete(Request $request, Settlement $settlement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$settlement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($settlement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_settlement_index', [], Response::HTTP_SEE_OTHER);
    }
}
