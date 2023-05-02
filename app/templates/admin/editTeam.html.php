 
<?php if(isset($member['member_name'])){ ?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" alt="" name="image"   >
    <input type="text" name="caption" value="<?= htmlspecialchars($member['profile_image_caption'])?>">
    <input type="text" name="name" value="<?= htmlspecialchars($member['member_name'])?>">
    <input type="text" name="position" value="<?= htmlspecialchars($member['member_position'])?>">
    <input type="hidden" name="id" value="<?= htmlspecialchars($member['id'])?>" >

    <button class="btn-primary">Save</button>  
</form>
<?php }?>