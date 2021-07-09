<?php

namespace App\Form;

use App\Entity\Planque;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Mission;
use App\Entity\Pays;

class PlanqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code', TextType::class)
            ->add('adresse', TextType::class)
            ->add('CP', NumberType::class, [
                'attr' => array(
                    'min' => 1,
                    'max' => 5,
                ),
            ])
            ->add('pays', EntityType::class,
                array('class' => Pays::class,
                      'choice_label' => 'nom', 
                      'multiple' => false,
                      'expanded' => false,
                      ))
            ->add('ville', TextType::class)
            ->add('type', TextType::class)
            ->add('missions', EntityType::class,
                array('class' => Mission::class,
                      'choice_label' => 'titre',
                      'multiple' => true,
                      'required' => false,
                      ))
            ->add('Sauvegarde', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Planque::class,
        ]);
    }
}
