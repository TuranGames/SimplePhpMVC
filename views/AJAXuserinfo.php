<?php if($showUserInfo == "Profile"){ ?>

		<div style="box-sizing:border-box;display:flex;justify-content:center;align-items:center;flex-direction:column;width:100%;padding: 40px 20px;">
	<div ><img src="<?=Avatars.$UserInfo['image']?>" id="blahh" style="box-sizing:border-box;width:100px;height:100px;border-radius:50px;"></div>
	<div style="text-align:center;font-size: 13px;margin-top:15px;color: #9099a3;width:100%;line-height: 1.3em;">
        Sizning rasmingiz.<br>Rasmning joyi <br> 2 megabaytdan ko'p bolishi mumkin emas.
      </div>
	   <input type='file' id="image" onchange="readURL(this);" name="uploadedFile">
	   <input type='hidden'  name="changer" id='ChangerUser' value="<?php echo $_POST['user']; ?> ">
     <div id="imagePlace" style="width:100%;">
     	
     	 <div class="container" id="hideContainer" style="height:20px">
  		<div class="skills html" style="width:0%;" id="hideContainerValue">0%</div>
		</div>

     </div>
	  <div style="display:flex;width:100%;justify-content:center;margin-top:15px;">
		   <button class="submitBtn" type="button" onclick="sendData()">
          Joylash
          </button>
	  <button class="submitBtn" type="button" onclick="resetImage('<?php echo $Row[image]; ?>');" style="color:#a5acb3;border-color:#a5acb3;">
          O'chirish
          </button>
		</div>
		</div>


		  <div style="display:flex;flex-direction:column;width:100%;">
		  <label>Ismingiz</label>
		  <input type="text" class="setting" id="firstName" value="<?=$UserInfo['firstName']?>">
		  <label>Familiyangiz</label>
		  <input type="text" class="setting" id="secondName" value="<?=$UserInfo['secondName']?>">
		  <label>Ozingiz haqida (qisqacha)</label>
		  <input type="text" class="setting" id="about" value="<?=$UserInfo['about']?>">
		  <label>Email</label>
		  <input type="text" class="setting" value="<?=$UserInfo['email']?>" id="email">
		  <label>Telefon raqamingiz</label>
		  <input type="text" class="setting" value="<?=$UserInfo['number']?>" id="number">
		  <input type="hidden" class="setting" value="<?=$UserInfo['id']?>" id="usersId">
		  </div>
		  <button type="buttom" onclick="updateProfile();" class="submitBtn">O'zgartirish</button>
		  <div id="contexttPlace" style="text-align: center;"></div>



<?php  }else if($showUserInfo == "Manuals"){ ?>

<div style="box-sizing:border-box;display:flex;justify-content:center;align-items:center;flex-direction:column;width:100%;padding: 40px 20px;">
  <div class="achievments" style="    background-color: #03A9F4;width:140px;height:140px;"><img src="<?=sysImages.'adles.png'?>" style="height:120px;"></div>
  <div style="text-align:center;font-size: 17px;margin-top:15px;margin-bottom:10px;
    color: #555;width:100%;line-height: 1.3em;font-weight:bold;">
    Darslar yo'q
  </div>
  <div style="color: #333;
    font-size: 15px;margin-bottom:20px;
  line-height: 1.5em;">Ayni paytda siz birorta ham dars qo'shmadingiz</div>
  <div><button class="submitBtn" style="margin-bottom:20px;margin-right:0px;">
    Qo'shish
  </button></div>
  <hr>
  <div style="align-self:flex-start;    font-size: 22px;
    font-weight: normal;
  color: #555;">Boshqa darslar</div>
  <div class="codeContainer" style="justify-content:space-between;display:flex;;width:100%;border-bottom:1px  solid #f3f3f3;    padding: 10px 0 5px 0;">
    <div style="display:flex;">
      <div style="width:45px;height:45px;background-color:#3496D9;margin:0px 10px 0px 0;"></div>
      <div style="display:flex;flex-direction:column;">
        <div style="    color: #777;    word-wrap: break-word;
        font-size: 14px;">Even numbers: by filter method</div>
        <div style="color: #B0B0B0;    margin: 5px 0 10px 0;
        font-size: 12px;">Last Modified: 2 days ago</div>
        <div>+3</div>
      </div>
    </div>
    <div >s</div>
  </div>
  <div class="codeContainer" style="justify-content:space-between;display:flex;;width:100%;border-bottom:1px  solid #f3f3f3;    padding: 10px 0 5px 0;">
    <div style="display:flex;">
      <div style="width:45px;height:45px;background-color:#3496D9;margin:0px 10px 0px 0;"></div>
      <div style="display:flex;flex-direction:column;">
        <div style="    color: #777;    word-wrap: break-word;
        font-size: 14px;">Even numbers: by filter method</div>
        <div style="color: #B0B0B0;    margin: 5px 0 10px 0;
        font-size: 12px;">Last Modified: 2 days ago</div>
        <div>+3</div>
      </div>
    </div>
    <div >s</div>
  </div>
  <div class="codeContainer" style="justify-content:space-between;display:flex;;width:100%;border-bottom:1px  solid #f3f3f3;    padding: 10px 0 5px 0;">
    <div style="display:flex;">
      <div style="width:45px;height:45px;background-color:#3496D9;margin:0px 10px 0px 0;"></div>
      <div style="display:flex;flex-direction:column;">
        <div style="    color: #777;    word-wrap: break-word;
        font-size: 14px;">Even numbers: by filter method</div>
        <div style="color: #B0B0B0;    margin: 5px 0 10px 0;
        font-size: 12px;">Last Modified: 2 days ago</div>
        <div>+3</div>
      </div>
    </div>
    <div >s</div>
  </div>
  <div class="codeContainer" style="justify-content:space-between;display:flex;;width:100%;border-bottom:1px  solid #f3f3f3;    padding: 10px 0 5px 0;">
    <div style="display:flex;">
      <div style="width:45px;height:45px;background-color:#3496D9;margin:0px 10px 0px 0;"></div>
      <div style="display:flex;flex-direction:column;">
        <div style="    color: #777;    word-wrap: break-word;
        font-size: 14px;">Even numbers: by filter method</div>
        <div style="color: #B0B0B0;    margin: 5px 0 10px 0;
        font-size: 12px;">Last Modified: 2 days ago</div>
        <div>+3</div>
      </div>
    </div>
    <div >s</div>
  </div>
  <div class="codeContainer" style="justify-content:space-between;display:flex;;width:100%;border-bottom:1px  solid #f3f3f3;    padding: 10px 0 5px 0;">
    <div style="display:flex;">
      <div style="width:45px;height:45px;background-color:#3496D9;margin:0px 10px 0px 0;"></div>
      <div style="display:flex;flex-direction:column;">
        <div style="    color: #777;    word-wrap: break-word;
        font-size: 14px;">Even numbers: by filter method</div>
        <div style="color: #B0B0B0;    margin: 5px 0 10px 0;
        font-size: 12px;">Last Modified: 2 days ago</div>
        <div>+3</div>
      </div>
    </div>
    <div >s</div>
  </div>
</div>



<?php }else if($showUserInfo == "Codes"){ ?>
<div style="box-sizing:border-box;display:flex;justify-content:center;align-items:center;flex-direction:column;width:100%;padding: 40px 20px;">
  <div class="achievments" style="    background-color: #5a7c8d;justify-content:center;display:flex;align-items:center;height:140px;width:140px;box-sizing:border-box;"><img src="<?=sysImages.'cd.png'?>" style="height:55%;"></div>
  <div style="text-align:center;font-size: 17px;margin-top:15px;margin-bottom:10px;
    color: #555;width:100%;line-height: 1.3em;font-weight:bold;">
    Kodlar yo'q
  </div>
  <div style="color: #333;
    font-size: 15px;margin-bottom:20px;
  line-height: 1.5em;">Ayni paytda siz birorta ham kod qo'shmadingiz</div>
  <div style="margin-bottom:20px;"><button class="submitBtn" style="margin-right:0px;">
    Qo'shish
  </button></div>
  <hr>
  <div style="align-self:flex-start;    font-size: 22px;
    font-weight: normal;
  color: #555;">Boshqa kodlar</div>
  <div class="codeContainer" style="justify-content:space-between;display:flex;;width:100%;border-bottom:1px  solid #f3f3f3;    padding: 10px 0 5px 0;">
    <div style="display:flex;">
      <div style="width:45px;height:45px;background-color:#3496D9;margin:0px 10px 0px 0;"></div>
      <div style="display:flex;flex-direction:column;">
        <div style="    color: #777;    word-wrap: break-word;
        font-size: 14px;">Even numbers: by filter method</div>
        <div style="color: #B0B0B0;    margin: 5px 0 10px 0;
        font-size: 12px;">Last Modified: 2 days ago</div>
        <div>+3</div>
      </div>
    </div>
    <div >s</div>
  </div>
  <div class="codeContainer" style="justify-content:space-between;display:flex;;width:100%;border-bottom:1px  solid #f3f3f3;    padding: 10px 0 5px 0;">
    <div style="display:flex;">
      <div style="width:45px;height:45px;background-color:#3496D9;margin:0px 10px 0px 0;"></div>
      <div style="display:flex;flex-direction:column;">
        <div style="    color: #777;    word-wrap: break-word;
        font-size: 14px;">Even numbers: by filter method</div>
        <div style="color: #B0B0B0;    margin: 5px 0 10px 0;
        font-size: 12px;">Last Modified: 2 days ago</div>
        <div>+3</div>
      </div>
    </div>
    <div >s</div>
  </div>
  <div class="codeContainer" style="justify-content:space-between;display:flex;;width:100%;border-bottom:1px  solid #f3f3f3;    padding: 10px 0 5px 0;">
    <div style="display:flex;">
      <div style="width:45px;height:45px;background-color:#3496D9;margin:0px 10px 0px 0;"></div>
      <div style="display:flex;flex-direction:column;">
        <div style="    color: #777;    word-wrap: break-word;
        font-size: 14px;">Even numbers: by filter method</div>
        <div style="color: #B0B0B0;    margin: 5px 0 10px 0;
        font-size: 12px;">Last Modified: 2 days ago</div>
        <div>+3</div>
      </div>
    </div>
    <div >s</div>
  </div>
  <div class="codeContainer" style="justify-content:space-between;display:flex;;width:100%;border-bottom:1px  solid #f3f3f3;    padding: 10px 0 5px 0;">
    <div style="display:flex;">
      <div style="width:45px;height:45px;background-color:#3496D9;margin:0px 10px 0px 0;"></div>
      <div style="display:flex;flex-direction:column;">
        <div style="    color: #777;    word-wrap: break-word;
        font-size: 14px;">Even numbers: by filter method</div>
        <div style="color: #B0B0B0;    margin: 5px 0 10px 0;
        font-size: 12px;">Last Modified: 2 days ago</div>
        <div>+3</div>
      </div>
    </div>
    <div >s</div>
  </div>
  <div class="codeContainer" style="justify-content:space-between;display:flex;;width:100%;border-bottom:1px  solid #f3f3f3;    padding: 10px 0 5px 0;">
    <div style="display:flex;">
      <div style="width:45px;height:45px;background-color:#3496D9;margin:0px 10px 0px 0;"></div>
      <div style="display:flex;flex-direction:column;">
        <div style="    color: #777;    word-wrap: break-word;
        font-size: 14px;">Even numbers: by filter method</div>
        <div style="color: #B0B0B0;    margin: 5px 0 10px 0;
        font-size: 12px;">Last Modified: 2 days ago</div>
        <div>+3</div>
      </div>
    </div>
    <div >s</div>
  </div>
</div>



	<?php } ?>