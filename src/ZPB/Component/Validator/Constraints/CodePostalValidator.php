<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Canfrere
 * Date: 01/02/2015
 * Time: 20:39
 */
 /*
           ____________________
  __      /     ______         \
 {  \ ___/___ /       }         \
  {  /       / #      }          |
   {/ ô ô  ;       __}           |
   /          \__}    /  \       /\
<=(_    __<==/  |    /\___\     |  \
   (_ _(    |   |   |  |   |   /    #
    (_ (_   |   |   |  |   |   |
      (__<  |mm_|mm_|  |mm_|mm_|
*/

namespace ZPB\Component\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class CodePostalValidator extends ConstraintValidator
{
    protected $pattern = '/^(2[ab]|0[1-9]|[1-9][0-9])[0-9]{3}$/i';

    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof CodePostal) {
            throw new UnexpectedTypeException($constraint, __NAMESPACE__.'\CodePostal');
        }

        if($value != null && !preg_match($this->pattern,$value)){
            $this->context->addViolation($constraint->message);
        }
    }
}
