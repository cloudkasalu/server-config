

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" alt="" name="image"   >
    <input type="text" name="caption" value="<?= htmlspecialchars($service['service_icon_caption'])?>">

    <input type="text" name="name" value="<?= htmlspecialchars($service['service_title'])?>">
    <textarea name="description" id="" cols="30" rows="10" ><?= htmlspecialchars($service['service_description'])?></textarea>

    <input type="hidden" name="id" value="<?= htmlspecialchars($service['id'])?>">

    <button class="btn-primary">Save</button>  
</form>
