<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// WEBSITE ROUTES
$route['home'] = 'Home';
$route['product_details/(:any)'] = 'Product_details/index/$1';
$route['products/(:any)'] = 'Products/$1';
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
		$route['alfredatwork/home/addhomecontent'] = 'AlfredAtWork/Home/addhomecontent';
		$route['alfredatwork/home'] = 'AlfredAtWork/Home';
		// profile
		$route['alfredatwork/profile/addprofilecontent/(:any)'] = 'AlfredAtWork/Profile/addprofilecontent/$1';
		$route['alfredatwork/profile'] = 'AlfredAtWork/Profile';
		// news
		$route['alfredatwork/news/insertdata'] = 'AlfredAtWork/News/insertData';
		$route['alfredatwork/news/updatedata/(:any)'] = 'AlfredAtWork/News/updateData/$1';
		$route['alfredatwork/news/switchactive/(:any)'] = 'AlfredAtWork/News/switchActive/$1';
		$route['alfredatwork/news/adddeletedate/(:any)'] = 'AlfredAtWork/News/addDeleteDate/$1';
		$route['alfredatwork/news/undoarchivedata/(:any)'] = 'AlfredAtWork/News/undoArchiveData/$1';
		$route['alfredatwork/news'] = 'AlfredAtWork/News';
		// news details
		$route['alfredatwork/newsdetails/updatedata/(:any)'] = 'AlfredAtWork/Newsdetails/updateData/$1';
		$route['alfredatwork/newsdetails/(:any)'] = 'AlfredAtWork/Newsdetails/index/$1';
		// collection
		$route['alfredatwork/collection/insertdata'] = 'AlfredAtWork/Collection/insertData';
		$route['alfredatwork/collection/updatedata/(:any)'] = 'AlfredAtWork/Collection/updateData/$1';
		$route['alfredatwork/collection/switchactive/(:any)'] = 'AlfredAtWork/Collection/switchActive/$1';
		$route['alfredatwork/collection/adddeletedate/(:any)'] = 'AlfredAtWork/Collection/addDeleteDate/$1';
		$route['alfredatwork/collection/undoarchivedata/(:any)'] = 'AlfredAtWork/Collection/undoArchiveData/$1';
		$route['alfredatwork/collection'] = 'AlfredAtWork/Collection';
		// collection details
		$route['alfredatwork/collectiondetails/updatedata/(:any)'] = 'AlfredAtWork/Collectiondetails/updateData/$1';
		$route['alfredatwork/collectiondetails/(:any)'] = 'AlfredAtWork/Collectiondetails/index/$1';
		// products
		$route['alfredatwork/products/insertdata'] = 'AlfredAtWork/Products/insertData';
		$route['alfredatwork/products/switchactive/(:any)'] = 'AlfredAtWork/Products/switchActive/$1';
		$route['alfredatwork/products/adddeletedate/(:any)'] = 'AlfredAtWork/Products/addDeleteDate/$1';
		$route['alfredatwork/products/undoarchivedata/(:any)'] = 'AlfredAtWork/Products/undoArchiveData/$1';
		$route['alfredatwork/products/(:any)'] = 'AlfredAtWork/Products/index/$1';
		// product details
		$route['alfredatwork/productdetails/update_thumb'] = 'AlfredAtWork/Productdetails/updateThumb';
		$route['alfredatwork/productdetails/update_picture/(:any)'] = 'AlfredAtWork/Productdetails/updatePicture/$1';
		$route['alfredatwork/productdetails/update_tags'] = 'AlfredAtWork/Productdetails/updateTags';
		$route['alfredatwork/productdetails/update_color'] = 'AlfredAtWork/Productdetails/updateColor';
		$route['alfredatwork/productdetails/update_gender'] = 'AlfredAtWork/Productdetails/updateGender';
		$route['alfredatwork/productdetails/update_size'] = 'AlfredAtWork/Productdetails/updateSize';
		$route['alfredatwork/productdetails/(:any)'] = 'AlfredAtWork/Productdetails/index/$1';
		// logout
		$route['alfredatwork/logout'] = 'AlfredAtWork/Logout';


// SYSTEME ROUTES
$route['default_controller'] = 'home';
$route['404_override'] = 'AlfredAtWork/Fourofour.php';
$route['translate_uri_dashes'] = FALSE;	