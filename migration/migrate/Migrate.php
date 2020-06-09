<?php

abstract class Migrate extends System
{
    public $version;
    public $sql;
    public $wpdb;

    final public function __construct($version)
    {
        $this->loadHelper("db");
        $this->version = $version;
        global $wpdb;
        $this->wpdb = $wpdb;
    }

    abstract public function setSql();

    abstract public function execute();

    abstract public function updateVersion();
}