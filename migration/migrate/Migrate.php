<?php
namespace App\Migration\Migrate;

use App\System;

abstract class Migrate extends System
{
    public $sql;
    public $wpdb;

    final public function __construct()
    {
        $this->loadHelper("db");
        global $wpdb;
        $this->wpdb = $wpdb;
    }

    abstract public function setSql();

    abstract public function execute();

    abstract public function updateVersion();
}