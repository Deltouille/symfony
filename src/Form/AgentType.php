<?php

namespace App\Form;

use App\Entity\Agent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Cible;
use App\Entity\Planque;
use App\Entity\Contact;
use App\Entity\Mission;
use App\Entity\Nationnalite;
class AgentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('DateNaissance', BirthdayType::class)
            ->add('codeIdentification', TextType::class)
            ->add('missions', EntityType::class,
            array('class' => Mission::class,
                  'choice_label' => 'titre',
                  'multiple' => true,
                  'expanded' => false))
            ->add('Nationnalite', EntityType::class, array(
                  'class' => Nationnalite::class,
                  'choice_label' => 'nomNatio',
                  'multiple' => false,
                  'expanded' => false
                  ))
            ->add('Sauvegarde', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Agent::class,
        ]);
    }
}
