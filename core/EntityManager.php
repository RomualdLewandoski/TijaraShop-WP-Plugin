<?php

namespace App;

use Spot\Config;
use Spot\Locator;

class EntityManager
{
    protected $db;

    public function __construct()
    {
        $cfg = new Config();
        $cfg->addConnection('mysql', [
            'dbname' => DB_NAME,
            'user' => DB_USER,
            'password' => DB_PASSWORD,
            'host' => DB_HOST,
            'driver' => 'pdo_mysql',
        ]);
        $this->db = new Locator($cfg);
    }

    public function getManager()
    {
        if ($this->db === null) {
            $this->db = new Locator();
            $this->db->config()->addConnection('mysql', [
                'dbname' => DB_NAME,
                'user' => DB_USER,
                'password' => DB_PASSWORD,
                'host' => DB_HOST,
                'driver' => 'pdo_mysql',
            ]);
        }

        return $this;
    }

    public function getCliManager()
    {
        if ($this->db === null) {
            $this->db = new Locator();
            $this->db->config()->addConnection('mysql', [
                'dbname' => "wordpress",
                'user' => "root",
                'password' => "",
                'host' => "127.0.0.1",
                'driver' => 'pdo_mysql',
            ]);
        }

        return $this;
    }

    public function getRepository($entityName)
    {
        $db = $this->getDb();

        return $db->mapper($entityName);
    }

    public function getDb()
    {
        if ($this->db === null) {
            $this->db = new Locator();
            $this->db->config()->addConnection('mysql', [
                'dbname' => DB_NAME,
                'user' => DB_USER,
                'password' => DB_PASSWORD,
                'host' => DB_HOST,
                'driver' => 'pdo_mysql',
            ]);
        }

        return $this->db;
    }


}