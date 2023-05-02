
<?php foreach($aboutSection as $content): ?>
<form action="" method="post" enctype="multipart/form-data">

    <input type="text" name="title" value="<?= htmlspecialchars($content['title'])?>">
    <textarea name="paragraph" id="" cols="30" rows="10" ><?= htmlspecialchars($content['paragraph'])?></textarea>

    <input type="file" alt="" name="image"  >


    <input type="text" name="contactTitle" value="<?= htmlspecialchars($content['contact_title'])?>">
    <input type="text" name="contactNumber" value="<?= htmlspecialchars($content['contact_details'])?>">

    <button class="btn-primary">Save</button>
    
</form>

<?php endforeach; ?>