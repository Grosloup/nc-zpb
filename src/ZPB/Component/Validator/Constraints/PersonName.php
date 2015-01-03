<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Canfrère
 * Date: 22/12/2014
 * Time: 08:29
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

/**
 * Class PersonName
 * @package ZPB\AdminBundle\Validator\Constraints
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 */
class PersonName extends Constraint
{
    public $message = "Ce champ contient des caractères non autorisés.";

    public function validatedBy()
    {
        return get_class($this)."Validator";
    }


}
