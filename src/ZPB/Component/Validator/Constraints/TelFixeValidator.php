<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Canfrere
 * Date: 01/02/2015
 * Time: 19:26
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

class TelFixeValidator extends ConstraintValidator
{
    protected $pattern = '/^((\+|00)33\s?|0)[1-5](\s?\d{2}){4}$/';

    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof TelFixe) {
            throw new UnexpectedTypeException($constraint, __NAMESPACE__.'\TelFixe');
        }

        if(!preg_match($this->pattern,$value)){
            $this->context->addViolation($constraint->message);
        }
    }
}
