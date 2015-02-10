<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Canfrere
 * Date: 01/02/2015
 * Time: 19:10
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

class TailleValidator extends ConstraintValidator
{


    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof Taille) {
            throw new UnexpectedTypeException($constraint, __NAMESPACE__.'\Taille');
        }

        if(!preg_match('/^no|xs|s|m|l|xl|xxl$/i',$value)){
            $this->context->addViolation($constraint->message);
        }
    }
}
