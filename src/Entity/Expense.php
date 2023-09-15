<?php

namespace App\Entity;

use App\Repository\ExpenseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExpenseRepository::class)]
class Expense
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $amout = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToOne(inversedBy: 'expenses')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $creator = null;

    #[ORM\ManyToOne(inversedBy: 'expenses')]
    private ?Group $groupTricount = null;

    #[ORM\OneToMany(mappedBy: 'expense', targetEntity: ExpenseParticipant::class)]
    private Collection $expenseParticipants;

    #[ORM\OneToMany(mappedBy: 'expense', targetEntity: ExpenseComment::class)]
    private Collection $expenseComments;

    #[ORM\OneToMany(mappedBy: 'expense', targetEntity: ExpenseAttachment::class)]
    private Collection $expenseAttachments;

    public function __construct()
    {
        $this->expenseParticipants = new ArrayCollection();
        $this->expenseComments = new ArrayCollection();
        $this->expenseAttachments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAmout(): ?string
    {
        return $this->amout;
    }

    public function setAmout(string $amout): static
    {
        $this->amout = $amout;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getCreator(): ?User
    {
        return $this->creator;
    }

    public function setCreator(?User $creator): static
    {
        $this->creator = $creator;

        return $this;
    }

    public function getGroupTricount(): ?Group
    {
        return $this->groupTricount;
    }

    public function setGroupTricount(?Group $groupTricount): static
    {
        $this->groupTricount = $groupTricount;

        return $this;
    }

    public function __toString(): string
    {
        return $this->getDescription();
        return $this->getGroupTricount(); // Vous pouvez personnaliser cette méthode en fonction de vos besoins.
    }

    
    /**
     * @return Collection<int, ExpenseParticipant>
     */
    public function getExpenseParticipants(): Collection
    {
        return $this->expenseParticipants;
    }

    public function addExpenseParticipant(ExpenseParticipant $expenseParticipant): static
    {
        if (!$this->expenseParticipants->contains($expenseParticipant)) {
            $this->expenseParticipants->add($expenseParticipant);
            $expenseParticipant->setExpense($this);
        }

        return $this;
    }

    public function removeExpenseParticipant(ExpenseParticipant $expenseParticipant): static
    {
        if ($this->expenseParticipants->removeElement($expenseParticipant)) {
            // set the owning side to null (unless already changed)
            if ($expenseParticipant->getExpense() === $this) {
                $expenseParticipant->setExpense(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ExpenseComment>
     */
    public function getExpenseComments(): Collection
    {
        return $this->expenseComments;
    }

    public function addExpenseComment(ExpenseComment $expenseComment): static
    {
        if (!$this->expenseComments->contains($expenseComment)) {
            $this->expenseComments->add($expenseComment);
            $expenseComment->setExpense($this);
        }

        return $this;
    }

    public function removeExpenseComment(ExpenseComment $expenseComment): static
    {
        if ($this->expenseComments->removeElement($expenseComment)) {
            // set the owning side to null (unless already changed)
            if ($expenseComment->getExpense() === $this) {
                $expenseComment->setExpense(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ExpenseAttachment>
     */
    public function getExpenseAttachments(): Collection
    {
        return $this->expenseAttachments;
    }

    public function addExpenseAttachment(ExpenseAttachment $expenseAttachment): static
    {
        if (!$this->expenseAttachments->contains($expenseAttachment)) {
            $this->expenseAttachments->add($expenseAttachment);
            $expenseAttachment->setExpense($this);
        }

        return $this;
    }

    public function removeExpenseAttachment(ExpenseAttachment $expenseAttachment): static
    {
        if ($this->expenseAttachments->removeElement($expenseAttachment)) {
            // set the owning side to null (unless already changed)
            if ($expenseAttachment->getExpense() === $this) {
                $expenseAttachment->setExpense(null);
            }
        }

        return $this;
    }
}
