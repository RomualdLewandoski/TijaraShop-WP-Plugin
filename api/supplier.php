<?php


class Supplier
{
    protected $request;
    protected $wpdb;

    public function __construct($request, $wpdb)
    {
        $this->request = $request;
        $this->wpdb = $wpdb;
    }

    public function getSupplliers()
    {
        $rows = $this->wpdb->get_results("SELECT * FROM {$this->wpdb->prefix}shop_fournisseur");
        $obj = new stdClass();
        $suppliers = array();
        foreach ($rows as $supplier) :
            array_push($suppliers, $supplier);
        endforeach;
        $obj->suppliers = $suppliers;
        return $obj;
    }

    public function addSupplier()
    {

    }

    public function editSupplier()
    {

    }

    public function deleteSupplier()
    {

    }
}