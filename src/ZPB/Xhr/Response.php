<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Canfrere
 * Date: 03/01/2015
 * Time: 01:26
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

namespace ZPB\Xhr;


class Response implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected $error = true;
    /**
     * @var string
     */
    protected $msg = "";
    /**
     * @var array
     */
    protected $datas = [];

    /**
     * @return boolean
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param boolean $error
     */
    public function setError($error)
    {
        $this->error = $error;
    }

    /**
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param string $msg
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }

    /**
     * @return array
     */
    public function getDatas()
    {
        return $this->datas;
    }

    /**
     * @param array $datas
     */
    public function setDatas($datas)
    {
        $this->datas = $datas;
    }

    function jsonSerialize()
    {
        return [
            "error" => $this->getError(),
            "msg" => $this->getMsg(),
            "datas" => $this->getDatas()
        ];
    }
}
