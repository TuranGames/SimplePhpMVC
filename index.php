<?php
session_start();
 include_once("cfg/config.php");?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title> Dasturlashni biz bilan birga o'rganing </title>
  <link href="main.css" rel="stylesheet">
  <script>
  function loadDoc() { 
  
  var xhttp = new XMLHttpRequest();
  var login = document.getElementById('login');
   var parol = document.getElementById('password');
   var regLogin = document.getElementById('Reglogin');
   var regParol = document.getElementById('Regparol');
   var regEmail = document.getElementById('Regemail');
    var currentName = document.getElementById("button").innerHTML;
   var regchekParol = document.getElementById('Checkparol');
if(login != null && parol != null){
   var infoSend = "Loginemail="+login.value+"&Loginpassword="+parol.value+"&do=login";
 }else{
  var infoSend = "regName="+regLogin.value+"&regPassword="+regParol.value+"&regEmail="+regEmail.value+"&Checkparol="+regchekParol.value+"&do=register";
 }
    
  xhttp.onreadystatechange = function() {
    if (this.readyState != 4) {

 document.getElementById("button").innerHTML = "<img style='height:100%;width:25px;height:25px;align:center;'src='images/img/loading.gif'>";

    }else{document.getElementById("button").innerHTML = currentName;}
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("alert").style.opacity = "1";
      document.getElementById("message").innerHTML = this.responseText;
      if(this.responseText == 'Done'){
        location.reload();
      }
    }
    
  };
  xhttp.open("POST", "controllers/AJAXauthorisation.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(infoSend);
}
  function unlogin(){
    var command = "unlogin"
       var infoSend = "do="+command ;
   
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     location.reload();   
    }
    
  };
  xhttp.open("POST", "controllers/AJAXauthorisation.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(infoSend);

  }

  function likeComment(fnca, cId, pName, target){
    if(fnca == "Dislike"){
      var param = target.previousElementSibling; 
       }else{
      var param = target.nextElementSibling;
       }
     
       var infoSend = "comment="+fnca+"&commentid="+cId+"&pageName=" + pName + "&currentValue=" + param.innerHTML;
   
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     
      if(this.responseText == ""){}else{param.innerHTML = this.responseText;}
   
    }
    
  };
  xhttp.open("POST", "controllers/AJAXcomment.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(infoSend);

  }
      function insertAfter(page, id) {
  var count = document.getElementsByClassName('commentContainer').length; // allComments ichida nechta komentariya borligini topish
    var element = document.createElement("div");
    var xhttp = new XMLHttpRequest();
    var infoSend = "page="+page+"&id="+id+"&count=" + count;
    var moreButton = document.getElementById("moreButton");  
  xhttp.onreadystatechange = function() {
     if (this.readyState != 4) {
 moreButton.innerHTML = "<img style='width:25px;height:25px;align:center;padding:0px 20px;'src='images/img/loading.gif'>";

    }else{moreButton.innerHTML = "Ko'proq";}
    if (this.readyState == 4 && this.status == 200) {
      if(this.responseText.replace(/\s/g,"") == ""){ 
        moreButton.className = "";
        moreButton.onclick = "";
        moreButton.innerHTML = "Boshqa komentariya yoq";
      }else{
     element.innerHTML = this.responseText;
     document.getElementById('allComments').appendChild(element);}
    }
    
  };
  xhttp.open("POST", "controllers/AJAXcomment.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(infoSend);
  

}
  				function changeSettings(context, page){
	var elements = document.getElementsByClassName('clicked');
  while(elements.length > 0)
  {
    elements[0].classList.remove('clicked');
  }
  document.getElementById(context).className += " clicked";
  var xhttp = new XMLHttpRequest();
  var contextPlace = document.getElementById('settingPlace');
    var infoSend = "settings="+ context + "&user=" + page;
  
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	if(this.responseText == ""){console.log(this.responseText);}else{contextPlace.innerHTML = this.responseText; console.log(this.responseText);}
   
    }
    
  };
  xhttp.open("POST", "controllers/AJAXuserinfo.php", false);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(infoSend);


	}

		function updateProfile(){
  
var xhttp = new XMLHttpRequest();
  var firstName = document.getElementById('firstName').value;
  var secondName = document.getElementById('secondName').value;
  var about = document.getElementById('about').value;
  var email = document.getElementById('email').value;
  var number = document.getElementById('number').value;
  var contexttPlace = document.getElementById('contexttPlace');
  var changer = document.getElementById('usersId').value;
    var infoSend = "firstName="+ firstName + "&secondName=" + secondName + "&about=" + about + "&email=" + email + "&number=" + number + "&changer=" + changer;
  
  xhttp.onreadystatechange = function() {
  	 	 if (this.readyState != 4) {
 contexttPlace.innerHTML = "<img style='width:25px;height:25px;align:center;padding:0px 20px;'src='images/img/loading.gif'>";

    }else{}
    if (this.readyState == 4 && this.status == 200) {
    	if(this.responseText == ""){console.log(this.responseText);}else{contexttPlace.innerHTML = "<img style='width:65px;height:65px;align:center;padding:0px 20px;'src='images/img/done.gif'>"; console.log(this.responseText);}
   
    }
    
  };
  xhttp.open("POST", "controllers/AJAXuserinfo.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(infoSend);


}
        function changeContext(context, page){
  var elements = document.getElementsByClassName('clicked');
  while(elements.length > 0)
  {
    elements[0].classList.remove('clicked');
  }
  document.getElementById(context).className += " clicked";
  var xhttp = new XMLHttpRequest();
  var contextPlace = document.getElementById('contextPlace');
    var infoSend = "infotitle="+ context + "&page=" + page;
  
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if(this.responseText == ""){console.log(this.responseText);}else{contextPlace.innerHTML = this.responseText;console.log(this.responseText);}
   
    }
    
  };
  xhttp.open("POST", "controllers/AJAXcontext.php", false);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(infoSend);


  }
