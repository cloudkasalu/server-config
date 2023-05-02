<header>
        <div class="container">
            <div class="header-content header-scroll">
                <div class="header-text">
                    <div class="sub-heading">
                        <h4>\ We Are Here \</h4>
                    </div>
                    <h1>Better Insights For Business Growth</h1>
                    <button class="btn btn-secondary">View More</button>
                </div>
                <div class="header-image">
                    <img src="images/hero.webp" alt="girl with a welcoming smile" width="500" height="auto" loading="eager">
                </div>
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
    <section id="planningSection">
        <div class="container">
            <div class="center section-heading">
                <div class="sub-heading">
                    <h4>\ Planning \</h4>
                </div>
                <h2>Our Process</h2>
            </div>
            <div class="process-grid">
                <div class="process-grid-item">
                    <div class="process-card">
                        <div class="card-heading d-flex">
                            <div class="icon">
                                <img src="images/research_icon.svg" alt="research icon">
                            </div>
                            <div class="number">
                                01
                            </div>
                        </div>
                        <h5>Research</h5>
                        <div class="line"><span></span><span></span></div>
                        <p>
                            It is a long established fact that a reader will be distra by the readable content of a page.
                        </p>
                    </div>
                </div>
                <div class="process-grid-item">
                    <div class="process-card">
                        <div class="card-heading d-flex">
                            <div class="icon">
                                <img src="images/design_icon.svg" alt="design icon">
                            </div>
                            <div class="number">
                                02
                            </div>
                        </div>
                        <h5>Design</h5>
                        <div class="line"><span></span><span></span></div>
                        <p>
                            It is a long established fact that a reader will be distra by the readable content of a page.
                        </p>
                    </div>
                </div>
                <div class="process-grid-item">
                    <div class="process-card">
                        <div class="card-heading d-flex">
                            <div class="icon">
                                <img src="images/develop_icon.svg" alt="develop icon" width="38" height="38">
                            </div>
                            <div class="number">
                                03
                            </div>
                        </div>
                        <h5>Develop</h5>
                        <div class="line"><span></span><span></span></div>
                        <p>
                            It is a long established fact that a reader will be distra by the readable content of a page.
                        </p>
                    </div>
                </div>
                <div class="process-grid-item">
                    <div class="process-card">
                        <div class="card-heading d-flex">
                            <div class="icon">
                                <img src="images/test_icon.svg" alt="test icon" width="38" height="38">
                            </div>
                            <div class="number">
                                04
                            </div>
                        </div>
                        <h5>Test</h5>
                        <div class="line"><span></span><span></span></div>
                        <p>
                            It is a long established fact that a reader will be distra by the readable content of a page.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="visionSection">
        <div class="container">
            <div class="section-wrapper">
                <div class="wrapper-image">
                    <div class="image-container">
                        <img 
                            src="images/image11.webp" 
                            alt="diverse people looking at laptop screen" width="555" height="500"
                            loading="lazy"
                            >
                    </div>
                </div>
                <div class="wrapper-content">
                    <div class="sub-heading">
                        <h4>\ What We Do \</h4>
                    </div>
                    <h2>We Develope Product That People Love to Use.</h2>
                    <p>It is a long established fact that a reader will be distracted by the 
                        readable content of a page when looking at its layout. The point of 
                        using Lorem Ipsum is that it has a more-or-less normal distribution 
                        of letters, as opposed, Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                    </p>
                    
                    <div class="d-flex bottom-tag-wrapper">
                        <div class="bottom-tag">
                            <div class="d-flex">
                                <div class="icon">
                                    <img src="images/bulb_icon.svg" alt="light bulb icon" width="38" height="38">
                                </div>
                                <div class="flex-item details">
                                    <h5 class="secondary-color">Our Vision</h5>
                                    <p>It is a long esta
                                        -blished fact that</p>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-tag">
                            <div class="d-flex">
                                <div class="icon">
                                    <img src="images/cake_icon.svg" alt="star cake icon" width="38" height="38">
                                </div>
                                <div class="flex-item details">
                                    <h5 class="secondary-color">Our Vision</h5>
                                    <p>It is a long esta
                                        -blished fact that</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-secondary">View More</button>
                </div>
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
                <div class="services-grid-item">
                    <div class="services-card">
                        <div class="icon">
                            <img src="images/web_icon.svg" alt="web design and develop icon" width="38" height="38">
                        </div>
                        <h5>Web Design / Development</h4>
                        <div class="line"><span></span><span></span></div>
                        <p>It is a long established fact that a reader will be distra by the readable content of a page when looking at its layout, when looking at its layout</p>
                    </div>
                </div>
                <div class="services-grid-item">
                    <div class="services-card">
                        <div class="icon">
                            <img src="images/ui-ux_icon.svg" alt="ui ux design icon" width="38" height="38">
                        </div>
                        <h5>UI/UX Design</h4>
                        <div class="line"><span></span><span></span></div>
                        <p>It is a long established fact that a reader will be distra by the readable content of a page when looking at its layout, when looking at its layout</p>
                    </div>
                </div>
                <div class="services-grid-item">
                    <div class="services-card">
                        <div class="icon">
                            <img src="images/migration_icon.svg" alt="web migration icon" width="38" height="38">
                        </div>
                        <h5>Web Migration</h4>
                        <div class="line"><span></span><span></span></div>
                        <p>It is a long established fact that a reader will be distra by the readable content of a page when looking at its layout, when looking at its layout</p>
                    </div>
                </div>
                <div class="services-grid-item">
                    <div class="services-card">
                        <div class="icon">
                            <img src="images/app_icon.svg" alt="app develop icon" width="38" height="38">
                        </div>
                        <h5>App Development</h4>
                        <div class="line"><span></span><span></span></div>
                        <p>It is a long established fact that a reader will be distra by the readable content of a page when looking at its layout, when looking at its layout</p>
                    </div>
                </div>
                <div class="services-grid-item">
                    <div class="services-card">
                        <div class="icon">
                            <img src="images/hubspot_icon.svg" alt="hubsopt intergration icon" width="38" height="38">
                        </div>
                        <h5>Hubspot Intergration</h4>
                        <div class="line"><span></span><span></span></div>
                        <p>It is a long established fact that a reader will be distra by the readable content of a page when looking at its layout, when looking at its layout</p>
                    </div>
                </div>
                <div class="services-grid-item">
                    <div class="services-card">
                        <div class="icon">
                            <img src="images/email_marketing_icon.svg" alt="email marketing icon" width="38" height="38">
                        </div>
                        <h5>Email Marketing</h4>
                        <div class="line"><span></span><span></span></div>
                        <p>It is a long established fact that a reader will be distra by the readable content of a page when looking at its layout, when looking at its layout</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                            <?php echo 'src="data:image/webp;base64,'.base64_encode($content['profile_image']).'"';?>
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
    <section id="testimonialSection">
        <div class="">
            <div class="center">
                <div class="sub-heading">
                    <h4>\ From our Customers \</h4>
                </div>
                <h2>Testimonials</h2>
            </div>
            <div class="testimonial-slider">
                <div class="testimonial">
                   <div class="d-flex">
                    <div class="user-image">
                        <div class="image-container">
                            <img src="images/image5.jpg" alt="user">
                        </div>
                    </div>
                    <div class="qoutes">
                        <img src="images/qoutes.svg" alt="">
                    </div>
                   </div> 
                   <div class="paragraph">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
                   </div>
                   <div class="user-details">
                     <h5 class="secondary-color">Samual Karl</h5>
                     <span class="title">CEO</span>
                   </div>
                </div>
                <div class="testimonial">
                    <div class="d-flex">
                     <div class="user-image">
                         <div class="image-container">
                             <img src="images/image5.jpg" alt="user">
                         </div>
                     </div>
                     <div class="qoutes">
                         <img src="images/qoutes.svg" alt="">
                     </div>
                    </div> 
                    <div class="paragraph">
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
                    </div>
                    <div class="user-details">
                      <h5 class="secondary-color">Samual Karl</h5>
                      <span class="title">CEO</span>
                    </div>
                 </div>
                 <div class="testimonial">
                    <div class="d-flex">
                     <div class="user-image">
                         <div class="image-container">
                             <img src="images/image5.jpg" alt="user">
                         </div>
                     </div>
                     <div class="qoutes">
                         <img src="images/qoutes.svg" alt="">
                     </div>
                    </div> 
                    <div class="paragraph">
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
                    </div>
                    <div class="user-details">
                      <h5 class="secondary-color">Samual Karl</h5>
                      <span class="title">CEO</span>
                    </div>
                 </div>
                 <div class="testimonial">
                    <div class="d-flex">
                     <div class="user-image">
                         <div class="image-container">
                             <img src="images/image5.jpg" alt="user">
                         </div>
                     </div>
                     <div class="qoutes">
                         <img src="images/qoutes.svg" alt="">
                     </div>
                    </div> 
                    <div class="paragraph">
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
                    </div>
                    <div class="user-details">
                      <h5 class="secondary-color">Samual Karl</h5>
                      <span class="title">CEO</span>
                    </div>
                 </div>
            </div>
        </div>
    </section>
    <section id="contactSection">
        <div class="container">
            <div class="center section-heading">
                <div class="sub-heading">
                    <h4>\ Get In Touch \</h4>
                    <h2>Hey! Let’s Talk</h2>
                </div>
            </div>
                <div class="contact-container">
                    <div class="contact-form">
                        <form action="">
                            <label for="name"></label>
                            <input type="email" name="name" id="name" placeholder="Name">

                            <label for="email"></label>
                            <input type="email" name="email" id="email" placeholder="Email">

                            <label for="phone"></label>
                            <input type="phone" name="phone" id="phone" placeholder="Phone">

                            <textarea name="message" id="" cols="30" rows="10" placeholder="Your message"></textarea>

                            <button class="btn btn-secondary">Send Now</button>
                        </form>
                    </div>
                    <div class="contact-details">
                        <div class="d-flex details">
                            <div class="flex-item icon">
                                <img src="images/call-icon.svg" alt="call icon" width="32" height="32">
                            </div>
                            <div class="flex-item content">
                                <h5 class="secondary-color">Call Anytime</h5>
                                <p>+ 91 23678 27867 <br> + 91 67678 92878</p>
                                
                            </div>
                        </div>
                        <div class="d-flex details">
                            <div class="flex-item icon">
                                <img src="images/email_icon.svg" alt="email icon" width="32" height="32">
                            </div>
                            <div class="flex-item content">
                                <h5 class="secondary-color">Email</h5>
                                <p>connect@itfirms.com
                                    hello@itfirms.com</p>
                            </div>
                        </div>
                        <div class="d-flex details">
                            <div class="flex-item icon">
                                <img src="images/location_icon.svg" alt="location icon" width="32" height="32">
                            </div>
                            <div class="flex-item content">
                                <h5 class="secondary-color">Visit Us</h5>
                                <p>20 Island Park Road, 
                                    New Jearsy, New York, USA</p>
                                
                            </div>
                        </div>
                        <div class="social">
                            <h5>Follow</h5>
                            <div class="social-icons">
                                <div class="icon"><img src="images/linkedin_icon.svg" alt="linkedin icon" width="24" height="24"></div>
                                <div class="icon"><img src="images/instagram_icon.svg" alt="instagram icon" width="24" height="24"></div>
                                <div class="icon"><img src="images/facebook_icon.svg" alt="facebook icon" width="24" height="24"></div>
                                <div class="icon"><img src="images/twitter_icon.svg" alt="twitter icon" width="24" height="24"></div>
                            </div>
                        </div>
                    </div>
             </div>
        </div>
    </section>
    <section id="blogSection">
        <div class="container">
            <div class="center section-heading">
                <div class="sub-heading">
                    <h4>\ Our Blog \</h4>
                </div>
                <h2>Latest Post</h2>
            </div>
            <div class="blog-posts">
                <div class="post">
                    <div class="post-image">
                        <div class="image-container">
                            <img src="images/image12.jpg" alt="" loading="lazy">
                        </div>
                    </div>
                    <div class="post-details">
                        <div class="title">
                            <h5 class="secondary-color">The most Popular Business Of the Year</h5>
                        </div>
                        <div class="footer d-flex">
                            <div class="author">
                                <div class="author-image">
                                    <div class="image-container">
                                        <img src="images/CEO.webp" alt="">
                                    </div>
                                </div>
                                <div class="author-name">
                                    Ranold Jeff.
                                </div>
                            </div>
                            <div class="date">May 4th, 2022</div>
                        </div>
                    </div>
                </div>
                <div class="post">
                    <div class="post-image">
                        <div class="image-container">
                            <img src="images/image13.webp" alt="" loading="lazy">
                        </div>
                    </div>
                    <div class="post-details">
                        <div class="title">
                            <h5 class="secondary-color">The most Popular Business Of the Year</h5>
                        </div>
                        <div class="footer d-flex">
                            <div class="author">
                                <div class="author-image">
                                    <div class="image-container">
                                        <img src="images/COO.webp" alt="">
                                    </div>
                                </div>
                                <div class="author-name">
                                    Ranold Jeff.
                                </div>
                            </div>
                            <div class="date">May 4th, 2022</div>
                        </div>
                    </div>
                </div>
                <div class="post">
                    <div class="post-image">
                        <div class="image-container">
                            <img src="images/image14.webp" alt="" loading="lazy">
                        </div>
                    </div>
                    <div class="post-details">
                        <div class="title">
                            <h5 class="secondary-color">The most Popular Business Of the Year</h5>
                        </div>
                        <div class="footer d-flex">
                            <div class="author">
                                <div class="author-image">
                                    <div class="image-container">
                                        <img src="images/CEO.webp" alt="">
                                    </div>
                                </div>
                                <div class="author-name">
                                    Ranold Jeff.
                                </div>
                            </div>
                            <div class="date">May 4th, 2022</div>
                        </div>
                    </div>
                </div>
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
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js" defer></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js" defer></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
    <script type="text/javascript" src="js/main.js" defer></script>