<div class="commentBlock">
	<div class="borderText" id="borderText">Komentariyalar(<?=$commentsCount?>)</div>
	<?php if($error) {?>
	<b style="color: red;">Error:  <?=$errorText?></b>
<?php } ?> 
	<div class="allComments" id="allComments">

	<script>

   window.addEventListener('DOMContentLoaded', function(){
    insertAfter('<?php echo $_GET['page']; ?>', '<?php echo $_GET['id']; ?>');
   });
   function AddnewComment(){
  var xhttp = new XMLHttpRequest();
    var pageId = document.getElementById("CompageId").value;
    var pageName = document.getElementById("CompageName").value;
    var sender = document.getElementById("Comsender").value;
    var text = document.getElementById("Comtext").value;
    var message = document.getElementById("message");
	var image = document.getElementById("ComsenderImage").value;
    var infoSend = "pageId="+pageId+"&pageName="+pageName+"&sender=" + sender+"&text=" + text+"&image=" + image;
  
  xhttp.onreadystatechange = function() {
  	 	 if (this.readyState != 4) {
  	 	 	
 message.innerHTML = "Sending Data...";
    }
    if (this.readyState == 4 && this.status == 200) {
    	document.getElementById("alert").style.opacity = "1";
    	 message.innerHTML = this.responseText;
    	if(this.responseText.replace(/\s/g,"") == "Done"){
    		document.getElementById("alert").style.opacity = "0";
    		location.reload();
}
    	
    	
    }
    
  };
  xhttp.open("POST", "controllers/AJAXcomment.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(infoSend);


}

	
</script>
		
	</div>
	<div  class="moreButtonContainer">
	 	<div class="moreButton" id="moreButton" onclick="insertAfter('<?php echo $_GET['page']; ?>', '<?php echo $_GET['id']; ?>');">Ko'proq</div>
	 	</div>
	<div class="borderText">O'z komentariyangizni yozing</div>
	<div class="alert" id="alert" >
    <span class="closebtn" onclick="this.parentElement.style.opacity='0';">&times;</span> 
    <strong>Xatolik!</strong> <span id="message"></span>
   </div>
	<form method="POST">
		<div style="display:flex;justify-content:center;width:100%;">
			<div class="writeCommentContainer">
				<div class="writeCommentButtonsContainer">
					<div class="writeCommentButtons"><b>B</b></div>
					<div class="writeCommentButtons"><i>I</i></div>
					<img src="<?=sysImages.'spisok.png'?>"  class="writeCommentImg">
					<img src="<?=sysImages.'code.png'?>"  class="writeCommentImg">
				</div>
				<input type="hidden" name="sender" id="ComsenderImage" value="<?=$usersImage['image']?>">
				<input type="hidden" name="sender" id="Comsender" value="<?=$_SESSION['login']?>">
				<input type="hidden" name="pageName" id="CompageName" value="<?=$_GET['page']?>">
				<input type="hidden" name="pageId" id="CompageId" value="<?=$_GET['id']?>">
			<textarea class="writeCommentTextarea" id="Comtext" name="text"></textarea></div>
		</div>
		<button class="submitBtn" type="button" onclick="AddnewComment();">Yuborish</button>
		<button class="submitBtn" style="color:#a5acb3;border-color:#a5acb3;"> Ko'rish</button>
	</form>
</div>