function sendData(){
  var formData = new FormData();
var fileInput = document.getElementById('image');
var pprogres = document.getElementById('imagePlace');
var hideContainer = document.getElementById('hideContainer');
var changer = document.getElementById('ChangerUser').value;
var hideContainerValue = document.getElementById('hideContainerValue');
var file = fileInput.files[0];
var percentage = 0;
var contexttPlace = document.getElementById('contexttPlace');

  formData.append('uploadedFile', file);
formData.append('changer', changer);
  var xhr = new XMLHttpRequest();
   xhr.upload.onprogress = function(event) {
   	hideContainerValue.style.opacity = "1";
hideContainerValue.style.transition = "1.5s";
	percentage = Math.round(event.loaded/event.total*100);
	console.log(percentage);
	hideContainerValue.innerHTML = percentage + "%";
    hideContainerValue.style.width = percentage + "%";
    if(hideContainerValue.style.width == "100%"){
    	setTimeout(function(){
     hideContainerValue.innerHTML = "Yuklandi";
     setTimeout(function(){
     hideContainerValue.style.transition = "1.5s";
     hideContainerValue.style.opacity = "0";
     hideContainerValue.style.width = "0%";
     percentage = 0;
 },500);
},1500);
    	


	
    }
  }

    xhr.onreadystatechange = function() {
      console.log(this.readyState);
    if (this.status == 200) {
      contexttPlace.innerHTML = this.responseText;
    } else {

    }
    
  };
  // Add any event handlers here...
  xhr.open('POST', 'controllers/AJAXuserinfo.php', true);
  xhr.send(formData);


}
	function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    document.getElementById('blahh').setAttribute('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function resetImage(image) {
           console.log(image);
                    document.getElementById('blahh').setAttribute('src', image);
                    document.getElementById('image').value = "";
               }

  </script>

 </head>
 <body style="margin:0px;">

<?php include_once(ROOT.views."header.php"); ?>
	<div style="display:flex;">
	<?php
	 include_once(ROOT.controllers."left.php"); ?>
	<main>  
	<div class="mainHead">
	<input type="search" autocomplete="off" placeholder="Savol, maqola, teg yoki foydalanuvchini toping" class="mainHeadSearch" >
	</div>

	<div style="flex:99%;">
	 <?php include_once(ROOT.controllers."middle.php"); ?>
	 <div style="height:40px;width:100%;box-sizing:border-box;padding:10px 20px;">footer</div>
	</div>
	</main>

	 <?php include_once(ROOT.views."Right.php");
    ?>
	
	</div>


 </body>
   		  <script>	

  	
</script>
</html>