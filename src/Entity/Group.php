<?php

namespace App\Entity;

use App\Repository\GroupRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GroupRepository::class)]
#[ORM\Table(name: '`group`')]
class Group
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'groupTricount', targetEntity: Expense::class)]
    private Collection $expenses;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'groupTricount', targetEntity: GroupMember::class)]
    private Collection $groupMembers;

    public function __construct()
    {
        $this->expenses = new ArrayCollection();
        $this->groupMembers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

   

    /**
     * @return Collection<int, Expense>
     */
    public function getExpenses(): Collection
    {
        return $this->expenses;
    }

    public function addExpense(Expense $expense): static
    {
        if (!$this->expenses->contains($expense)) {
            $this->expenses->add($expense);
            $expense->setGroupTricount($this);
        }

        return $this;
    }

    public function removeExpense(Expense $expense): static
    {
        if ($this->expenses->removeElement($expense)) {
            // set the owning side to null (unless already changed)
            if ($expense->getGroupTricount() === $this) {
                $expense->setGroupTricount(null);
            }
        }

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, GroupMember>
     */
    public function getGroupMembers(): Collection
    {
        return $this->groupMembers;
    }

    public function addGroupMember(GroupMember $groupMember): static
    {
        if (!$this->groupMembers->contains($groupMember)) {
            $this->groupMembers->add($groupMember);
            $groupMember->setGroupTricount($this);
        }

        return $this;
    }

    public function removeGroupMember(GroupMember $groupMember): static
    {
        if ($this->groupMembers->removeElement($groupMember)) {
            // set the owning side to null (unless already changed)
            if ($groupMember->getGroupTricount() === $this) {
                $groupMember->setGroupTricount(null);
            }
        }

        return $this;
    }
}
