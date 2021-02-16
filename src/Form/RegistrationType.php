<?php

namespace App\Form;

use App\Entity\Abonne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom',TextType::class,['attr'=>['class'=>'form-control'],'label'=>'prenom'])
            ->add('nom',TextType::class,['attr'=>['class'=>'form-control'],'label'=>'nom'])
            ->add('email',TextType::class,['attr'=>['class'=>'form-control'],'label'=>'email'])
            ->add('password',PasswordType::class,['attr'=>['class'=>'form-control'],'label'=>'password'])
            ->add('confirm_password',PasswordType::class,['attr'=>['class'=>'form-control'],'label'=>'password'])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Abonne::class,
        ]);
    }
}
