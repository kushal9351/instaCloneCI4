<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/user/login', 'User::login', ['filter' => 'loggedIn']);

$routes->get('/user/signup', 'User::signUp', ['filter' => 'loggedIn']);
$routes->get('/login/logout', 'User::logout');
$routes->post('user/create', 'User::create');
// $routes->get('/user/authWithFB', 'User::authWithFB'); 
$routes->post('/user/searchAndLogin', 'User::searchAndLogin');
// $routes->get('/user/home', 'User::home');
$routes->get('/home/email', 'Home::email');
$routes->get('/user/password/reset', 'User::password_Reset');
$routes->post('/user/email', 'User::email');
$routes->get('/user/password/reset/confirm/(:any)', 'User::confirm_Password_Reset/$1');
$routes->post('/user/password/reset/confirm/(:any)', 'User::confirm_Password_Reset/$1');
// $routes->get('/user/dashboard', 'User::dashboard');
$routes->get('/user/dashboard', 'User::dashboard', ['filter' => 'noLogin']);
$routes->post('/user/editprofile', 'User::submitEditProfile');
$routes->post('/user/postImage', 'User::submitPostImage');
$routes->get('/user/name/(:any)', 'User::showMyProfile/$1');
// ajaxRequest
$routes->get('/user/ajax', 'User::ajaxRequest');
$routes->post('/user/addFollow', 'User::addFollowUnfollowPage');
$routes->post('/user/removeFollowing', 'User::removeFollowingPage');
$routes->post('/user/likeDislike', 'User::likeDislikePage');
$routes->post('/user/submitComment', 'User::submitCommentPage');
$routes->post('/user/showCommentModal', 'User::showCommentModalPage');
// $routes->post('/user/fetchComments', 'User::fetchCommentsPage');
$routes->post('/user/fetchComments', 'User::fetchCommentsPage');
$routes->get('/user/userMsg', 'User::fetchAllUserMsg');












// /user/removeFollowing
// likeDislike

