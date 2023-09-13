<?php

namespace App\Form;

use App\Entity\Expense;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExpenseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('amout')
            ->add('description')
            ->add('date')
            ->add('creator')
            ->add('groupTricount')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Expense::class,
        ]);
    }
}
