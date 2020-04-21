<?php


class Install_Model extends Model
{
    public function __construct()
    {
    }

    public function makeInstall($request)
    {
        //todo save url site & method install & generate API KEY OR UPDATE IT
        //todo create Admin User
        //todo set step => 1
    }

    public function isInstall()
    {
        //todo check on db if Install is OK or NOT
        return false;
    }


}