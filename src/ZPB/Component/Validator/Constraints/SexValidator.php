<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Canfrere
 * Date: 01/02/2015
 * Time: 19:46
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

class SexValidator extends ConstraintValidator
{
    protected $pattern = '/^male|female|homme|femme$/i';

    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof Sex) {
            throw new UnexpectedTypeException($constraint, __NAMESPACE__.'\Sex');
        }

        if(!preg_match($this->pattern,$value)){
            $this->context->addViolation($constraint->message);
        }
    }
}
