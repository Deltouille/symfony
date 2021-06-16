<?php

namespace App\Form;

use App\Entity\Mission;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Agent;
use App\Entity\Cible;
use App\Entity\Planque;
use App\Entity\Contact;
class MissionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class)
            ->add('description', TextType::class)
            ->add('nomCode', TextType::class)
            ->add('pays', TextType::class)
            ->add('Statut', ChoiceType::class, [
                'choices' => [
                    'En préparation' => 'En préparation',
                    'En cours' => 'En cours',
                    'Terminé' => 'Terminé',
                    'Echec'=> 'Echec',]]
                 )
            ->add('specialite', ChoiceType::class, [
                'choices' => [
                    'Surveillance' => 'Surveillance',
                    'Infiltration' => 'Infiltration',
                ]
            ])
            ->add('dateDebut', DateType::class, [ 
                'widget' => 'choice',
                'format' => 'yyyy-MM-dd'
                ])
            ->add('dateFin', DateType::class, [ 
                'widget' => 'choice',
                'format' => 'yyyy-MM-dd'
                ])
            ->add('Agent', EntityType::class,
            array('class' => Agent::class,
                  'choice_label' => 'codeIdentification',
                  'multiple' => true,
                  'expanded' => false,
                  ))
            ->add('contact', EntityType::class,
            array('class' => Contact::class,
                  'choice_label' => 'nomCode',
                  'multiple' => true,
                  'expanded' => false,
                  ))
            ->add('Planque', EntityType::class,
            array('class' => Planque::class,
                  'choice_label' => 'code',
                  'multiple' => true,
                  'expanded' => false,
                
            ))
            ->add('Cible', EntityType::class,
            array('class' => Cible::class,
                  'choice_label' => 'nomCode',
                  'multiple' => true,
                  'expanded' => false,
            ))
            ->add('Sauvegarde', SubmitType::class)
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Mission::class,
        ]);
    }
}
