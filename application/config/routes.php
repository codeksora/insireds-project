<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['alumnos/(:num)/editar'] = 'Alumnos/editar/$1';
$route['alumnos/(:num)/editar_s'] = 'Alumnos/editar_s/$1';
$route['alumnos/(:num)/editar_photo_s'] = 'Alumnos/editar_photo_s/$1';
$route['alumnos/(:num)/eliminar'] = 'Alumnos/eliminar/$1';
$route['alumnos/(:num)/eliminar_s'] = 'Alumnos/eliminar_s/$1';

$route['docentes/(:num)/editar'] = 'Docentes/editar/$1';
$route['docentes/(:num)/editar_s'] = 'Docentes/editar_s/$1';
$route['docentes/(:num)/editar_photo_s'] = 'Docentes/editar_photo_s/$1';
$route['docentes/(:num)/editar_contrasena_s'] = 'Docentes/editar_contrasena_s/$1';
$route['docentes/(:num)/eliminar'] = 'Docentes/eliminar/$1';
$route['docentes/(:num)/eliminar_s'] = 'Docentes/eliminar_s/$1';

$route['padres/(:num)/editar'] = 'Padres/editar/$1';
$route['padres/(:num)/editar_s'] = 'Padres/editar_s/$1';
$route['padres/(:num)/editar_photo_s'] = 'Padres/editar_photo_s/$1';
$route['padres/(:num)/eliminar'] = 'Padres/eliminar/$1';
$route['padres/(:num)/eliminar_s'] = 'Padres/eliminar_s/$1';