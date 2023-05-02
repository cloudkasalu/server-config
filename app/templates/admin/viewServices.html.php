<?php foreach($services as $service):?>
            <?php if(isset($service['service_title'])){ ?>
<a href="<?= ROOT . '/dashboard/services/list/edit/' . $service['id'] ?>" class="services-grid-item">
    <div class="services-card">

        <div class="icon">
            <img 
            <?php echo 'src="data:image/svg+xml;base64,'.base64_encode($service['service_icon']).'"';?>
             alt="<?= htmlspecialchars($service['service_icon_caption'], ENT_QUOTES, 'UTF-8')?>"
             width="38" height="38"
             >
        </div>
        <h5><?= htmlspecialchars($service['service_title'], ENT_QUOTES, 'UTF-8')?></h5>
        <div class="line"><span></span><span></span></div>
        <p><?= htmlspecialchars($service['service_description'], ENT_QUOTES, 'UTF-8')?></p>
    </div>
</a>
<?php }?>
<?php endforeach; ?>

<a href="<?= ROOT . '/dashboard/services/list/create'?>" class="btn btn-primary">Add Service</a>