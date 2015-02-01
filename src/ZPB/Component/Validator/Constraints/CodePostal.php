<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Canfrere
 * Date: 01/02/2015
 * Time: 20:38
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
class CodePostal extends Constraint
{
    public $message = "Code postal invalide.";

    public function validatedBy()
    {
        return get_class($this)."Validator";
    }
}
