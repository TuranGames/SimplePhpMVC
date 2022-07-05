
<?php if($showContext == "page"){ ?>
	<div class="infoTitle">Barcha Darslar</div>
	<?php $i=0; foreach($lessonList as $lesson): $i++;?>
     	<a href="?page=<?=$lesson['page']?>&id=<?=$lesson['id']?>" style="text-decoration:none;color:inherit;">
	<div class="nextLessons">

	<div style="display:inline-block;">
		<span style="padding-right: 10px; border-right: 1px solid #f0f0f0;"><?=$i?></span> 
		<span><?=$lesson['title']?></span>
	</div>
	<div style="background-color: #f0f0f0;border-radius: 5px;padding:5px 25px;"><?=$lesson['Views']?></div>

	</div>
		</a>
	<?php endforeach ?>


<?php }else if($showContext == "users"){ ?>


		<div class="infoTitle">Foydalanuvchilar</div>
	 <?php $i=0; foreach($UserList as $user): $i++;?>
	 <a href="?page=users&id=<?=$user['id']?>" style="text-decoration:none;color:inherit;">
	<div class="nextLessons">
	<div style="display:flex;align-items:center;">
		<span style="padding-right: 0px;">
			<?php echo $i; ?>
				</span>
				<img src="<?=Avatars.$user['image']?>" class="leftSideProfileImg" style="margin:0px 10px 0px 20px;"> 
				<span><?=$user['name']?>
				</span>
			</div>
	<div style="display:flex;align-items:center;color: #1abc9c;"><?=$user['points']?> XP</div>
	</div></a>
<?php endforeach ?>


<?php }else if($showContext == "quizzes"){ ?>

	
<div class="infoTitle">Mashqlar</div>
 <?php $i=0; for ($i=0; $i < 6; $i++): ?>
<div class="codeContainer" style="justify-content:space-between;display:flex;;width:100%;border-bottom:1px  solid #f3f3f3;    padding: 10px 0 5px 0;">
<div style="display:flex;">
<div style="width:45px;height:45px;background-color:#3496D9;margin:0px 10px 0px 0;"></div>
<div style="display:flex;flex-direction:column;">
<div style="    color: #777;    word-wrap: break-word;font-size: 14px;">
Even numbers: by filter method
</div>
<div style="color: #B0B0B0;    margin: 5px 0 10px 0;font-size: 12px;">
Last Modified: 2 days ago
</div>
<div>+3</div>
</div>
</div>
<div >s</div>
</div>
<?php endfor ?>

<?php } ?>
	 
	