<?php 
// The big idea: use WordPress' regular [clunky] nature 
// to do what it does, but incorporate reusable OO components

get_header();

$hello = new App_Component_HelloWorld();
$hello->go();

$users = new App_Model_Users();
$users->greet("some user");

$usersModel = new App_Model_Users();
$usersModel->greet("some other user from some other model object");

get_footer();
