<?php

namespace App\Entity;

use App\Repository\GroupMemberRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GroupMemberRepository::class)]
class GroupMember
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'groupMembers')]
    private ?Group $groupTricount = null;

    #[ORM\ManyToOne(inversedBy: 'groupMembers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}
