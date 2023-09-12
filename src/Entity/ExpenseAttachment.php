<?php

namespace App\Entity;

use App\Repository\ExpenseAttachmentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExpenseAttachmentRepository::class)]
class ExpenseAttachment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'expenseAttachments')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Expense $expense = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $file = null;

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

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(?string $file): static
    {
        $this->file = $file;

        return $this;
    }
}
