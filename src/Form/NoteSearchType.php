<?php

namespace App\Form;

use App\Entity\NoteSearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoteSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Matiere', ChoiceType::class,[
                'choices' => [
                    'COMPLEXITE'=> 'COMPLEXITE',
                    'AWA'=> 'AWA',
                    'MACHINE_LEARNING'=> 'MACHINE_LEARNING',
                    'POO_EN_JAVA'=> 'POO_EN_JAVA',
                ]
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => NoteSearch::class,
            'method' => 'get',
            'csrf_protection' => false
        ]);
    }
    public function getBlockPrefix()
    {
        return '';
    }
}
