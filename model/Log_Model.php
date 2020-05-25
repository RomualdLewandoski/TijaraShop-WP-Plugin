<?php


class Log_Model extends Model
{
    protected $table;

    public function __construct()
    {
        $this->loadHelper('db');
        $this->table = $this->helper->db->getPrefix() . '_shop_Log';
    }

    /**
     * @description This method is used to add a log on database
     * @param $userLog
     * @param $typeLog
     * @param $actionLog
     * @param null $targetIdLog
     * @param null $beforeLog
     * @param null $afterLog
     * @return bool
     */

    public function addLog($userLog, $typeLog, $actionLog, $targetIdLog = null, $beforeLog = null, $afterLog = null)
    {
        $data = array(
            'userLog' => $userLog,
            'typeLog' => $typeLog,
            'actionLog' => $actionLog,
            'targetIdLog' => $targetIdLog,
            'beforeLog' => $beforeLog,
            'afterLog' => $afterLog
        );
        return !$this->helper->db->insert($this->table, $data) ? false : true;
    }

    public function getList()
    {
        return $this->helper->db->get($this->table, "dateLog ASC");
    }

    public function getLog($idLog)
    {
        return $this->helper->db->get_where($this->table, array('idLog' => $idLog))[0];
    }
}