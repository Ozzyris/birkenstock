<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// WEBSITE ROUTES
$route['home'] = 'Home';
$route['product-details/(:any)/(:any)/(:any)'] = 'Product_details/index/$1/$2/$3';
$route['products/(:any)'] = 'Products/index/$1';
$route['about'] = 'About';
$route['contact'] = 'Contact';


// BACKEND ROUTES
	//NON REGISTERED
	$route['alfredatwork'] = 'AlfredAtWork/Login';
	$route['alfredatwork/login'] = 'AlfredAtWork/Login';
	$route['AlfredAtWork'] = 'AlfredAtWork/Login';
	$route['alfredatwork/login/auth'] = 'AlfredAtWork/Login/auth';
	$route['alfredatwork/forgot-password'] = 'AlfredAtWork/Forgotpassword';
	$route['alfredatwork/forgot-password/recovery-mail'] = 'AlfredAtWork/Forgotpassword/recovery_email';
	$route['alfredatwork/create-password'] = 'AlfredAtWork/Createpassword';

	// API ROUTES
		// dashboard
		$route['alfredatwork/dashboard'] = 'AlfredAtWork/Dashboard';
		$route['alfredatwork/dashboard/archiveData/(:any)'] = 'AlfredAtWork/Dashboard/archiveData/$1';
		$route['alfredatwork/dashboard/archiveMailchimp'] = 'AlfredAtWork/Dashboard/archiveMailchimp';
		//home
		$route['alfredatwork/home/newsletter-content'] = 'AlfredAtWork/Home/newsletter_content';
		$route['alfredatwork/home/facebook-content'] = 'AlfredAtWork/Home/facebook_content';
		$route['alfredatwork/home/instagram-content'] = 'AlfredAtWork/Home/instagram_content';
		$route['alfredatwork/home/address-content'] = 'AlfredAtWork/Home/address_content';
		$route['alfredatwork/home/email-content'] = 'AlfredAtWork/Home/email_content';
		$route['alfredatwork/home/phone-content'] = 'AlfredAtWork/Home/phone_content';
		$route['alfredatwork/home'] = 'AlfredAtWork/Home';
		// profile
		$route['alfredatwork/profile/name-content'] = 'AlfredAtWork/Profile/name_content';
		$route['alfredatwork/profile/email-content'] = 'AlfredAtWork/Profile/email_content';
		$route['alfredatwork/profile/password-content'] = 'AlfredAtWork/Profile/password_content';
		$route['alfredatwork/profile'] = 'AlfredAtWork/Profile';
		// news
		$route['alfredatwork/news/insertdata'] = 'AlfredAtWork/News/insertData';
		$route['alfredatwork/news/updatedata/(:any)'] = 'AlfredAtWork/News/updateData/$1';
		$route['alfredatwork/news/switchactive/(:any)'] = 'AlfredAtWork/News/switchActive/$1';
		$route['alfredatwork/news/delete-element/(:any)'] = 'AlfredAtWork/News/delete_element/$1';
		$route['alfredatwork/news'] = 'AlfredAtWork/News';
		// news details
		$route['alfredatwork/news-details/title-content/(:any)'] = 'AlfredAtWork/Newsdetails/title_content/$1';
		$route['alfredatwork/news-details/time-content/(:any)'] = 'AlfredAtWork/Newsdetails/time_content/$1';
		$route['alfredatwork/news-details/description-content/(:any)'] = 'AlfredAtWork/Newsdetails/description_content/$1';
		$route['alfredatwork/news-details/link-content/(:any)'] = 'AlfredAtWork/Newsdetails/link_content/$1';
		$route['alfredatwork/news-details/image-content/(:any)'] = 'AlfredAtWork/Newsdetails/image_content/$1';
		$route['alfredatwork/newsdetails/(:any)'] = 'AlfredAtWork/Newsdetails/index/$1';
		// collection
		$route['alfredatwork/collection/insert_element'] = 'AlfredAtWork/Collection/insert_element';
		$route['alfredatwork/collection/switch_element/(:any)'] = 'AlfredAtWork/Collection/switch_element/$1';
		$route['alfredatwork/collection/delete-element/(:any)'] = 'AlfredAtWork/Collection/delete_element/$1';
		$route['alfredatwork/collection'] = 'AlfredAtWork/Collection';
		// collection details
		$route['alfredatwork/collection-detail/name-content/(:any)'] = 'AlfredAtWork/Collectiondetails/name_content/$1';
		$route['alfredatwork/collection-detail/description-content/(:any)'] = 'AlfredAtWork/Collectiondetails/description_content/$1';
		$route['alfredatwork/collectiondetails/(:any)'] = 'AlfredAtWork/Collectiondetails/index/$1';
		// products
		$route['alfredatwork/products/insert_element/(:any)'] = 'AlfredAtWork/Products/insert_element/$1';
		$route['alfredatwork/products/switch_element/(:any)'] = 'AlfredAtWork/Products/switch_element/$1';
		$route['alfredatwork/products/delete_element/(:any)'] = 'AlfredAtWork/Products/delete_element/$1';
		$route['alfredatwork/products/(:any)'] = 'AlfredAtWork/Products/index/$1';
		// product details
		$route['alfredatwork/product-details/category_element/(:any)'] = 'AlfredAtWork/Productdetails/category_element/$1';
		$route['alfredatwork/product-details/thumb_element/(:any)'] = 'AlfredAtWork/Productdetails/thumb_element/$1';
		$route['alfredatwork/product-details/picture_element/(:any)'] = 'AlfredAtWork/Productdetails/picture_element/$1';
		$route['alfredatwork/product-details/tags_element/(:any)'] = 'AlfredAtWork/Productdetails/tags_element/$1';
		$route['alfredatwork/product-details/color_element/(:any)'] = 'AlfredAtWork/Productdetails/color_element/$1';
		$route['alfredatwork/product-details/gender_element/(:any)'] = 'AlfredAtWork/Productdetails/gender_element/$1';
		$route['alfredatwork/product-details/size_element/(:any)'] = 'AlfredAtWork/Productdetails/size_element/$1';
		$route['alfredatwork/product-details/(:any)'] = 'AlfredAtWork/Productdetails/index/$1';
		// logout
		$route['alfredatwork/logout'] = 'AlfredAtWork/Logout';


// SYSTEME ROUTES
$route['default_controller'] = 'home';
$route['404_override'] = 'AlfredAtWork/Fourofour.php';
$route['translate_uri_dashes'] = FALSE;	