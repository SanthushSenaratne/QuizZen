<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'HomepageController';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Login and register

$route['register']['GET'] = 'RegisterController/index';
$route['register']['POST'] = 'RegisterController/submit';

$route['login']['GET'] = 'LoginController/index';
$route['login']['POST'] = 'LoginController/submit';

//logout
$route['logout']['POST'] = 'LogoutController/logout';

//view quizzes
$route['quizzes']['GET'] = 'QuizController/index';

//retrieving question for that quiz
$route['quiz/questions/(:num)']['GET'] = 'QuizQuestionController/questions/$1';
	
//results of that quiz
$route['quiz/evaluate']['POST'] = 'QuizQuestionController/evaluate';

//user profile
$route['profile']['GET'] = 'ProfileController/index';

//creating quiz
$route['createquiz']['GET'] = 'CreateQuizController/index';
$route['quiz/create']['POST'] = 'CreateQuizController/create_quiz';
