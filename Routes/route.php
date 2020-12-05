<?php
namespace App;

use App\System;

class Route extends System
{
    public function __construct()
    {
        $this->loadHelper('route');
    }

    public function loadRoutes($routeArray)
    {
        foreach ($routeArray as $key => $value) {
            if (!$this->startsWith($key, '^')){
                $key = "^".$key;
            }
            if (!$this->endsWith($key, "/?")){
                $key = $key."/?";
            }
            $aValue = explode("/", $value);
            $controller = $aValue[0];
            $method = $aValue[1];
            $param = array();
            $nbRegex = explode('$?', $key);
            for ($i= 1 ; $i <= count($nbRegex)+1; $i++){
                $param['param'.$i] = $i;
            }
            $key = str_replace('$?', '([^/]*)', $key);
            $this->helper->route->addRoutes($key, $controller, $method, $param);
        }
    }

    function startsWith($haystack, $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }

    function endsWith($haystack, $needle)
    {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }

        return (substr($haystack, -$length) === $needle);
    }

}