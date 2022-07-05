 <?php 
 include_once("../cfg/config.php");
 include_once(ROOT.models."\models.php");


	if($_POST['infotitle'] == 'lessons' AND isset($_POST['page']))
{
	$lessonList = select_Data("$_POST[page]"); 
	$showContext = "page"; 
}else 
	if($_POST['infotitle'] == 'users' AND isset($_POST['page']))
	{
	$UserList = select_Data("users");
	$showContext = "users";
}else 
	if($_POST['infotitle'] == 'quizzes' AND isset($_POST['page']))
	{
	$QuizesList = select_Data("$_POST[page]");
	$showContext = "quizzes";	
}

include_once(ROOT.views."\AJAXcontext.php");