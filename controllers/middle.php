<?php
   include_once(ROOT.models."models.php");

 
if($_GET['page'] != "users" AND $_GET['page'] != "login" AND $_GET['page'] != "register"){
 if (empty($_GET) AND $_GET['page'] != "users") { 
 	$articles = select_Data("pages");
 	$renderPage = "index";

}else if (!empty($_GET['page']) AND empty($_GET['id'])){
 	$users = select_Data("users");
 	$arr = array('name' => "$_GET[page]");
 	$lessonInfo = select_Data("pages", $arr);    
 	$renderPage = "lessonInfo";

}else if (!empty($_GET['page']) AND !empty($_GET['id'])){
	$arr = array('id' => "$_GET[id]");
	$article = select_Data("$_GET[page]", $arr); 
	$renderPage = "article";

}
}else{

  if ($_GET['page'] == "users" AND !empty($_GET['id'])){
	$users = select_Data("users");  
 	$renderPage = "userInfo";
	
}else if ($_GET['page'] == "login" AND empty($_GET['id'])){
	if(empty($_SESSION['login'])){
 	$renderPage = "login";
 }else{
 	echo "<script>document.location.replace('/'); </script>";
 }
	
}else if ($_GET['page'] == "register" AND empty($_GET['id'])){
 		if(empty($_SESSION['login'])){
 	$renderPage = "register";
 }else{
 	echo "<script>document.location.replace('/'); </script>";
 }
	
}

	}

include(ROOT.views.'middle.php');