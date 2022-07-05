<div style="flex:1%;min-width: 250px;">
	<aside id="navbar" >
		<a href="/" style="text-decoration:none;color:inherit;"><div class="leftSideLogoContainer" >
			<div class="leftSideLogo">ITproger</div></div></a>
			<div class="leftSideProfileContainer" id="section">
				
<?php if($userIsLoged){ ?>
<div style="display:flex;"><div>
	<img src="<?=Avatars.$logedUser['image']?>" class="leftSideProfileImg">
</div>
<div class="leftSideProfileText"><?=$logedUser['name']?> </div></div>
<div onclick="opme();" class="leftSideProfileArrow">&#9660
</div>
<?php }else{ ?>

				<a href="/?page=login" style="text-decoration:none;">
					<div style="display:flex;align-items:center;padding:0px 10px;cursor:pointer;">
						<img src="<?=sysImages?>lock.png" class="leftSideImg" >
						<div class="leftSideText" style="color:white;"><?php echo $_SESSION['login']; ?>
							Saytga kirish
						</div>
					</div></a>
					
<?php } ?>
				</div>
<?php if($userIsLoged){ ?>
				<div id="open" class="leftSideProfileClosedMenu">
					<a href="?page=users&id=<?=$logedUser['id']?>" style="text-decoration:none;width:100%;">
						<div class="leftSideProfileClosedMenuText">
							<img src="<?=sysImages?>rwhite.png" class="leftSideImg">
							<div class="leftSideText" style="color:white;">
								Sozlamalar
							</div>
						</div></a>
	<script>
		


	</script>					

							<div class="leftSideProfileClosedMenuText" onclick="unlogin()">
								<img src="<?=sysImages?>logout.png" class="leftSideImg">
								<div class="leftSideText" style="color:white;">
									Chiqish
								</div>
							</div>
					</div>
<?php } ?>
					<a href="/?page=users" style="text-decoration:none;width:100%;">
						<div class="leftSideTextContainer" style="border-top: 1px solid #485265;">
							
							<img src="<?=sysImages?>rblue.png" class="leftSideImg">
							
							<div class="leftSideText">
								Mening statistikam
							</div>
							
						</div></a>

						<div class="leftSideTextContainer" style="">
							
							<img src="<?=sysImages?>tag.png" class="leftSideImg">
							
							<div class="leftSideText">
								Barcha teglar
							</div>
							
						</div>

						<div class="leftSideTextContainer">
							
							<img src="<?=sysImages?>users.png" class="leftSideImg">
							
							<div class="leftSideText">
								Barcha foydalanuvchilar
							</div>
							
						</div>
						
					</aside>
				</div>