<?php
namespace App\Migration;

use App\System;
use KHerGe\File\File;

class Migration extends System {
	protected $lastVersion;
	protected $wpdb;

	public function __construct() {

		$configFolder = __DIR__."/../config/";
		$config = new File($configFolder."migrationVersion.txt", "r");
		$this->lastVersion = $config->read();
		$this->loadHelper( "db" );
		global $wpdb;
		$this->wpdb = $wpdb;

	}


	public function doMigration() {

		require_once wpPluginFolder . 'migration/migrate/Migrate.php';
		$currentDb = $this->helper->db->get( $this->wpdb->prefix . "_shop_migration", "id DESC" )[0];
		if ( $currentDb == null ) {
			$currentDb          = new stdClass();
			$currentDb->version = 0;
		}
		if ( $currentDb->version < $this->lastVersion ) {
			for ( $i = $currentDb->version; $i < $this->lastVersion; $i ++ ) {
				$migrateName = "Migrate_" . $i;
				require_once wpPluginFolder . "migration/migrate/" . $migrateName . ".php";
				$migrate = new $migrateName();
				$migrate->execute();
			}
		}
	}

	/**
	 * DATABASE STRUCTURE :
	 * +-------------------+
	 * |     ID | version  |
	 * +-------------------+
	 *
	 *
	 *
	 * What's needed on Migrate files:
	 * File & Class must be called Migrate_ and have an incremented Index (begining from 0)
	 * Class must extends Migrate
	 *
	 * Methods :
	 *      + setSql() => used to create our array each elements are an VALID SQL ACTION
	 *      + execute() => used to make our action
	 *      + updateVersion() => used to store the latest version info on database (must be called on each file cause each are a version)
	 *
	 * DON'T FORGET TO UPDATE $lastVersion on this class cause otherwise database structure's updates will not works
	 */

}