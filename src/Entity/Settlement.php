<?php

namespace App\Entity;

use App\Repository\SettlementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SettlementRepository::class)]
class Settlement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $amount = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToOne(inversedBy: 'settlements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $payer = null;

    #[ORM\ManyToOne(inversedBy: 'settlements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $payee = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): static
    {
        $this->amount = $amount;

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

    public function getPayer(): ?User
    {
        return $this->payer;
    }

    public function setPayer(?User $payer): static
    {
        $this->payer = $payer;

        return $this;
    }

    public function getPayee(): ?User
    {
        return $this->payee;
    }

    public function setPayee(?User $payee): static
    {
        $this->payee = $payee;

        return $this;
    }
}
