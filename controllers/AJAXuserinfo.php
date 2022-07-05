 
 <?php 
 include_once("../cfg/config.php");
 include_once(ROOT.models."\models.php");


	if($_POST['settings'] == 'Profile' AND isset($_POST['user']))
{
	$arr = array('id' => "$_POST[user]");
	$UserInfo = select_Data("users", $arr)[0]; 
	$showUserInfo = "Profile"; 
}else 
	if($_POST['settings'] == 'Manuals' AND isset($_POST['user']))
	{
	$UserInfo = select_Data("users");
	$showUserInfo = "Manuals";	
}else 
	if($_POST['settings'] == 'Codes' AND isset($_POST['user']))
	{
	$UserInfo = select_Data("users");
	$showUserInfo = "Codes";	
}else 
	if(isset($_POST['changer']))
	{
		if(empty($_FILES)){
		$arr = array(
		'firstName' => "$_POST[firstName]",
		'secondName' => "$_POST[secondName]",
		'about' => "$_POST[about]",
		'email' => "$_POST[email]",
		'number' => "$_POST[number]",
		'name' => "$_POST[changer]",);
		$where = array('id' => "$_POST[changer]");
		$UpdateProfile = update_Data("users", $arr, $where);
		}
	else if(!empty($_FILES)){
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $HashedName = md5(date('Y-m-d H:i:s:u').$fileName);
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
  
    $newFileName = $HashedName . '.' . $fileExtension;
    $allowedfileExtensions = array('jpg', 'gif', 'png');
    if (in_array($fileExtension, $allowedfileExtensions))
    {
      
      $uploadFileDir = ROOT.Avatars."/";
      $dest_path = $uploadFileDir . $newFileName;
   		if(move_uploaded_file($fileTmpPath, $dest_path)) 
         {
       	$arr = array('image' => "$newFileName");
		$where = array('id' => "$_POST[changer]");
		$UpdateProfile = update_Data("users", $arr, $where);
      	 }
      	 else{var_dump("o'zgarmadi rasm");}
    }
 
      
  }
}



include_once(ROOT.views."\AJAXuserinfo.php");

