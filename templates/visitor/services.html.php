<header id="pageHeader">
        <div class="container">
            <div class="page-header-content header-scroll">
                <h1 class="secondary-color">Services</h1>
                <div class="path"><h4 >Home / Services</h4></div>
            </div>
        </div>
</header>
<section id="visionSection">
        <div class="container">
            <div class="section-wrapper">
            <?php foreach ($serviceSection as $content) :?>
              <?php if(isset($content['section_title'])) { ?>
                <div class="wrapper-image">
                    <div class="image-container">
                        <img 
                        <?php echo 'src="data:image/webp;base64,'.base64_encode($content['section_image']).'"';?>
                            alt="<?= htmlspecialchars($content['section_image_caption'], ENT_QUOTES, 'UTF-8')?>" width="555" height="500"
                            loading="lazy"
                            >
                    </div>
                </div>
                <div class="wrapper-content">
                    <div class="sub-heading">
                        <h4>\ What We Do \</h4>
                    </div>
                    <h2><?= htmlspecialchars($content['section_title'], ENT_QUOTES, 'UTF-8')?></h2>
                    <p><?= htmlspecialchars($content['section_paragraph'], ENT_QUOTES, 'UTF-8')?></p>
                    
                    <div class="d-flex bottom-tag-wrapper">
                        <div class="bottom-tag">
                            <div class="d-flex">
                                <div class="icon">
                                    <img src="../images/bulb_icon.svg" alt="light bulb icon" width="38" height="38">
                                </div>
                                <div class="flex-item details">
                                    <h5 class="secondary-color">Our Vision</h5>
                                    <p><?= htmlspecialchars($content['vision'], ENT_QUOTES, 'UTF-8')?></p>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-tag">
                            <div class="d-flex">
                                <div class="icon">
                                    <img src="../images/cake_icon.svg" alt="star cake icon" width="38" height="38">
                                </div>
                                <div class="flex-item details">
                                    <h5 class="secondary-color">Our Goal</h5>
                                    <p><?= htmlspecialchars($content['goal'], ENT_QUOTES, 'UTF-8')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-secondary">View More</button>
                </div>
                  <?php }?>
              <?php endforeach;?>
            </div>
        </div>
    </section>
    <section id="servicesSection">
        <div class="container">
            <div class="center section-heading">
                <div class="sub-heading">
                    <h4>\ Services \</h4>
                </div>
                <h2>Our Expertice</h2>
            </div>
            <div class="services-grid">
                <?php foreach($services as $service):?>
                  <?php if(isset($service['service_title'])){ ?>
                <div class="services-grid-item">
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
                    </div>
                      <?php }?>
                  <?php endforeach; ?>
             </div>
        </div>
    </section>