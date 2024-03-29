<?php

namespace App\Form;

use App\Entity\Party;
use App\Entity\Person;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PartyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label'=>'Название'
            ])
            ->add('date', null, [
                'label'=>'Дата'
            ])
            ->add('location', null, [
                'label'=>'Место'
            ])
            ->add('participants', EntityType::class, [
                'label'=>'Участники',
                'class'=>Person::class,
                'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Party::class,
        ]);
    }
}
