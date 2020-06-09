<?php


class Migration extends System
{
    protected $lastVersion = 1;
    protected $wpdb;
    public function __construct()
    {
        $this->loadHelper("db");
        global $wpdb;
        $this->wpdb = $wpdb;
    }


    public function doMigration(){

        if ($this->helper->db->get_where($this->wpdb->prefix . "_shop_migration", array("version" => $this->lastVersion)) == null){
            require_once wpPluginFolder . 'migration/migrate/Migrate.php';

            for ($i = 0; $i < $this->lastVersion; $i++){
                $migrateName = "Migrate_".$i;
                require_once wpPluginFolder."migration/migrate/".$migrateName.".php";
                $migrate = new $migrateName($i+1);
                $migrate->execute();
            }
        }
    }

}