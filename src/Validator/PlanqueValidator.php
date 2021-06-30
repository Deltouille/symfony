<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class PlanqueValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        /* @var $constraint \App\Validator\Planque */

        if (null === $value || '' === $value) {
            return;
        }

        // TODO: implement the validation here
            foreach($this.getPlanque() as $planque){
                if($planque.getPays().getNom() !== $this.getPays().getNom()){
                    $this->context->buildViolation($constraint->message)
                        ->setParameter('{{ value }}', $value)
                        ->addViolation();
            }
        }
    }
}
