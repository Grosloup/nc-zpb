<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Canfrère
 * Date: 22/12/2014
 * Time: 11:06
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

namespace ZPB\AdminBundle\Validator\Constraints;


use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class TexteValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof Texte) {
            throw new UnexpectedTypeException($constraint, __NAMESPACE__.'\PersonName');
        }

        $rest = preg_replace('/[a-zA-Zéèêëàâçûîïöô0-9_,;.?!:\/ù\x22\')(\]\[=@ -]/',"", $value);
        if(strlen($rest) > 0){
            $this->context->addViolation($constraint->message);
        }
    }
}
