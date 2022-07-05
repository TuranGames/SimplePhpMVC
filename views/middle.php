<?php if ($renderPage == "index") { ?>
	<div style="position: relative;padding: 0 30px;background: #fff;">
  <h1 >
	 Barcha teglar
  </h1>
  
  
</div>

	<div class="mainLessonListContainer"> 
		<?php foreach($articles as $article): ?>
		
		<div class="mainLesson" style="">
	<div style="display:flex;flex-direction:column;">
	<a href="?page=<?=$article['name']?>" style="text-decoration:none;color:inherit;">
	<div style="display:flex;padding: 15px 15px 0;">
	<div><img src="<?=sysImages.$article['image']?>" class="mainLessonImg"></div>
	<div style="display;flex;flex-direction:column;">
	<p  class="mainLessonTitle"><?=$article['name']?></p>
	<p style="margin-top:5px;margin-bottom:5px;font-size:12px;"><?=$article['quickDescription']?></p>
	</div>
	</div>
		<div class="mainLessonButtonContainer">
		<button class="mainLessonButton">Ko'proq</button>
	</div></a>
	<div class="mainLessonTagsContainer">
	<div class="mainLessonTagContainer">
		<div class="mainLessonNumberTag">O'rganuvchilar</div>
	<div class="mainLessonStringTag"><?=$article['Studentnumber']?></div>
	</div>
	<div class="mainLessonTagContainer">
		<div class="mainLessonNumberTag">Darslar</div>
	<div class="mainLessonStringTag"><?=$article['LessonsNumber']?></div></div>
	<div class="mainLessonTagContainer">
		<div class="mainLessonNumberTag">Mashqlar</div>
	<div class="mainLessonStringTag"><?=$article['quizzesNumber']?></div></div>
	</div>
	</div>
	</div>
	<?php endforeach; ?>
		</div>
											
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
											<?php }else if ($renderPage == "lessonInfo"){ ?>



		<div class="lessonInfoContainer">
	<div style="display:flex;flex-direction:column;"><div >
	<img class="lessonImage" src="images/img/<?=$lessonInfo[0]['image']?>">
	</div>
	<div class="lessonName"><?=$lessonInfo[0]['name']?></div></div>
	<div style="display:flex;margin-top:20px;">
	<div class="lessonContainer">
	<div class="lessonNumber">
     <?=$lessonInfo[0]['Studentnumber']?>         
    </div>
	<div class="lessonString">
	O'rganuvchilar
	</div>
	</div>
	<div class="lessonContainer">
	<div class="lessonNumber">
     <?=$lessonInfo[0]['LessonsNumber']?>         
    </div>
	<div class="lessonString">
	Darslar
	</div>
	</div>
	<div class="lessonContainer">
	<div class="lessonNumber">
     <?=$lessonInfo[0]['quizzesNumber']?>         
    </div>
	<div class="lessonString">
	Mashqlar
	</div>
	</div>
	
	</div>
	<div style="margin:10px 0px;display:flex;flex-wrap: wrap;justify-content:center;">
<?php foreach($users as $userInfo): ?>
	<div>
		<a href="?page=users&id=<?=$userInfo['id']?>" style="text-decoration:none;color:inherit;">
		<img src="<?=Avatars.$userInfo['image']?>" class="followerUsers">
	</a>
	</div>
			<?php endforeach ?>
	
				</div>
	<div style="display:flex;justify-content:center;">
		<button onclick="beFollower('','HTML');" style="color: #2d72d9;border-color: #2d72d9;" class="submitBtn">
            A'zo Bo'lish
        </button>
        <div id="setText"></div>
    </div>
	<div style="padding:20px 20px;line-height: 1.5;">
		 	</div>
	</div>
	<script>

	 document.addEventListener('DOMContentLoaded', function(){
	 	changeContext('lessons','HTML');
	 });

	</script>
	<div style="padding: 0px 25px;">
		<div class="chTagContainer">
			<div class="chTag" id="lessons"  onclick="changeContext('lessons','HTML')" >DARSLAR</div>
			<div class="chTag" id="users" onclick="changeContext('users', 'HTML')"  >O'RGANUVCHILAR</div>
			<div class="chTag" id="quizzes" onclick="changeContext('quizzes', 'HTML')">MASHQLAR</div>


		</div>
	</div>
	
	<div style="padding: 20px 40px;font-weight:700;width:100%;box-sizing:border-box;" id="contextPlace">	

	
	</div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

												<?php }else if ($renderPage == "article"){  ?>



<div style="position: relative;padding: 0 30px;background: #fff;">
<div class="articleHead" id="section">
  	<div>
     <span style="color:#18bc9c;">
  	  <a href="#" class="articlePlace">Bosh Sahifa</a> / 
  	  <a href="#" class="articlePlace"><?=$_GET['page']?></a> / 
  	  <a href="#" class="articlePlace"><?=$article[0]['title']?></a>
     </span>
    </div>
     
    <div> 
	 <div class="articleAuthor" style="width:100%;">
	  <span class="articleAuthorText">Muallif : </span><span class="articleAuthorText">1</span> 
     </div>
    </div>
</div>
</div>



<div class="articleContainer">
	<div  class="articleTagContainer">
	  <img src="<?=sysImages.'javascript.png'?>" class="articleTagImg"><a href="#" class="articleTag">javaScript</a>
	  <a href="#" class="articleTag">vue.js</a>
	  <a href="#" class="articleTag">html</a>
	  <a href="#" class="articleTag">css</a>
	</div>
	
	<div style="line-height: 1.5em;">
	  <h2 style="margin-top:0px;"><?=$article[0]['title']?></h2>
	  <div><?=$article[0]['full-text']?></div>	
	</div>
	
	<div class="articleInfoContainer">
	  <div class="articleInfoDate"><?=$article[0]['date']?></div>
	  <div class="articleInfoView"><?=$article[0]['Views']?> marta ko'rilgan</div>
	</div>
</div>

	<div class="nextPrevContainer" style="box-sizing:border-box;padding:20px 40px;">
	   <a class="next">❮ Oldingi</a>
       <a class="next">Keyingi ❯</a>
 	</div>
 	<?php include_once('controllers/comments.php'); ?>



<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

												<?php }else if ($renderPage == "userInfo"){ ?>
												
	<script>

	   window.addEventListener('DOMContentLoaded', function(){
    changeSettings('Profile','<?="$_GET[id]"?>');
   });

	</script>


 <div style="position: relative;padding: 0 30px;background: #fff;">
  <h1 style="     margin: 0;padding: 23px 0; white-space: nowrap; color: #333; font-family: 'PT Sans',Arial,sans-serif;font-size: 21px;font-weight: 700;
    line-height: 1em; overflow: hidden;text-overflow: ellipsis;">
	Sozlamalar
  </h1>
  
  
</div>

		
	<div class="articleContainer">
	
	<div class="chTagContainer">
	
	<div class="chTag" id="Profile" onclick="changeSettings('Profile','<?="$_GET[id]"?>');">Profil</div>
	<div class="chTag" id="Manuals" onclick="changeSettings('Manuals','<?="$_GET[id]"?>');">Qo'shgan Darslar</div>
	<div class="chTag" id="Codes" onclick="changeSettings('Codes','<?="$_GET[id]"?>');">Qo'shgan Kodlar</div>
	
	</div>
	<div id="settingPlace" style="width:100%;"></div>
		  
	</div>
												<?php }else if ($renderPage == "login"){ ?>

 <div style="position: relative;padding: 0 30px;background: #fff;">
  <h1 >
	Kirish
  </h1>
</div>
	
 <div class="articleContainer" style="flex-direction: column;">
   <div class="alert" id="alert" >
    <span class="closebtn" onclick="this.parentElement.style.visibility='hidden';">&times;</span> 
    <strong>Xatolik!</strong> <span id="message"></span>
   </div>
<div>
	<form action="check.php" method="POST" style="    padding-top: 10px;
    box-sizing: border-box;">
        <input type="hidden" name="state" value="">
          <div class="form__field s-field">
            <label class="labell">E-mail</label>
            <input type="email" name="Loginemail" id="login" class="inputt">
          </div>
          <div style="    margin-top: 31px;">
            <label class="labell">Parol</label>
            <input type="password" name="Loginpassword" id="password" class="inputt">
          </div>

          <div style="margin-top: 28px;">
          	<div style="width:100%;display:flex;justify-content: center;">
            <button class="buttonn" id="button" style="width:50%;" type="button" onclick="loadDoc()">
              Kirish
            </button>
        	</div>
            <a href="#" class="reminder">
              Parolingizni esdan chiqardingizmi?
            </a>
          </div>
      </form>
  </div>
  </div>
												<?php }else if ($renderPage == "register"){ ?>

 <div style="position: relative;padding: 0 30px;background: #fff;">
  <h1 >
	Ro'yxatdan o'tish
  </h1>
</div>


<div class="articleContainer" style="flex-direction: column;">
 <div class="alert" id="alert" >
  <span class="closebtn" onclick="this.parentElement.style.opacity='0';">&times;</span> 
  <strong>Xatolik!</strong> <span id="message"></span>
</div>
	
	<form  style="    padding-top: 10px;
    box-sizing: border-box;">
        <input type="hidden" name="state" value="">
          <div class="form__field s-field">
            <label class="labell">E-mail</label>
            <input type="email" name="regEmail" class="inputt" id="Regemail" >
          </div>
          <div style="    margin-top: 31px;">
            <label class="labell">NickName</label>
            <input type="text" name="regName" class="inputt" id="Reglogin" >
          </div>
          <div style="    margin-top: 31px;">
            <label class="labell">Parol</label>
            <input type="password" name="regPassword" class="inputt" id="Regparol" >
          </div>
		  <div style="    margin-top: 31px;">
            <label class="labell">Parolni takrorlang</label>
            <input type="password" class="inputt" id="Checkparol" >
          </div>
          <div style="margin-top: 28px;">
           <button class="buttonn" id="button" type="button" onclick="loadDoc()">
              Royxatdan o'tish
            </button>
          </div>
      </form>
</div>
<?php } ?>
	