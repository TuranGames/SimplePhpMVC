<?php
session_start();
 define('ROOT', dirname(dirname(__FILE__)));
	
	// komentariyala sonini topish uchcun
	$OrderLimit = array("DESC", "5", "10");
	$arr = array('artid' => "$_GET[id]", 'page' => "$_GET[page]");
	$commentsCount = get_CountFrom("comments", $arr);
	$arr = array('name' => $_SESSION['login']);
	$usersImage = select_Data("users", $arr)[0];




include(ROOT.views.'comments.php');