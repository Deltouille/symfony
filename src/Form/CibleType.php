<?php

namespace App\Form;

use App\Entity\Cible;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Mission;
use App\Entity\Nationnalite;
class CibleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('DateNaissance', BirthdayType::class)
            ->add('nomCode', TextType::class)
            ->add('nationnalite', EntityType::class,
            array('class' => Nationnalite::class,
                  'choice_label' => 'nomNatio',
                  'multiple' => false,
                  'expanded' => false
                  ))
            ->add('mission', EntityType::class,
            array('class' => Mission::class,
                  'choice_label' => 'titre',
                  'multiple' => true,
                  'expanded' => false,
                  'required' => false,
                  ))
            ->add('Sauvegarde', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cible::class,
        ]);
    }
}
