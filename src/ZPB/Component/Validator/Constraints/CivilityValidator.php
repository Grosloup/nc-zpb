<?php


namespace ZPB\Component\Validator\Constraints;


use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;


class CivilityValidator extends ConstraintValidator
{


    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof Civility) {
            throw new UnexpectedTypeException($constraint, __NAMESPACE__.'\Civility');
        }

        $value = trim($value);

        if($value != null && false == preg_match('/m\.?|mr\.?|mme\.?|mlle\.?|me\.?|pr\.?|dr\.?/i', $value)){
            $this->context->addViolation($constraint->message);
        }

    }
}
