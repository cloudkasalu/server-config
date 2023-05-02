

<?php foreach($projects as $project):?>
    <?php if(isset($project['project_name'])) {?>
 <a href="<?php echo ROOT . '/dashboard/portfolio/edit/' . $project['id']; ?>" class="project">
    <div class="project-image">
        <div class="image-container">
            <img 
            <?php echo 'src="data:image/webp;base64,'.base64_encode($project['project_image']).'"';?>
             alt="<?= htmlspecialchars($content['profile_image_caption'], ENT_QUOTES, 'UTF-8')?>"
             >
        </div>
    </div>
    <div class="project-details center">
        <h5 class="secondary-color name"><?= htmlspecialchars($project['project_name'], ENT_QUOTES, 'UTF-8')?></h5>
        <p class="description"><?= htmlspecialchars( $project['project_description'], ENT_QUOTES, 'UTF-8')?></p>
    </div>
</a>
   <?php }?>
<?php endforeach;?>

 <a href="<?= ROOT . '/dashboard/portfolio/post'?>" class="btn btn-primary">Add Project</a>