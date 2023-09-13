<?php

namespace App\Controller;

use App\Entity\ExpenseAttachment;
use App\Form\ExpenseAttachmentType;
use App\Repository\ExpenseAttachmentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/expense/attachment')]
class ExpenseAttachmentController extends AbstractController
{
    #[Route('/', name: 'app_expense_attachment_index', methods: ['GET'])]
    public function index(ExpenseAttachmentRepository $expenseAttachmentRepository): Response
    {
        return $this->render('expense_attachment/index.html.twig', [
            'expense_attachments' => $expenseAttachmentRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_expense_attachment_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $expenseAttachment = new ExpenseAttachment();
        $form = $this->createForm(ExpenseAttachmentType::class, $expenseAttachment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($expenseAttachment);
            $entityManager->flush();

            return $this->redirectToRoute('app_expense_attachment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('expense_attachment/new.html.twig', [
            'expense_attachment' => $expenseAttachment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_expense_attachment_show', methods: ['GET'])]
    public function show(ExpenseAttachment $expenseAttachment): Response
    {
        return $this->render('expense_attachment/show.html.twig', [
            'expense_attachment' => $expenseAttachment,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_expense_attachment_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ExpenseAttachment $expenseAttachment, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ExpenseAttachmentType::class, $expenseAttachment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_expense_attachment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('expense_attachment/edit.html.twig', [
            'expense_attachment' => $expenseAttachment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_expense_attachment_delete', methods: ['POST'])]
    public function delete(Request $request, ExpenseAttachment $expenseAttachment, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$expenseAttachment->getId(), $request->request->get('_token'))) {
            $entityManager->remove($expenseAttachment);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_expense_attachment_index', [], Response::HTTP_SEE_OTHER);
    }
}
