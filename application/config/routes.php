<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'HomeController';
$route['404_override'] = 'HomeController/notFound';
$route['translate_uri_dashes'] = FALSE;

// api routes
$route['api/blogs'] = 'BlogController/apiBlogs';
$route['api/home_sliders'] = 'HomeController/apiHomeSliders';
$route['api/topbar_sliders'] = 'HomeController/apiTopbarSliders';
$route['api/category_sliders/(:any)'] = 'HomeController/apiCategorySliders/$1';
$route['api/home_offers'] = 'HomeController/apiHomeOffers';
$route['api/category_offers/(:any)'] = 'HomeController/apiCategoryOffers/$1';

// api brands
$route['api/all_brands'] = 'HomeController/apiAllBrands';
$route['api/shops/(:num)'] = 'ShopController/appBrandWiseReview/$1';
$route['api/brand_offer/(:any)'] = 'ShopController/brandWiseOffer/$1';


// api shops
$route['api/shops/(:any)'] = 'HomeApiController/shops/$1';

// api search
$route['api/search'] = 'HomeApiController/apiSearch';

//api register/login
$route['api/test'] = 'LoginController/GetTokenData';

$route['api/appLogin'] = 'LoginController/appLogin';
$route['api/appRegistration'] = 'RegistrationController/appRegistration';
$route['api/appUpdateProfile'] = 'RegistrationController/appUpdateProfile';
$route['api/appUpdateProfileImage'] = 'RegistrationController/appUpdateProfileImage';
$route['api/appUpdateSIDImage'] = 'RegistrationController/appUpdateSIDImage';
$route['api/appHome'] = 'ProfileApiController/appHome';
$route['api/appPromo'] = 'ProfileApiController/appPromo';
$route['api/appGeneratePromocode'] = 'ProfileApiController/appGeneratePromocode';
$route['api/appPurchaseHistory'] = 'ProfileApiController/appPurchaseHistory';
$route['api/appReviewHistory'] = 'ProfileApiController/appReviewHistory';
$route['api/appReviewDetails/(:num)'] = 'ProfileApiController/appReviewDetails/$1';
$route['api/appGetSaleId/(:num)'] = 'ProfileApiController/appGetSaleId/$1';
$route['api/appSaveReview'] = 'ProfileApiController/appSaveReview';




//route for home pages
$route['blogs'] = 'BlogController/blogs';
$route['blog-details/(:num)'] = 'HomeController/blogDetails/$1';
$route['shops/(:any)'] = 'ShopController/shops/$1';
$route['hot'] = 'ShopController/hot';
$route['search'] = 'SearchController/search';
$route['report/(:num)'] = 'BlogController/report/$1';
$route['undo_report/(:num)'] = 'BlogController/undoReport/$1';
$route['categorized_blogs/(:any)'] = 'BlogController/catBlogs/$1';
$route['about'] = 'HomeController/about';

// route for onclick Report
$route['getReport/(:num)'] = 'BlogController/getReport/$1';

//route for common pages
$route['restaurant'] = 'RestaurantController';

//route for user panel
$route['user/signup'] = 'RegistrationController/signup';
$route['user/profile'] = 'LoginController/login';
$route['user/profile/update'] = 'LoginController/update';
$route['user/profile/home'] = 'ProfileController/home';
$route['user/profile/promo'] = 'ProfileController/promocode';
$route['user/profile/review/(:num)'] = 'ProfileController/review/$1';
$route['user/profile/history'] = 'ProfileController/history';
$route['user/profile/review_history'] = 'ProfileController/review_history';
$route['user/profile/write_review/(:num)'] = 'ProfileController/write_review/$1';



// $route['login'] = 'LoginController';
$route['user/dashboard'] = 'UserController/profile';


// Routes for admin panel
$route['admin/login/xyz'] = 'admin/LoginController/login';
$route['admin/dashboard'] = 'admin/LoginController/dashboard';
$route['admin/home'] = 'admin/AdminController/home';

//routes for user login

//routes for brand based offer

$route['brand_offers/(:any)'] = 'HomeController/brandOffers/$1';


//get offer route for web
$route['getOffer'] = 'ProfileController/getOffer';


$route['privacy'] = 'HomeController/privacy';
$route['terms'] = 'HomeController/terms';


// $routes->group('admin', function($routes) {
//     $routes->add('dashboard', 'admin/AdminController/index');
// });
