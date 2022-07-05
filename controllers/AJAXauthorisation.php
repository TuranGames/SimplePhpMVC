<?php
session_start();
 include_once("../cfg/config.php");
 include_once(ROOT.models."\models.php");

if($_POST['do'] == "login"){
	$arr = array('email' => "$_POST[Loginemail]");
 	$login = select_Data("users", $arr)[0];
 	$CheckLogin = get_CountFrom("users", $arr);

    if($CheckLogin > 0){
   	  if($_POST['Loginpassword'] == $login['parol']){
   	  	 $_SESSION['login'] = $login['name'];
   	  	 echo "Done";
	  }else{
		 echo "parol notogri";}
	  }else{
	     echo "Bunday profil mavjud emas";}
 


}else if($_POST['do'] == "register"){
	$arr = array('email' => "$_POST[regEmail]", 'parol' => "$_POST[regPassword]", 'name' => "$_POST[regName]");
	$Login = array('name' => "$_POST[regName]");
	$Email = array('email' => "$_POST[regEmail]");
 	$CheckLogin = get_CountFrom("users", $Login);
 	$CheckEmail = get_CountFrom("users", $Email);


  if(!empty($_POST['regEmail'] AND $_POST['regPassword'] AND $_POST['regName'] AND $_POST['Checkparol'])){
 	if ($_POST['regPassword'] != $_POST['Checkparol']) {
		echo "Parol bir xil emas!!";	
	}else if ($CheckEmail > 0 AND $CheckLogin > 0) {
		echo "Boshqa email va parol tanlang!!";
	}else if ($CheckEmail > 0) {
		echo "Boshqa email tanlang!!";
	}else if ($CheckLogin > 0) {
		echo "Boshqa login tanlang!!";
	}else if (filter_var($_POST['regEmail'], FILTER_VALIDATE_EMAIL) === false) {
		echo "Noto'g'ri email (example@gmail.com)";
	}else{
		
		insert_Data("users", $arr);
		 $_SESSION['login'] = $_POST['regName'];
		  echo "Done";
		 
	}
  }else{
  	echo "To'dirilmagan joylar mavjud!!";
  }
}





if($_POST['do'] == "unlogin"){
        var_dump("unlogin");
    	session_destroy();

}

 
