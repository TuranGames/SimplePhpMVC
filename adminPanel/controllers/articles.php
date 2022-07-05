<?php
include('../../cfg/config.php');
include('../../models/models.php');
if(!empty($_GET)){

if(!empty($_GET['currentArticle'])){
	$Count = get_CountFrom($_GET['currentArticle']);
	$getArticles = select_Data($_GET['currentArticle']); 
}
else{

	$Count = get_CountFrom($_GET['page']);
	$getArticles = select_Data($_GET['page']);
}
 	$lessonInfo = select_Data("pages"); 
 	
}

include('../views/articles.php');
?>
