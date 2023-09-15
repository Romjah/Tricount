<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use App\Validator\Constraints\PasswordMatch;

class RegisterFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('firstName')
            ->add('email')
            ->add('telephone')
            ->add('password', PasswordType::class, [
                'label' => 'Mot de Passe',
                ])
            ->add('confirmPassword', PasswordType::class, [
                'label' => 'Confirmer le Mot de Passe',
                ])
            ->add('CreateDateTime')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
