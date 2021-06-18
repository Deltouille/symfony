<?php

namespace App\Form;

use App\Entity\Planque;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlanqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('adresse')
            ->add('CP')
            ->add('pays')
            ->add('ville')
            ->add('type')
            ->add('missions')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Planque::class,
        ]);
    }
}
