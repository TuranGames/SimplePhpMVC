<?php foreach  ($usersComment as $commentedUsers) { ?>

		<div class="commentContainer" id="commentContainer">
			<div class="commentTop">
				<div style="width:90%;">
					<div style="display:flex;">
						<img src="<?=Avatars.$commentedUsers['image']?>" class="commentOwnerImg">
						<div class="commentOwnerName"><?=$commentedUsers['name']?></div>
					</div>
					
					<div class="commentText"><?=$commentedUsers['text']?></div>
				</div>
				<div style="display:flex;flex-direction:column;align-items:center;">
					<div onclick="likeComment('Like', <?=$commentedUsers['id']?>, 'HTML', this); this.onclick=null;" >
						<svg   width="36" height="36" viewBox="0 0 36 36">
							<path d="M2 26h32L18 10 2 26z"  class="like">
							</path>
						</svg>
					</div>
					<div style="color:#6a737c !important;margin: 2px;font-size:22px;" class="userRespect">
					 <?=$commentedUsers['respect']?>
					 </div>
					<div onclick="likeComment('Dislike', <?=$commentedUsers['id']?>, 'HTML', this); this.onclick=null;">
						<svg   width="36" height="36" viewBox="0 0 36 36">

							<path d="M2 10h32L18 26 2 10z" fill="#bbc0c4" class="dislike">
							</path>
						</svg>
					</div>
				</div>
			</div>
			<div class="commentBottom">
				<div class="commentAnswer">Javob yozish</div>
				<div class="commentDate"><?=$commentedUsers['date']?></div>
			</div>
		</div>
	<?php } ?>