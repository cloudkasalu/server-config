

<div class="team-members">
<?php foreach($aboutTeam as $content):?>
    <?php if(isset($content['member_name'])) {?>
 <a href="<?= ROOT . 'team/' . $content['id']; ?>" class="team-member">
    <div class="member-image">
        <div class="image-container">
            <img 
            <?php echo 'src="data:image/webp;base64,'.base64_encode($content['profile_image']).'"';?>
             alt="<?= htmlspecialchars($content['profile_image_caption'], ENT_QUOTES, 'UTF-8')?>"
              width="268" height="300">
        </div>
    </div>
    <div class="member-details center">
        <h5 class="secondary-color name"><?= htmlspecialchars($content['member_name'], ENT_QUOTES, 'UTF-8')?></h5>
        <span class="position"><?= htmlspecialchars($content['member_position'], ENT_QUOTES, 'UTF-8')?></span>
    </div>
</a>
   <?php }?>
<?php endforeach;?>
</div>