<?php

namespace App;


use App\Helper\Wp_Helper;

class ControllerRoute
{
    public function generateRoute()
    {
        $wpHelper = new Wp_Helper();

        $wpHelper->addMenu("TijaraShop", "manage_options", "TijaraShop", "Admin", "index", "", 50.5);

        $wpHelper->addSubMenu("TijaraShop", "Api", "manage_options", "TijaraShop/api", "Admin", "adminApi");
        $wpHelper->addSubMenu("TijaraShop", "Utilisateurs", "manage_options", "TijaraShop/users", "Admin", "adminUsers");
        $wpHelper->addSubMenu("null", "Install TijaraShop", "manage_options", "TijaraShop/install", "Install", "displayInstall");

        //$wpHelper->addSubMenu("TijaraShop", "Permissions", "manage_options", "TijaraShop/perms","Permission", "index");
        //$wpHelper->addSubMenu("TijaraShop", "Fournisseurs", "manage_options", "TijaraShop/supplier","Admin", "adminSupplier");
        //$wpHelper->addSubMenu("TijaraShop", "Logs", "manage_options", "TijaraShop/logs","Admin", "adminLogs");
        //$wpHelper->addSubMenu("TijaraShop", "Marque", "manage_options", "TijaraShop/brand","Brand", "index");
        /*$wpHelper->addSubMenu("TijaraShop", "test", "manage_options", "TijaraShop/test","Test", "index");
        $wpHelper->addSubMenu("TijaraShop", "Boutique", "manage_options", "TijaraShop/boutique","Boutique", "index");
        $wpHelper->addSubMenu("null", "editBoutique", "manage_options", "TijaraShop/boutique/edit","Boutique", "edit");
        $wpHelper->addSubMenu("null", "deleteBoutique", "manage_options", "TijaraShop/boutique/delete","Boutique", "delete");
        $wpHelper->addSubMenu("null", "subCat", "manage_options", "TijaraShop/cat/sub","Cat", "subCat");
        $wpHelper->addSubMenu("null", "editCat", "manage_options", "TijaraShop/cat/edit","Cat", "edit");
        $wpHelper->addSubMenu("null", "deleteCat", "manage_options", "TijaraShop/cat/delete","cat", "delete");*/


    }
}

