<?php

namespace App\Controller;

use App\Entity\GroupMember;
use App\Form\GroupMemberType;
use App\Repository\GroupMemberRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/group/member')]
class GroupMemberController extends AbstractController
{
    #[Route('/', name: 'app_group_member_index', methods: ['GET'])]
    public function index(GroupMemberRepository $groupMemberRepository): Response
    {
        return $this->render('group_member/index.html.twig', [
            'group_members' => $groupMemberRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_group_member_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $groupMember = new GroupMember();
        $form = $this->createForm(GroupMemberType::class, $groupMember);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($groupMember);
            $entityManager->flush();

            return $this->redirectToRoute('app_group_member_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('group_member/new.html.twig', [
            'group_member' => $groupMember,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_group_member_show', methods: ['GET'])]
    public function show(GroupMember $groupMember): Response
    {
        return $this->render('group_member/show.html.twig', [
            'group_member' => $groupMember,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_group_member_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, GroupMember $groupMember, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(GroupMemberType::class, $groupMember);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_group_member_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('group_member/edit.html.twig', [
            'group_member' => $groupMember,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_group_member_delete', methods: ['POST'])]
    public function delete(Request $request, GroupMember $groupMember, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$groupMember->getId(), $request->request->get('_token'))) {
            $entityManager->remove($groupMember);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_group_member_index', [], Response::HTTP_SEE_OTHER);
    }
}
