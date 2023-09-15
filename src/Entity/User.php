<?php

namespace App\Entity;

use App\Repository\UserRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[ORM\HasLifecycleCallbacks()]
class User implements PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $firstName = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column]
    private ?int $telephone = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    /**
     * @Assert\EqualTo(propertyPath="password", message="Les mots de passe ne correspondent pas")
     */
    #[ORM\Column(length: 255)]
    private ?string $confirmPassword = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $CreateDateTime = null;

    private ?bool $rememberMe = false;

    #[ORM\OneToMany(mappedBy: 'creator', targetEntity: Expense::class)]
    private Collection $expenses;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: ExpenseParticipant::class)]
    private Collection $expenseParticipants;

    #[ORM\OneToMany(mappedBy: 'payer', targetEntity: Payment::class)]
    private Collection $payments;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Notification::class)]
    private Collection $notifications;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: ExpenseComment::class)]
    private Collection $expenseComments;

    #[ORM\OneToMany(mappedBy: 'payer', targetEntity: Settlement::class)]
    private Collection $settlements;

    #[ORM\ManyToMany(targetEntity: Group::class, mappedBy: 'users')]
    private Collection $usersgroups;

    public function __construct()
    {
        $this->expenses = new ArrayCollection();
        $this->expenseParticipants = new ArrayCollection();
        $this->payments = new ArrayCollection();
        $this->notifications = new ArrayCollection();
        $this->expenseComments = new ArrayCollection();
        $this->settlements = new ArrayCollection();
        $this->CreateDateTime = new DateTime();
        $this->usersgroups = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getConfirmPassword(): ?string
    {
        return $this->confirmPassword;
    }

    public function setConfirmPassword(string $confirmPassword): static
    {
        $this->confirmPassword = $confirmPassword;

        return $this;
    }

    public function getCreateDateTime(): ?DateTime
    {
        return $this->CreateDateTime;
    }

    public function setCreateDateTime(DateTime $CreateDateTime): static
    {
        $this->CreateDateTime = $CreateDateTime;

        return $this;
    }

    public function getRememberMe(): ?bool
    {
        return $this->rememberMe;
    }

    public function setRememberMe(bool $rememberMe): self
    {
        $this->rememberMe = $rememberMe;

        return $this;
    }

    public function preUpdate(): void
    {
        $this->CreateDateTime = new \DateTime();
    }

    public function __toString(): string
    {
        return $this->getFirstName() . ' ' . $this->getName();
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
            $expense->setCreator($this);
        }

        return $this;
    }

    public function removeExpense(Expense $expense): static
    {
        if ($this->expenses->removeElement($expense)) {
            // set the owning side to null (unless already changed)
            if ($expense->getCreator() === $this) {
                $expense->setCreator(null);
            }
        }

        return $this;
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
            $expenseParticipant->setUser($this);
        }

        return $this;
    }

    public function removeExpenseParticipant(ExpenseParticipant $expenseParticipant): static
    {
        if ($this->expenseParticipants->removeElement($expenseParticipant)) {
            // set the owning side to null (unless already changed)
            if ($expenseParticipant->getUser() === $this) {
                $expenseParticipant->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Payment>
     */
    public function getPayments(): Collection
    {
        return $this->payments;
    }

    public function addPayment(Payment $payment): static
    {
        if (!$this->payments->contains($payment)) {
            $this->payments->add($payment);
            $payment->setPayer($this);
        }

        return $this;
    }

    public function removePayment(Payment $payment): static
    {
        if ($this->payments->removeElement($payment)) {
            // set the owning side to null (unless already changed)
            if ($payment->getPayer() === $this) {
                $payment->setPayer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Notification>
     */
    public function getNotifications(): Collection
    {
        return $this->notifications;
    }

    public function addNotification(Notification $notification): static
    {
        if (!$this->notifications->contains($notification)) {
            $this->notifications->add($notification);
            $notification->setUser($this);
        }

        return $this;
    }

    public function removeNotification(Notification $notification): static
    {
        if ($this->notifications->removeElement($notification)) {
            // set the owning side to null (unless already changed)
            if ($notification->getUser() === $this) {
                $notification->setUser(null);
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
            $expenseComment->setUser($this);
        }

        return $this;
    }

    public function removeExpenseComment(ExpenseComment $expenseComment): static
    {
        if ($this->expenseComments->removeElement($expenseComment)) {
            // set the owning side to null (unless already changed)
            if ($expenseComment->getUser() === $this) {
                $expenseComment->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Settlement>
     */
    public function getSettlements(): Collection
    {
        return $this->settlements;
    }

    public function addSettlement(Settlement $settlement): static
    {
        if (!$this->settlements->contains($settlement)) {
            $this->settlements->add($settlement);
            $settlement->setPayer($this);
        }

        return $this;
    }

    public function removeSettlement(Settlement $settlement): static
    {
        if ($this->settlements->removeElement($settlement)) {
            // set the owning side to null (unless already changed)
            if ($settlement->getPayer() === $this) {
                $settlement->setPayer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Group>
     */
    public function getUsersgroups(): Collection
    {
        return $this->usersgroups;
    }

    public function addUsersgroup(Group $usersgroup): static
    {
        if (!$this->usersgroups->contains($usersgroup)) {
            $this->usersgroups->add($usersgroup);
            $usersgroup->addUser($this);
        }

        return $this;
    }

    public function removeUsersgroup(Group $usersgroup): static
    {
        if ($this->usersgroups->removeElement($usersgroup)) {
            $usersgroup->removeUser($this);
        }

        return $this;
    }
}
