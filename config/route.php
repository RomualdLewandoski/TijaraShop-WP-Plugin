<?php
/**
 * OTHER PAGES
 */
$route['cgu'] = "cgu/index";

/**
 * API UPDATER LOOP
 */
$route['api/update'] = "api/updater";

/**
 * API SETTER
 */
$route['api/users/changepass'] = "api/changeUserPass";
$route['api/suppliers/add'] = "api/addSupplier";
$route['api/suppliers/edit'] = "api/editSupplier";
$route['api/suppliers/delete'] = "api/deleteSupplier";

/**
 * API GETTER
 */
$route['api/delete'] = "api/getDelete";
$route['api/logs/getId'] = "api/getLogId";
$route['api/logs'] = "api/getLogs";
$route['api/suppliers'] = "api/getSuppliers";
$route['api/users'] = "api/getUsers";
$route['api/perms'] = "api/getPerms";

/**
 * API MAIN
 */
$route['api/main'] = "api/index";
$route['api'] = "api/index";


/**
 * EXEMPLE WITH SLUGS ON URL
 */
//$route['api/main/$?'] = "admin/test";
