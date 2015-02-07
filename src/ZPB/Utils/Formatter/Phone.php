<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Canfrere
 * Date: 07/02/2015
 * Time: 11:47
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

namespace ZPB\Utils\Formatter;


class Phone implements FormatterInterface
{
    protected $pattern = '/^(?P<indicatif>(((\+|00)33\s?(\(?0\)?)?)|0))(?P<postindicatif>[1-9])(?P<number>(\s?\d{2}){4})$/';

    public function format($value)
    {
        if(preg_match($this->pattern, $value, $matches)){
            return "+33" . $matches["postindicatif"] . preg_replace('/\s/', '', $matches["number"]);
        }
        return $value;
    }

    /**
     * @return string
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @param string $pattern
     * @return Phone
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
        return $this;
    }


}
