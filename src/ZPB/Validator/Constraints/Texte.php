<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Canfrère
 * Date: 22/12/2014
 * Time: 11:04
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

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 */
class Texte extends Constraint
{
    public $message = "Caractères non autorisés.";

    public function validatedBy()
    {
        return get_class($this)."Validator";
    }
}
