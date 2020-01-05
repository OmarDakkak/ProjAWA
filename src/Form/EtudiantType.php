<?php

namespace App\Form;

use App\Entity\Etudiants;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtudiantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cne')
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('naissance')
            ->add('adresse')
            ->add('id_e')
            ->add('niveau')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Etudiants::class,
        ]);
    }
}
