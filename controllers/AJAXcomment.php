 <?php 
 include_once("../cfg/config.php");
 include_once(ROOT.models."\models.php");
 
	if(isset($_POST['page']) AND isset($_POST['id']) AND isset($_POST['count']))
{
	$OrderLimit = array("DESC", "$_POST[count]", "3");
	$arr = array('artid' => "$_POST[id]", 'page' => "$_POST[page]");
	$usersComment = select_Data("comments", $arr, $OrderLimit);
 	include_once(ROOT.views."\AJAXcomment.php");
	
}



	if(!empty($_POST['comment'] AND $_POST['commentid']  AND $_POST['pageName'] AND $_POST['currentValue'])){
		if($_POST['comment'] == 'Like'){
			$respectValue = $_POST['currentValue'] + 1;
		}else{
		$respectValue = $_POST['currentValue'] - 1;
		}
	
	$arr = array(
		'respect' => "$respectValue");
	$where = array(
		'id' => "$_POST[commentid]",
		'page' => "$_POST[pageName]");
		$respectComment = update_Data("comments", $arr, $where);
	    $getrespectComment = select_Data("comments", $arr)[0];
	
	echo $getrespectComment['respect'];
	}




	if(!empty($_POST AND $_POST['pageName'] AND $_POST['pageId']))
{
  if(trim($_POST['text']) == ""){
	echo "Textarea is empty";
  }else if(empty($_POST['sender'])){
	echo "Iltimos komentariya yozish uchun Ro'yxatdan o'ting";
  }else{
	$arr = array('id' => NULL, 
		'artid' => $_POST['pageId'],
		'text' => $_POST['text'],
		'name' => $_POST['sender'],
		'image' => $_POST['image'],
		'page' => $_POST['pageName']);
		if(insert_Data("comments", $arr)){
		echo "Done";
		}else{
				echo "Something went wrong:(:(";
		}
	}
}