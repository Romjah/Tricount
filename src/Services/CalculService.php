<?php

namespace App\Service;

use App\Entity\Group;
use Doctrine\ORM\EntityManagerInterface;

class CalculService
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function calcul(Group $group)
    {
        $users =[];
        foreach ($group->getUsers() as $user)
        {
            $users[$user->getFirstName()] = 0.0;
        }
        foreach ($group->getExpenses() as $expense)
        {
            $users[$expense->getCreator()->getFirstName()] += $expense->getAmout();
        }
        $totalUsers = count($group->getUsers());
        $averageExpense = array_sum($users) / $totalUsers;
        foreach ($users as $userId => $balance) {
            $owedAmount = $balance - $averageExpense;

            $users[$userId] = $owedAmount;

        }
        return $users;
    }
}