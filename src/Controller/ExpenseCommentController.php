<?php

namespace App\Controller;

use App\Entity\ExpenseComment;
use App\Form\ExpenseCommentType;
use App\Repository\ExpenseCommentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/expense/comment')]
class ExpenseCommentController extends AbstractController
{
    #[Route('/', name: 'app_expense_comment_index', methods: ['GET'])]
    public function index(ExpenseCommentRepository $expenseCommentRepository): Response
    {
        return $this->render('expense_comment/index.html.twig', [
            'expense_comments' => $expenseCommentRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_expense_comment_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $expenseComment = new ExpenseComment();
        $form = $this->createForm(ExpenseCommentType::class, $expenseComment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($expenseComment);
            $entityManager->flush();

            return $this->redirectToRoute('app_expense_comment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('expense_comment/new.html.twig', [
            'expense_comment' => $expenseComment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_expense_comment_show', methods: ['GET'])]
    public function show(ExpenseComment $expenseComment): Response
    {
        return $this->render('expense_comment/show.html.twig', [
            'expense_comment' => $expenseComment,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_expense_comment_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ExpenseComment $expenseComment, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ExpenseCommentType::class, $expenseComment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_expense_comment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('expense_comment/edit.html.twig', [
            'expense_comment' => $expenseComment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_expense_comment_delete', methods: ['POST'])]
    public function delete(Request $request, ExpenseComment $expenseComment, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$expenseComment->getId(), $request->request->get('_token'))) {
            $entityManager->remove($expenseComment);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_expense_comment_index', [], Response::HTTP_SEE_OTHER);
    }
}
