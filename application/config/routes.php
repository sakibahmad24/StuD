<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//route for home pages
$route['blog-details/(:num)'] = 'HomeController/blogDetails/$1';


//route for common pages
$route['restaurant'] = 'RestaurantController';

//route for user panel
$route['user/signup'] = 'RegistrationController/signup';
$route['user/profile/promo'] = 'ProfileController/promocode';
$route['user/profile/review/(:num)'] = 'ProfileController/review/$1';
$route['user/profile/history'] = 'ProfileController/history';
$route['user/profile/review_history'] = 'ProfileController/review_history';
$route['user/profile/write_review/(:num)'] = 'ProfileController/write_review/$1';



// $route['login'] = 'LoginController';
$route['user/dashboard'] = 'UserController/profile';


// Routes for admin panel
$route['admin/login/xyz'] = 'admin/AdminController/login';
$route['admin/dashboard'] = 'admin/AdminController/dashboard';

//routes for user login






// $routes->group('admin', function($routes) {
//     $routes->add('dashboard', 'admin/AdminController/index');
// });
