<?php

namespace App\Controller;

use App\Entity\ExpenseParticipant;
use App\Form\ExpenseParticipantType;
use App\Repository\ExpenseParticipantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/expense/participant')]
class ExpenseParticipantController extends AbstractController
{
    #[Route('/', name: 'app_expense_participant_index', methods: ['GET'])]
    public function index(ExpenseParticipantRepository $expenseParticipantRepository): Response
    {
        return $this->render('expense_participant/index.html.twig', [
            'expense_participants' => $expenseParticipantRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_expense_participant_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $expenseParticipant = new ExpenseParticipant();
        $form = $this->createForm(ExpenseParticipantType::class, $expenseParticipant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($expenseParticipant);
            $entityManager->flush();

            return $this->redirectToRoute('app_expense_participant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('expense_participant/new.html.twig', [
            'expense_participant' => $expenseParticipant,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_expense_participant_show', methods: ['GET'])]
    public function show(ExpenseParticipant $expenseParticipant): Response
    {
        return $this->render('expense_participant/show.html.twig', [
            'expense_participant' => $expenseParticipant,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_expense_participant_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ExpenseParticipant $expenseParticipant, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ExpenseParticipantType::class, $expenseParticipant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_expense_participant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('expense_participant/edit.html.twig', [
            'expense_participant' => $expenseParticipant,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_expense_participant_delete', methods: ['POST'])]
    public function delete(Request $request, ExpenseParticipant $expenseParticipant, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$expenseParticipant->getId(), $request->request->get('_token'))) {
            $entityManager->remove($expenseParticipant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_expense_participant_index', [], Response::HTTP_SEE_OTHER);
    }
}
