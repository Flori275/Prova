<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;




$route['admin/add'] = 'Admin/add';
$route['admin/store'] = 'Admin/store';


$route['api/demo'] = 'api/ApiDemoController/index'; 




$route['api/users'] = 'api/ApiEmployeeController/index';
$route['api/users/store'] = 'api/ApiEmployeeController/storeEmployee';
$route['api/users/edit/(:any)'] = 'api/ApiEmployeeController/findEmployee/$1';
$route['api/users/update/(:any)'] = 'api/ApiEmployeeController/updateEmployee/$1';
$route['api/users/delete/(:any)'] = 'api/ApiEmployeeController/deleteEmployee/$1';
