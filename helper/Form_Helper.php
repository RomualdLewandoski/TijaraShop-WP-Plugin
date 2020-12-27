<?php
namespace App\Helper;

use App\Helper;

class Form_Helper extends Helper
{
    public function __construct()
    {

    }

    /**
     * @description This method ll verify if all post parametters are set
     * @param array $params
     * @return bool
     */
    public function verify($params = null)
    {
        $flag = true;
        if ($params != null) {
            foreach ($params as $param) {
                if (!isset($_POST[$param]) OR trim($_POST[$param]) == "") {
                    $flag = false;
                }
            }
        }
        return $flag;
    }

}