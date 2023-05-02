

<?php if(isset($project['project_name'])){ ?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" alt="" name="image"   >
    <input type="text" name="caption" value="<?= htmlspecialchars($project['project_image_caption'])?>">

    <input type="text" name="name" value="<?= htmlspecialchars($project['project_name'])?>">
    <textarea name="description" id="" cols="30" rows="10" ><?= htmlspecialchars($project['project_description'])?></textarea>
    <input type="hidden" name="id" value="<?= htmlspecialchars($project['id'])?>">
    <button class="btn-primary">Save</button>  
</form>
<?php }?>