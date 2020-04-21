<?php


class Db_Helper extends Helper
{
    protected $db;

    public function __construct()
    {
        global $wpdb;
        $this->db = $wpdb;
    }

    /**
     * @param string $table
     * @param null $order
     * @param null $limit
     * @param null $offset
     * @return array|object|null
     */
    public function get($table = '', $order = null, $limit = null, $offset = null)
    {
        $sql = "SELECT * FROM " . $table;
        if ($order != null) {
            $sql = $sql . " ORDER BY " . $order;
        }
        if ($limit != null) {
            if ($offset != null) {
                $sql = $sql . " LIMIT " . $offset . " , " . $limit;
            } else {
                $sql = $sql . "LIMIT 0, " . $limit;
            }
        }
        return $this->db->get_results($sql);
    }

    /**
     * @param string $table
     * @param null $where
     * @param null $order
     * @param null $limit
     * @param null $offset
     * @return array|object|null
     */
    public function get_where($table = '', $where = null, $order = null, $limit = null, $offset = null)
    {
        $sql = "SELECT * FROM " . $table;
        if ($where != null) {
            $sql = $sql . " WHERE ";
            foreach ($where as $key => $value) {
                $sql = $sql . " " . $key . " = '" . $value . "' AND ";
            }
            $sql = substr($sql, 0, -5);
        }
        if ($order != null) {
            $sql = $sql . " ORDER BY " . $order;
        }
        if ($limit != null) {
            if ($offset != null) {
                $sql = $sql . " LIMIT " . $offset . " , " . $limit;
            } else {
                $sql = $sql . "LIMIT 0, " . $limit;
            }
        }

        return $this->db->get_results($sql);
    }

    public function get_like($table = '', $like = null, $order = null, $limit = null, $offset = null)
    {
        $sql = "SELECT * FROM " . $table;
        if ($like != null) {
            $sql = $sql . " WHERE ";
            foreach ($like as $key => $value) {
                if (is_array($value)) {
                    $type = $value[1];
                    if ($type == "after") {
                        $slug = "%" . $value[0];
                    } else if ($type == "before") {
                        $slug = $value[0] . "%";
                    } else {
                        $slug = "%" . $value[0] . "%";
                    }
                } else {
                    $slug = $value . "%";
                }
                $sql = $sql . " " . $key . " LIKE '" . $slug . "' AND ";
            }
            $sql = substr($sql, 0, -5);
        }
        if ($order != null) {
            $sql = $sql . " ORDER BY " . $order;
        }
        if ($limit != null) {
            if ($offset != null) {
                $sql = $sql . " LIMIT " . $offset . " , " . $limit;
            } else {
                $sql = $sql . "LIMIT 0, " . $limit;
            }
        }
        return $this->db->get_results($sql);
    }

    /**
     * @param string $table
     * @param null $set
     * @return false|int
     */
    public function insert($table = '', $set = null)
    {
        return $this->db->insert($table, $set);
    }

    /**
     * @param string $table
     * @param null $set
     * @param null $where
     * @return false|int
     */
    public function update($table = '', $set = null, $where = null)
    {
        return $this->db->update($table, $set, $where);
    }

    /**
     * @param string $table
     * @param null $where
     * @return false|int
     */
    public function delete($table = '', $where = null)
    {
        return $this->db->delete($table, $where);
    }

    /**
     * @param $sql
     * @return bool|int
     */
    public function custom($sql)
    {
        return $this->db->query($sql);
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->db->prefix;
    }
}