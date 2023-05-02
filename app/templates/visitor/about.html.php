<header id="pageHeader">
        <div class="container">
            <div class="page-header-content header-scroll" >
                <h1 class="secondary-color">About Us</h1>
                <div class="path"><h4 >Home / About</h4></div>
            </div>
        </div>
    </header>
    <?php foreach ($aboutSection as $content) :?>
        <?php if(isset($content['title'])) { ?>
    <section id="aboutSection">
        <div class="container">
            <div class="section-wrapper">
                <div class="wrapper-image" id="aboutImage">
                    <div class="image-container">
                        <img
                        <?php echo 'src="data:image/webp;base64,'.base64_encode($content['image']).'"';?>
                             alt="diverse people looking at laptop screen" width="555" height="398"
                             loading="lazy"
                             >
                    </div>
                </div>
                <div class="wrapper-content">
                    <div class="sub-heading">
                        <h4>\ About us \</h4>
                    </div>
                    <h2> <?= htmlspecialchars($content['title'],  ENT_QUOTES, 'UTF-8')?></h2>
                    <p><?=$content['paragraph']?></p>
                    <div class="bottom-tag">
                        <div class="d-flex">
                            <div class="icon flex-item">
                                <img src="../images/customer_care_icon.svg" alt="customer care icon" loading="lazy">
                            </div>
                            <div class="flex-item">
                                <h5><?=$content['contact_title']?></h5>
                                <p>Ready to Help: <span class="secondary-color"><?=$content['contact_details']?></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php }?>
    <?php endforeach;?>
    <section id="teamSection">
        <div class="container">
            <div class="center section-heading">
                <div class="sub-heading">
                    <h4>\ Team \</h4>
                </div>
                <h2>Our Leaders</h2>
            </div>
            <div class="team-members">
                <?php foreach($teamSection as $content):?>
                    <?php if(isset($content['member_name'])) {?>
                <div class="team-member">
                    <div class="member-image">
                        <div class="image-container">
                            <img 
                            <?php echo 'src="data:image/svg+xml;base64,'.base64_encode($content['profile_image']).'"';?>
                             alt="<?= htmlspecialchars($content['profile_image_caption'], ENT_QUOTES, 'UTF-8')?>" 
                             width="268" height="300" loading="lazy">
                        </div>
                    </div>
                    <div class="member-details center">
                        <h5 class="secondary-color name"><?= htmlspecialchars($content['member_name'], ENT_QUOTES, 'UTF-8')?></h5>
                        <span class="position"><?= htmlspecialchars($content['member_position'], ENT_QUOTES, 'UTF-8')?></span>
                    </div>
                </div>
                <?php }?>
                <?php endforeach;?>
            </div>
        </div>
    </section>
    <section id="qoute">
        <div class="container">
            <div class="qoute-container">
                <div class="qoute-content center">
                    <p>“Some of the History of Our Company is that
                        we are Catching up through Video”</p>
                    <button class="btn btn-secondary">Get In Touch</button>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="/js/main.js" defer></script>