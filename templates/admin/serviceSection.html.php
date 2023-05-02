<?php foreach($serviceSection as $content): ?>
<form action="" method="post" enctype="multipart/form-data">

    <input type="text" name="title" value="<?= htmlspecialchars($content['section_title'])?>">
    <textarea name="paragraph" id="" cols="30" rows="10" ><?= htmlspecialchars($content['section_paragraph'])?></textarea>

    <input type="file" alt="" name="image"  >
    <input type="text" name="caption" value="<?= htmlspecialchars($content['section_image_caption'])?>">

    <label>Vision</label>
    <input type="text" name="vision" value="<?= htmlspecialchars($content['vision'])?>">

    <label>Goal</label>
    <input type="text" name="goal" value="<?= htmlspecialchars($content['goal'])?>">

    <button class="btn-primary">Save</button>
    
</form>

<?php endforeach; ?>