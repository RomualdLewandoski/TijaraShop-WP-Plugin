<?php


namespace Console;


use KHerGe\File\File;
use PDOException;
use stdClass;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MigrationsMigrate extends Command
{
    protected function configure()
    {
        $this->setName('migrations:migrate')
            ->setDescription('Apply Migrations generated with make:migration')
            ->setHelp("This command applies Migrations generated with make:migration");
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        //Todo: step 1 Connect to database
        //Todo: step 2 Retrive latest Migration
        //Todo: step 3 Apply each migrations
        $wpConfigFile = new File(__DIR__ . "/../../../../../wp-config.php", 'r');
        $wpConfigStr = $wpConfigFile->read();
        $wpConfigStr = explode("<?php", $wpConfigStr)[1];
        $wpConfigStr = explode("define('WP_DEBUG', false);", $wpConfigStr)[0];
        eval($wpConfigStr);

        try {
            $db = new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
            $this->executeMihration($input, $output, $db);
        } catch (PDOException $e) {
            $output->writeln("<error>Can't connect to database</error>");
        }
        return 1;
    }

    public function executeMihration(InputInterface $input, OutputInterface $output, \PDO $db)
    {

        $configFolder = __DIR__ . "/../../config/";
        $config = new File($configFolder . "migrationVersion.txt", "r");
        $lastVersion = $config->read();
        require_once __DIR__ . "/../../migration/migrate/Migrate.php";

        $sql = "SELECT * FROM wp__shop_migration ORDER BY id DESC";
        $reqSelect = $db->prepare($sql);
        $reqSelect->execute();
        $data = $reqSelect->fetchAll(5);
        $current = $data[0];
        if ($current == null) {
            $current = new stdClass();
            $current->version = 0;
        }
        if ($current->version < $lastVersion) {
            $continue = true;
            for ($i = $current->version; $i < $lastVersion; $i++) {
                if ($continue) {
                    $migrateName = "Migrate_" . $i;
                    require_once __DIR__ . "/../../migration/migrate/" . $migrateName . ".php";
                    $migrate = new $migrateName();
                    $migrate->setSql();
                    $sqls = $migrate->sql;
                    $flag = true;
                    foreach ($sqls as $sql) {
                        $req = $db->prepare($sql);
                        if (!$req->execute()) {
                            $flag = false;
                            $continue = false;
                            $output->writeln("<error> An error has been encountered on " . $sql);
                        }
                    }
                    if ($flag) {
                        $version = $i + 1;
                        $sqlInsert = "INSERT INTO wp__shop_migration (version) VALUES (?)";
                        $reqInsert = $db->prepare($sqlInsert);
                        $reqInsert->bindParam(1, $version);
                        $reqInsert->execute();
                        $output->writeln("<info>Migration " . $migrateName . " has been successfully applied</info>");

                    } else {
                        $output->writeln("<error>Migration " . $migrateName . "has encountered an unexpected error</error>");
                    }
                }

            }
        } else {
            $output->writeln("<comment>Nothing to migrate</comment>");
        }
    }
}