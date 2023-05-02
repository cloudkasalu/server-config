

<?php if(isset($article['post_name'])){ ?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" alt="" name="image"   >
    <input type="text" name="caption" value="<?= htmlspecialchars($article['post_image_caption'])?>">

    <input type="text" name="name" value="<?= htmlspecialchars($article['post_title'])?>">
    <textarea name="paragraph" id="" cols="30" rows="10" ><?= htmlspecialchars($article['post_paragraph'])?></textarea>

    <input type="hidden" name="id" value="<?= htmlspecialchars($article['id'])?>">
    <button class="btn-primary">Save</button>  
</form>
<?php }?>