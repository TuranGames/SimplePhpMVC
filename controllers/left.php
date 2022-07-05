 <?php 
   include_once(ROOT.models."models.php");


	if(isset($_SESSION['login']))
{
	$userIsLoged = true; 
	$arr = array('name' => $_SESSION['login']);
	$logedUser = select_Data("users", $arr)[0];
}else{
	$userIsLoged = false;
}

    

include_once(ROOT.views."\left.php");