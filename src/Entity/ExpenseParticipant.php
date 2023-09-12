<?php

namespace App\Entity;

use App\Repository\ExpenseParticipantRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExpenseParticipantRepository::class)]
class ExpenseParticipant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'expenseParticipants')]
    private ?Expense $expense = null;

    #[ORM\ManyToOne(inversedBy: 'expenseParticipants')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $share = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExpense(): ?Expense
    {
        return $this->expense;
    }

    public function setExpense(?Expense $expense): static
    {
        $this->expense = $expense;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getShare(): ?string
    {
        return $this->share;
    }

    public function setShare(string $share): static
    {
        $this->share = $share;

        return $this;
    }
}
