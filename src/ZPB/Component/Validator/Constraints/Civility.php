<?php


namespace ZPB\Component\Validator\Constraints;


use Symfony\Component\Validator\Constraint;

/**
 * Class PersonName
 * @package ZPB\AdminBundle\Validator\Constraints
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 */
class Civility extends Constraint
{
    public $message = "Ce champ contient une entrée invalide.";

    public function validatedBy()
    {
        return get_class($this)."Validator";
    }


}