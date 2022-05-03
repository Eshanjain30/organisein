<?php
/**
/* Template Name: Home
 *
 * Displays Only Home template
 *
 * @package WordPress
 * @subpackage organisein
 * @since organisein 1.0
 */
 get_header(); ?>

    <!------------------------------- bannner Section start  --------------------------->
    <section class="Banner__Wraper">
        <div style="background-color: rgba(0,6,12,0.68); padding: 130px 0;width: 100%;">
            <div class="px-4" style="max-width: 1400px; margin:auto;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-12 col-lg-6 banner____ col-xl-6 mx-auto">
                            <div class="text___banner___header" style="padding: 0px 36px;">
                                <h1>Organizein India's Trusted IT & Digital Marketing Agency
                                </h1>
                                <p>We will help you take advantage of all that the Internet has to offer. Having a solid
                                    inbound strategy with a high ROI is what every business strives for.
                                </p>
                            </div>
                            <div class="Three__logo__banner_bottom">
                                <a href="#"><img
                                        src="https://www.organizein.com/wp-content/uploads/2016/07/PartnerBadge-RGB-397-1-1-300x164.png"
                                        alt=""></a>
                                <a href="#"><img
                                        src="https://www.organizein.com/wp-content/uploads/2016/07/connectlabs-platinum-hubspot-partner.png"
                                        alt=""></a>
                                <a href="#"><img src="https://www.organizein.com/wp-content/uploads/2016/07/bing.png"
                                        alt=""></a>
                                <!-- <a class="Services___btn" href="#">Services</a>
                                <a href="#">About us</a> -->
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-lg-6 banner____ col-xl-6 mx-auto">
                            <form action="functions/save-data.php" id="contactUsForm" method="post" class="contactForm">
                                <div class="formHeader">Let’s Get Started, Get in touch now!</div>
                                <input type="text" name="name" id="name" class="inputField" placeholder="Full Name"
                                    required>
                                <input type="text" name="email" id="email" class="inputField" placeholder="Email"
                                    required>
                                <input type="text" name="service" id="websiteLink" class="inputField"
                                    placeholder="Website Link" required>
                                <select class="form-select inputField" aria-label="Default select example">
                                    <option selected>Services Interested in?</option>
                                    <option>IT Services </option>
                                    <option>Web Design & Development </option>
                                    <option>Mobile Application Development </option>
                                    <option>CRM Development & Integrations </option>
                                    <option>SRS Document Development </option>
                                    <option>User Interface & Wireframes </option>
                                    <option>Hosting, Domain & Server Management </option>
                                    <option>App MVP Prototypes </option>
                                    <option>Custom Business Dashboard development </option>
                                    <option>AI & Chat Bots Development </option>
                                    <option>Digital Marketing </option>
                                    <option>SEO</option>
                                    <option>SEM</option>
                                    <option>SMM</option>
                                    <option>Email </option>
                                    <option>SMS Marketing </option>
                                    <option>Influencer Marketing </option>
                                    <option>Whats App Marketing </option>
                                    <option>ABM Campaings (Account Based Marketing) </option>
                                    <option>Inbound Marketing </option>
                                    <option>Branding </option>
                                    <option>Logo Designing</option>
                                    <option>Brand identity </option>
                                    <option>Marketing Collaterals </option>
                                </select>
                                <input type="text" name="mobNumber" id="mobNumber" class="inputField"
                                    placeholder="Phone Number" required>
                                <!-- <div class="g-recaptcha mt-2" data-sitekey="6Lc1uigeAAAAADXQ0y8j1Qt6x1UznrzyoIiG279B"
                                    style="text-align: center;"></div> -->
                                <button class="contactFormBtn contactus_btn">Contact us now</button>
                            </form>
                            <!-- <div class="Three__logo__banner">
                            <a class="Services___btn" href="#">Services</a>
                            <a href="#">About us</a>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Wrp_____100">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12 max____width__ col-lg-12 after___banner___text col-xl-12 mx-auto">
                        <p>
                            The online marketing industry is growing at an unparalleled pace. Businesses the world over
                            spend over billions on digital campaigns. With more and more businesses investing time and
                            money in online marketing, it is no longer enough to rely on old advertising tactics. You
                            have to create a solid digital presence and adopt value-driven strategies. Our digital
                            marketing strategies and expert team can help your business achieve that.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------- bannner Section end  --------------------------->



    <!------------------------ section of HAPPY CUSTOMERS start  ----------------------->


    <section>
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 max____width__ col-12 col-lg-12 HAPPY__CUSTOMERS col-xl-12 mx-auto">
                        <div class="customer____content">
                            <h3>JOIN OUR HAPPY CUSTOMERS</h3>
                            <div class="Customers__logo">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/sameday.png" alt="" class="img-fluid" />
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/payswiff.png" alt="" class="img-fluid" />
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/Smart-1.png" alt="" class="img-fluid" />
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/m.png" alt="" class="img-fluid" />
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/cruise san diego.png" alt="" class="img-fluid" />
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/peak.png" alt="" class="img-fluid" />
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/Ray White.png" alt="" class="img-fluid" />
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/Cmitsolutions.png" alt="" class="img-fluid" />
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/bmw.png" alt="" class="img-fluid" />
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/verify.png" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!------------------------ section of HAPPY CUSTOMERS end  ----------------------->












    <!------------ section of Be Dynamic, Innovative and Insightful start  ------------------------->

    <section class="secton__of__innovative">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 mx-auto">
                        <div class="row">
                            <div class="col-md-8 col-12 col-lg-8 Innovative_____  col-xl-8 mx-auto">
                                <h4>
                                    Be Dynamic, Innovative and Insightful
                                </h4>
                                <p class="First___text___details">
                                    Outbound marketing annoys your target audience with content they don’t necessarily
                                    need. Inbound marketing forges connections and solves problems they already have.
                                    Our well proven Inbound marketing strategies and tactics develops a system that
                                    attracts customers by delivering valuable content and tailored experiences.
                                </p>
                                <p>
                                    Our clients exceed their goals, thanks to our winning combo — experienced digital
                                    marketers and the insightful platform – Organizein KPI Dashboard. We have engineered
                                    a customized software platform designed to help clients make smarter decisions using
                                    our in-house marketing KPI tools.
                                </p>
                            </div>
                            <div class="col-md-4 col-12 col-lg-4 col-xl-4 mx-auto">
                                <div class="Wprer___computer">
                                    <img onclick="toggle()" src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/impplay-button-min-min.png" alt=""
                                        class="img-fluid overly___Start" />

                                    <div id="Wraper___video" class="video___poopup">
                                        <div class="if__controler">
                                            <iframe id="video" width="900" height="600"
                                                src="https://www.youtube.com/embed/p_Psvj8hUm8"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                            <img onclick="toggle()" src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/closebtn.png" alt=""
                                                class="img-fluid close____" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!------------ section of Be Dynamic, Innovative and Insightful end  ------------------------->







    <!---------------------- section of  Digital Marketing Services start  ------------------------->
    <section class="Digital__Marketing__Services">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 max____width__ col-12 Marketing______ col-lg-12 col-xl-12 mx-auto">
                        <h6 class="text-center py-5">Digital Marketing Services</h6>
                        <p>By using email, mobile messages, social media acquisitions, and Web promoting, you can drive
                            relatively more traffic. Here are few of our most popular marketing services
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- <section class="Digital__Marketing______">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row gy-5 mt-5">
                    <div class="col-12 max____width__ col-lg-12 col-xl-12 col-xxl-12 mx-auto">
                        <div class="row gy-5 justify-content-evenly">
                            <div class="col-md-3 col-12 single__margkein text-center col-lg-3 col-xl-3 mx-auto">
                                <img src="./images/Webdesign-USA-Organizein.png" alt="" class="img-fluid" />
                                <h3>Web Design</h3>
                                <p>We design super responsive and mobile optimized websites that deliver rich content in
                                    an organized manner to your audience.</p>
                                <a href="https://www.organizein.com/web-design-services/"> Click here to View </a>
                            </div>

                            <div class="col-md-3 col-12 single__margkein text-center col-lg-3 col-xl-3 mx-auto">
                                <img src="./images/SEO-Organizein-USA.png" alt="" class="img-fluid" />
                                <h3>Search Engine Optimization</h3>
                                <p>Our search engine optimization strategies are formulated with careful analysis of how
                                    your clients and audience finds, consumes or purchases</p>
                                <a href="https://www.organizein.com/seo-services/"> Click here to View </a>
                            </div>

                            <div class="col-md-3 col-12 single__margkein text-center col-lg-3 col-xl-3 mx-auto">
                                <img src="./images/inbound-marketing-usa-organizein.png" alt="" class="img-fluid" />
                                <h3>Inbound marketing</h3>
                                <p>With the use of multiple channels, we can proactively increase the quality traffic
                                    you receive. With this increase in your audience, you will be able to reach</p>
                                <a
                                    href="https://www.organizein.combound-marketing/?_ga=2.47493295.903797179.1642499480-101747074.1642499480">
                                    Click here to View </a>
                            </div>

                            <div class="col-md-3 col-12 single__margkein text-center col-lg-3 col-xl-3 mx-auto">
                                <img src="./images/PPC-Services-Organizein01.png" alt="" class="img-fluid" />
                                <h3>Pay Per Click Campaigns</h3>
                                <p>PPC is a proven way of increasing traffic to your website, but unless you get quality
                                    traffic, you won’t be able to get a better ROI.</p>
                                <a href="https://www.organizein.com/pay-per-click/"> Click here to View </a>
                            </div>

                            <div class="col-md-3 col-12 single__margkein text-center col-lg-3 col-xl-3 mx-auto">
                                <img src="./images/Email-Marketing-Organizein-USA.png" alt="" class="img-fluid" />
                                <h3>Email Campaigns</h3>
                                <p>You can promote brand recognition and awareness through email newsletters with your
                                    existing subscribers and some potential leads to get new subscribers.</p>
                                <a href="https://www.organizein.com/email-marketing-services/"> Click here to View </a>
                            </div>

                            <div class="col-md-3 col-12 single__margkein text-center col-lg-3 col-xl-3 mx-auto">
                                <img src="./images/Social-Media-Services-USA.png" alt="" class="img-fluid" />
                                <h3>Social Media Marketing</h3>
                                <p>We Incorporate Formation and execution of social media campaigns, audits, policy
                                    development and crisis management in our offering.</p>
                                <a href="https://www.organizein.com/social-media-marketing-services/"> Click here to View </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section> -->


    <section class="Digital__Marketing______container">
        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/SEO-Organizein-USA.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>SEO</h3>
            <p>Our search engine optimization strategies are formulated with careful analysis of how
                your clients and audience finds, consumes or purchases</p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/PPC-Services-Organizein01.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>SEM</h3>
            <p>Our Search Engine Marketing Service(SEM) services aid you in growing your business by generating quality
                leads and valuable sales to your enterprise.</p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/social media marketing.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>SMM</h3>
            <p>Use the social media platforms and websites to promote a product or service
            </p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/Chatbot-Apps it service.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Email</h3>
            <p>Promote your products and sell your services through our Email Campaigns.</p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/80.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>SMS Marketing</h3>
            <p>Statistics show SMS open rates are as high as 98%, and that’s higher than any other marketing channel.
            </p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/influencer.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Influencer Marketing</h3>
            <p>To reach your target audience and drive your brand's message to the larger market.
            </p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/Social-Media-Services-USA.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Whatsapp Marketing</h3>
            <p>We Incorporate Formation and execution of social media campaigns....</p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/account based marketing.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>ABM Campaings</h3>
            <p>Account based marketing (ABM) is a business marketing strategy that concentrates resources on a set of
                target accounts within a market.</p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/inbound-marketing-usa-organizein.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Inbound Marketing </h3>
            <p>With the use of multiple channels, we can proactively increase the quality traffic
                you receive. With this increase in your audience, you will be able to reach</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/youtube.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Youtube Ads </h3>
            <p>our highly talented team in increasing traffics through youtube ads.</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/remarketing.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Re-Marketing Campaigns </h3>
            <p>Our world class remarketing ad agency will assist you to get the best possible return. Keeping in mind
                that only 2% of visitors purchase from their first visit on your website,</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/google ads.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Google Ads</h3>
            <p>Our highly talented team of content writers and editors provide you the most authentic and attractive
                content as google ads</p>
        </div>
    </section>

    <!---------------------proposal banner is here-->
    <div class="proposalBanner_outer">
        <div class="preposalBanner">
            <div class="bannerContent">
                <div class="headingContent">
                    <h1>Ready To Grow? Get Your Free Proposal Today:</h1>
                    <p>Take the next step in growing your business using digital marketing. Connect with one of our
                        expert
                        digital strategists to learn how WebFx can help you reach your business goals.</p>
                    <input type="text" class="websiteInput" placeholder="Email">
                    <input type="text" class="websiteInput" placeholder="Enter Your website">
                    <button class="proposalBtn">Send me a proposal <i class="fas fa-arrow-right"></i></button>
                </div>
                <div class="owl-carousel owl-theme imageConent">
                    <img class="item" src="https://www.organizein.com/wp-content/uploads/2021/08/cm-02-1-1.png"
                        alt=">>>>>">
                    <img class="item" src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/banner/123travel-02.png" alt=">>>>>">
                    <img class="item" src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/banner/Afamado-02.png" alt=">>>>>">
                    <img class="item" src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/banner/Aman-educatio-02.png" alt=">>>>>">
                    <img class="item" src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/banner/Arohan-Yoga-02.png" alt=">>>>>">
                    <img class="item" src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/banner/Auto-Spa-America-02.png" alt=">>>>>">
                </div>
            </div>
        </div>
    </div>


    <section class="Digital__Marketing__Services">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 max____width__ col-12 Marketing______ col-lg-12 col-xl-12 mx-auto">
                        <h6 class="text-center py-5">IT Services</h6>
                        <p>By using email, mobile messages, social media acquisitions, and Web promoting, you can drive
                            relatively more traffic. Here are few of our most popular marketing services
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="Digital__Marketing______container">
        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/webdesign-image1.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Web Design & Development</h3>
            <p>We design super responsive and mobile optimized websites that deliver rich content in
                an organized manner to your audience.</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/Android-App-Development it services.png" alt=""
                class="img-fluid digital_marketing_img" />
            <h3>Mobile Application Development</h3>
            <p>Being a leading Android App Development agency, Organizein aids you in developing powerful android
                applications that facilitates your enterprise to bloom exponentially.</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/CRm it service.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>CRM Development & Integrations</h3>
            <p>Our CRM analytics service includes programming that analyses data about a company’s client database</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/80.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>SRS Document Development </h3>
            <p>We also develop and describes the functionality the product needs to fulfill all stakeholders (business,
                users) needs.</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/influencer.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>User Interface & Wireframes</h3>
            <p>we also develop skeleton of the eventual user interface. It's a low fidelity sketch (sometimes literally
                a pen and paper sketch) of the UI.</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/Dedicated-Server-Management-271x300 it service.png" alt=""
                class="img-fluid digital_marketing_img" />
            <h3>Hosting, Domain & Server Management</h3>
            <p>Our top-rated dedicated server management service enables you to boost your rank in search engines With
                the ability to set up different Operating Systems(OSes)</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/social media marketing.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>App MVP Prototypes </h3>
            <p>We provides best MVP (minimum viable product) app prototypes.An MVP is all about testing your idea and
                discovering what will work to properly target your customer. </p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/SEO-Organizein-USA.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Custom Business Dashboard development</h3>
            <p>We design super responsive and mobile optimized custom business dashboard for your company website</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/Chatbot-Apps it service.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>CAI & Chat Bots Development</h3>
            <p>Being a professional chatbot development agency, we comprehend your firm’s requirements and provide the
                right solution that matches your custom needs.</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/google ads.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Front-End development </h3>
            <p>Being a professional Front-End development agency, we comprehend your firm’s requirements and provide the
                right solution that matches your custom needs.</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/ECommerce-Store-271x300.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>eCommerce Solution </h3>
            <p>Our ECommerce portal expands your online traffic and sales. We provide a custom and unique design for
                platforms such as Woo Commerce and Search Engine Optimization(SEO)</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/youtube.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Web Maintenance</h3>
            <p>we peovide a better and reasonable way of Web Maintenance that incrase your web productivity.</p>
        </div>

    </section>


    <!---------------------- section of  Digital Marketing Services end  ------------------------->






    <!-------------------- section of Maximize your Sales start  ----------------------->
    <section class="Maximize____Wraper">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-xxl-12 col-lg-12 mx-auto">
                        <div class="row">
                            <div class="col-md-6 col-12 Maximize____img col-lg-6 col-xl-6 mx-auto">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/sd-Marketing-Services-Agency-1-1-copy-min.png" alt=""
                                    class="img-fluid" />
                            </div>
                            <div class="col-md-6 col-12 Maximize____ col-lg-6 col-xl-6 mx-auto">
                                <h2>
                                    Maximize your Sales with a robust Inbound Marketing Strategy
                                </h2>
                                <p>
                                    We will help you take advantage of all that the Internet has to offer. Having a
                                    solid inbound strategy with a high ROI is what every business strives for.
                                    Traditional marketing practices are obsolete as they cost more and pull in very
                                    little ROI. With inbound marketing, you will not face rejections like you would with
                                    telemarketing. You will be the one calling the shots with your potential customer
                                    calling you instead of you calling them. With years of exposure in this field, we
                                    believe our strategies are just what your business needs to attain a substantial
                                    market share on the Internet. With our services you can,
                                </p>
                                <ul>
                                    <li>Reach a wider range of Potential clients</li>
                                    <li>Get quick and stable results</li>
                                    <li>Get better responses</li>
                                    <li>Acquire long-term exposure</li>
                                    <li>Increase your brand awareness</li>
                                    <li>Engage with customers directly</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-------------------- section of Maximize your Sales end  ----------------------->







    <!------------------- section of Client Acquisition Solutions start  ------------------------->
    <section class="py-5">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div
                        class="col-12 max____width__ col-md-12 text-center Client___Acquisition  col-lg-12 col-xl-12 mx-auto">
                        <h3>Client Acquisition Solutions</h3>
                        <p>The art of gaining new consumers or persuading consumers to purchase your products and
                            services. Most business organizations measure the cost of customer acquisition by evaluating
                            how much value customers bring to their businesses. Successful customer acquisition
                            strategies include referrals, loyalty programs and the like. One can think of it as the link
                            between advertising and customer relationship, as it is the critical component that
                            facilitates the acquisition of customers in a targeted and effective way.</p>
                        <p>
                            Customer acquisition management refers to the set of methods and systems for handling
                            customer prospects and inquiries that are generated by marketing techniques. Effective
                            customer acquisition requires considerable planning and strategizing. Even though there are
                            a variety of customer acquisition strategies, some methods are more effective with certain
                            client categories. There are also a few essential steps that is integral to any customer
                            acquisition plan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------- section of Client Acquisition Solutions end  ------------------------->





    <!---------------------- section of Responsive Web Designing start ----------------------->

    <section class="py-5">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-lg-12 col-xl-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div class="col-12 col-md-5 Responsive______img col-xl-5 col-lg-5 mx-auto">
                                <img onclick="toggle1()" src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/impplay-button-min-min.png" alt=""
                                    class="img-fluid" />
                                <div class="video___poopup1">
                                    <div class="if__controler">
                                        <iframe class="secound__iframe" width="900" height="600"
                                            src="https://www.youtube.com/embed/M4P2KcOb95o" title="YouTube video player"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                        <img onclick="toggle1()" src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/closebtn.png" alt=""
                                            class="img-fluid close____1" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7 Responsive______ col-xl-7 col-lg-7 mx-auto">
                                <h3>Responsive Web Designing</h3>
                                <p>We are in the era of Smartphones. Your website should therefore, adapt itself to
                                    cater to audience that uses mobile phones to access internet. In fact, your website
                                    should be accessible and clearly visible in all forms of devices including tablets
                                    and smartphones. Our responsive web designing services will help you make your
                                    website adaptive enough for all devices. We provide customised responsive web design
                                    services with or without ongoing maintenance services to a wide range of industries.
                                    We also offer web hosting and domain registration services.</p>
                                <a href="#">Learn More our Web designing Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="py-5">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-xl-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div class="col-12 col-md-7 Responsive______ col-xl-7 col-lg-7 mx-auto">
                                <h3>Search Engine Optimization</h3>
                                <p>Unfortunately, if your business is not easy to find on World Wide Web, most of your
                                    potential customers would never be able to find it. You will not be able to get
                                    enough sales and inquiries. No matter what quality of services or products you
                                    offer, you will not be considered seriously. The only solution to this problem is to
                                    make your business visible to most of your potential customers. Our ‘up-to-date’
                                    search engine optimization services will help you achieve the visibility that your
                                    business deserves.</p>
                                <a href="#">Learn More about Search Engine Optimization</a>
                            </div>
                            <div class="col-12 col-md-5 Responsive______img2 col-xl-5 col-lg-5 mx-auto">
                                <div>
                                    <img onclick="toggle2()" src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/impplay-button-min-min.png" alt=""
                                        class="img-fluid" />
                                </div>

                                <div class="video___poopup2">
                                    <div class="if__controler">
                                        <iframe class="Third___iframe" width="900" height="600"
                                            src="https://www.youtube.com/embed/2H_FeNvqxtc" title="YouTube video player"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                        <img onclick="toggle2()" src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/closebtn.png" alt=""
                                            class="img-fluid close____2" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="py-5">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div class="col-12 col-md-5 Responsive______img3 col-xl-5 col-lg-5 mx-auto">
                                <img onclick="toggle3()" src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/impplay-button-min-min.png" alt=""
                                    class="img-fluid" />
                                <div class="video___poopup3">
                                    <div class="if__controler">
                                        <iframe class="Forth___iframe" width="900" height="600"
                                            src="https://www.youtube.com/embed/99XseKQQePY" title="YouTube video player"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                        <img onclick="toggle3()" src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/closebtn.png" alt=""
                                            class="img-fluid close____3" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7 Responsive______ col-xl-7 col-lg-7 mx-auto">
                                <h3>Pay Per Click Campaigns</h3>
                                <p>PPC is a proven way of increasing traffic to your website, but unless you get quality
                                    traffic, you won’t be able to get a better ROI. If you are looking for more quality
                                    leads that have a higher potential of being converted, you are at the right place.
                                    The team at Organizein is completely determined to focus more on increasing your
                                    return on investment and conversion rate instead of just bothering about the traffic
                                    numbers. If you have experienced poor PPC results in the past, it’s high time you
                                    must try us and experience the difference.</p>
                                <a href="#">Learn More about Pay Per Click Marketing</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <!---------------------- section of Responsive Web Designing end ----------------------->





    <!------------------------- section of Gets REAL RESULTS start  ------------------->
    <section class="Maximize____Wraper Maximize____Wraper2">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div class="col-md-6 col-12 Maximize____  Maximize____2 col-lg-6 col-xl-6 mx-auto">
                                <h2>
                                    Are you ready for Wonderful Growth? Get a Free Quote Today
                                </h2>
                                <!-- <p class="p__storn">
                                    Website design Services Bengaluru let Our Experts build an Amazing site for you. As
                                    low as ₹2,999 One time!
                                </p>
                                <p class="p__storn2">
                                    Ready in as few as 5 business days**<br />
                                    Includes free domain, hosting, and updates for 1 year<br />
                                    Free Google Listing on Maps & Local Business<br />

                                </p>
                                <div><a class="View___pricing" href="#"> View pricing </a></div> -->
                                <div class="customBtn"><a href="#" class="contactus_btn">Contact Us</a></div>

                            </div>
                            <div class="col-md-6 col-12 Maximize____img Maximize____img2 col-lg-6 col-xl-6 mx-auto">
                                <div class="Ready____img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/social-media-team-member-1.png" alt="" class="img-fluid" />
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!------------------------- section of Gets REAL RESULTS end  ------------------->



    <!---------------------------- new section of seo ecommerce start ------------------->
    <section class="my-5">

        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div class="col-12 p-4 col-md-6 col-lg-6 col-xl-6 mx-auto">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/Screenshot_11.png" alt="" class="img-fluid">
                            </div>

                            <div class="col-12 Seo__details___ col-md-6 col-lg-6 col-xl-6 mx-auto">
                                <h4>How Does Our Ecommerce SEO Service Work?</h4>
                                <p>Keyword Formation: Our process embarks with research identification and the most
                                    common keyphrases that are used by users.The keywords that we use after extensive
                                    research will enable you to rank higher in search engines. We implement high-value,
                                    pertinent keywords onto your portal. Product page optimization: We optimize all your
                                    portal pages for search engines. Since product pages are highly important, we make
                                    sure that all your pages have exclusive titles that will optimise your product page.
                                    By incorporating relevant images, we make your product page look attractive.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <!---------------------------- new section of seo ecommerce start ------------------->





    <!------------------------------- Why Are We The Best? start  ----------------->
    <section class="my-5 py-5 choose___best___section">

        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div class="col-12 Seo__details___  col-md-6 col-lg-6 col-xl-6 mx-auto">
                                <h4>Why Are We The Best?</h4>
                                <p>Unlike other e-commerce SEO service agencies, we are passionate about what we do.
                                    These are the following features of our service that help us to stand out from the
                                    competition;</p>
                                <ul>
                                    <li><i class="fas fa-caret-right"></i> Highly Qualified Team</li>
                                    <li><i class="fas fa-caret-right"></i> Transparent & ethical workforce</li>
                                    <li><i class="fas fa-caret-right"></i> Reasonable Costing</li>
                                    <li><i class="fas fa-caret-right"></i> Unified full service digital marketing
                                        approach to aid you with search engine marketing and paid advertisement on
                                        various platforms</li>

                                </ul>
                            </div>
                            <div class="col-12 p-3 col-md-6 col-lg-6 col-xl-6 mx-auto">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/Screenshot_1-removebg-preview.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!------------------------------- Why Are We The Best? end ----------------->




    <!------------------------------ commerce SEO start -------------------------------->
    <section>
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div class="col-12 p-4 col-md-6 col-lg-6 col-xl-6 mx-auto">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/Screenshot_2.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-12 Seo__details___ Seo__details___2 col-md-6 col-lg-6 col-xl-6 mx-auto">
                                <h4>What are the benefits of e-commerce SEO?</h4>
                                <p>There are countless benefits to setting up an e-commerce SEO strategy. Here are the
                                    top 3 benefits to e-commerce SEO:</p>
                                <ul>
                                    <li><i class="fas fa-caret-right"></i> Improving your user experience</li>
                                    <li><i class="fas fa-caret-right"></i> Expanding your reach</li>
                                    <li><i class="fas fa-caret-right"></i> Increasing brand awareness</li>
                                    <li><i class="fas fa-caret-right"></i> Link building</li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!------------------------------ commerce SEO end -------------------------------->







    <!-------------------------------------- completion of the work!! start --------------------->
    <section class="completion__work">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div class="col-12 p-5 text-center completion__work1 col-md-12 col-lg-12 col-xl-12 mx-auto">
                                <h2>We will build your website in the next 5 days, only pay us on completion of the
                                    work!!</h2>
                                <a href="https://www.organizein.com/contact-us/" style="background-color: #ffc501;">Work
                                    with us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------------------------------- completion of the work!! end --------------------->




















    <!-------------------------------- section of Automation start --------------------------->
    <section class="py-5">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div
                        class="col-12 max____width__ col-md-12 text-center Client___Acquisition  col-lg-12 col-xl-12 mx-auto">
                        <h3>Build better connections with leads and customers</h3>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-------------------------------- section of Automation end --------------------------->













    <!---------------------- section of Lead Scoring services start ----------------------->

    <!-- <section class="py-5">
    <div class="Warper___header px-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                    <div class="row">
                        <div class="col-12 col-md-5 Responsive______imgX col-xl-5 col-lg-5 mx-auto">
                            <img onclick = "toggle4()" src="./images/impplay-button-min-min.png" alt="" class="img-fluid" />
                            <div class="video___poopup4">
                                <div class="if__controler">
                                <iframe class="fifth__iframe" width="900" height="600" src="https://www.youtube.com/embed/q8yWbptCIz8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <img onclick = "toggle4()" src="./images/closebtn.png" alt="" class="img-fluid close____4" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-7 Responsive______ col-xl-7 col-lg-7 mx-auto">
                            <h3>Responsive Web Designing</h3>
                            <p>We are in the era of Smartphones. Your website should therefore, adapt itself to cater to audience that uses mobile phones to access internet. In fact, your website should be accessible and clearly visible in all forms of devices including tablets and smartphones. Our responsive web designing services will help you make your website adaptive enough for all devices. We provide customised responsive web design services with or without ongoing maintenance services to a wide range of industries. We also offer web hosting and domain registration services.</p>
                            <a href="#">Learn More our Web designing Services</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
 </section>



 <section class="py-5">
    <div class="Warper___header px-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                    <div class="row">
                        <div class="col-12 col-md-7 Responsive______ col-xl-7 col-lg-7 mx-auto">
                            <h3>Search Engine Optimization</h3>
                            <p>Unfortunately, if your business is not easy to find on World Wide Web, most of your potential customers would never be able to find it. You will not be able to get enough sales and inquiries. No matter what quality of services or products you offer, you will not be considered seriously. The only solution to this problem is to make your business visible to most of your potential customers. Our ‘up-to-date’ search engine optimization services will help you achieve the visibility that your business deserves.</p>
                            <a href="#">Learn More about Search Engine Optimization</a>
                        </div>
                        <div class="col-12 col-md-5 Responsive______imgY col-xl-5 col-lg-5 mx-auto">
                            <img onclick = "toggle5()" src="./images/impplay-button-min-min.png" alt="" class="img-fluid" />
                            <div class="video___poopup5">
                                <div class="if__controler">
                                <iframe class="sixth__iframe" width="900" height="600" src="https://www.youtube.com/embed/4Qd4NMrFNmw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <img onclick = "toggle5()" src="./images/closebtn.png" alt="" class="img-fluid close____5" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
 </section>


 <section class="py-5">
    <div class="Warper___header px-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                    <div class="row">
                        <div class="col-12 col-md-5 Responsive______imgZ col-xl-5 col-lg-5 mx-auto">
                            <img onclick = "toggle6()" src="./images/impplay-button-min-min.png" alt="" class="img-fluid" />
                            <div class="video___poopup6">
                                <div class="if__controler">
                                <iframe class="seventh___iframe" width="900" height="600" src="https://www.youtube.com/embed/b-2TaJjOv1M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <img onclick = "toggle6()" src="./images/closebtn.png" alt="" class="img-fluid close____6" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-7 Responsive______ col-xl-7 col-lg-7 mx-auto">
                            <h3>Pay Per Click Campaigns</h3>
                            <p>PPC is a proven way of increasing traffic to your website, but unless you get quality traffic, you won’t be able to get a better ROI. If you are looking for more quality leads that have a higher potential of being converted, you are at the right place. The team at Organizein is completely determined to focus more on increasing your return on investment and conversion rate instead of just bothering about the traffic numbers. If you have experienced poor PPC results in the past, it’s high time you must try us and experience the difference.</p>
                            <a href="#">Learn More about Pay Per Click Marketing</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
 </section>


 <section class="py-5">
    <div class="Warper___header px-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                    <div class="row">
                        <div class="col-12 col-md-7 Responsive______ col-xl-7 col-lg-7 mx-auto">
                            <h3>Email Campaigns</h3>
                            <p>Our highly effective email marketing services can help you reach your target audience easily, create a positive impression, build your brand name, and increase your conversion rates. Email marketing is one of the cost-effective ways of marketing your business. This simple yet popular method of marketing can help you reach millions of potential as well as existing customers without making any significant investment. Our experts can build highly effective email campaigns with a fast turnaround time. Get in touch with us today!</p>
                            <a href="#">Learn More about Email Marketing</a>
                        </div>
                        <div class="col-12 col-md-5 Responsive______imgA col-xl-5 col-lg-5 mx-auto">
                            <img onclick = "toggle7()" src="./images/impplay-button-min-min.png" alt="" class="img-fluid" />
                            <div class="video___poopup7">
                                <div class="if__controler">
                                <iframe class="eight__iframe" width="900" height="600" src="https://www.youtube.com/embed/rDHqc9HxzUo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <img onclick = "toggle7()" src="./images/closebtn.png" alt="" class="img-fluid close____7" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
 </section>  -->

    <!---------------------- section ofLead Scoring services end ----------------------->










    <!----------------------------- section of better connections start ------------------------------>

    <section>
        <div class="container-fluid">
            <div class="row started___section">
                <div class="col-12 col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 p-0 col-md-6  col-lg-6 col-xl-6 mx-auto">
                            <div class="Ready____img2">
                                <div class="text-center map____ py-5">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/happy-min.png" alt="" class="img-fluid" />
                                    <h1>520+</h1>
                                    <p>Organizein Clients</p>
                                </div>
                                </p>
                            </div>
                        </div>
                        <div
                            class="col-12 p-0 col-md-6 col-lg-6 d-flex justify-content-center align-items-center col-xl-6 mx-auto">
                            <div class="text____started2 ml-2">
                                <div class="row Count____customer">
                                    <div class="col-12 col-md-6 col-lg-6 single__customer col-xl-6 mx-auto">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/Digital-marketing.png" alt="" class="img-fluid" />
                                        <h1>12K</h1>
                                        <p>Digital Marketing</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6 single__customer col-xl-6 mx-auto">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/Backlinks.png" alt="" class="img-fluid" />
                                        <h1>2.5M</h1>
                                        <p>Backlinks Acquired</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6 single__customer col-xl-6 mx-auto">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/Digital-pr.png" alt="" class="img-fluid" />
                                        <h1>2M</h1>
                                        <p>Digital PR</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6 single__customer col-xl-6 mx-auto">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/pie-chart-min-min.png" alt="" class="img-fluid" />
                                        <h1>12M</h1>
                                        <p>Campaigns Run</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------------------------- section of better connections end ------------------------------>





    <!------------------------- section of Ready to get started start ---------------------------->
    <section>
        <div class="container-fluid">
            <div class="row started___section">
                <div class="col-12 col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 p-0 col-md-6  col-lg-6 col-xl-6 mx-auto">
                            <div class="Ready____img1">
                                <p class="Ready____img_Wrp"></p>
                            </div>
                        </div>
                        <div
                            class="col-12 p-0 col-md-6 col-lg-6 d-flex justify-content-center align-items-center col-xl-6 mx-auto">
                            <div class="text____started">
                                <h3>Ready to get started?</h3>
                                <p>In today’s connected world, every customer attention matters. Organizein Digital
                                    Services helps you make the most of every Campaign, giving your business the
                                    exposure to attract customers from all digital channels.</p>
                                <a href="#" class="contactus_btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------- section of Ready to get started end ---------------------------->




    <!--------------------- section of Happy Customers start ------------------------------>
    <section class="Digital__Marketing__Services mt-5">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 max____width__ col-12 Marketing______ col-lg-12 col-xl-12 mx-auto">
                        <h6 class="text-center pt-5 pb-3">A Few of Our Happy Customers.</h6>
                        <p>From Small to large companies, we're very proud to be able to help hundreds of thousands of
                            businesses grow every day.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="mb-5 pb-5">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-xxl-12 col-lg-12 mx-auto">
                        <div class="row gy-4">
                            <div
                                class="col-12 mx-3 d-flex justify-content-center align-items-center text-center col-md-4 col-xl-4 mx-auto">
                                <div class="Happy__single__customar">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/verifytx_logo_225x50.png" alt="" class="img-fluid" />
                                    <h3>
                                        Verify Treatment
                                    </h3>
                                    <p>
                                        VerifyTreatment is the leading provider of electronic verification of insurance
                                        benefits across the USA. It has access to 500+ insurance company databases and
                                        provides
                                    </p>

                                    <a href="https://www.organizein.com/verifytx-case-study/" target="blank">
                                        Read more <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div
                                class="col-12 mx-3 d-flex justify-content-center align-items-center text-center col-md-4 col-xl-4 mx-auto">
                                <div class="Happy__single__customar">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/Pet-Industry-1.png" alt="" class="img-fluid" />
                                    <h3>
                                        Pet Industry Expert
                                    </h3>
                                    <p>
                                        Phil Cooper is an expert with over 40 years of experience in the Pet Industry.
                                        He was a part-owner of an 80-year-old Pet distribution company.
                                    </p>

                                    <a href="https://www.organizein.com/petindustryexperts-case-study/" target="blank">
                                        Read more <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div
                                class="col-12 mx-3 d-flex justify-content-center align-items-center text-center col-md-4 col-xl-4 mx-auto">
                                <div class="Happy__single__customar">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/michael-johnson.png" alt="" class="img-fluid" />
                                    <h3>
                                        MJ Associates
                                    </h3>
                                    <p>
                                        MJA is engaged in the direct delivery of regulatory as well as R&D tax benefits
                                        to Australian companies from startups to the very largest.
                                    </p>

                                    <a href="https://www.organizein.com/mj-associates-case-study/" target="blank">
                                        Read more <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div
                                class="col-12 mx-3 d-flex justify-content-center align-items-center text-center col-md-4 col-xl-4 mx-auto">
                                <div class="Happy__single__customar">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/Smart-1.png" alt="" class="img-fluid" />
                                    <h3>
                                        Smart Tools
                                    </h3>
                                    <p>
                                        A Royd UK company that first started supplying SMART blades in 2010. They
                                        continue to focus on innovating
                                    </p>

                                    <a href="https://www.organizein.com/smart-tool-group-case-study/" target="blank">
                                        Read more <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div
                                class="col-12 mx-3 d-flex justify-content-center align-items-center text-center col-md-4 col-xl-4 mx-auto">
                                <div class="Happy__single__customar">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/1582822837895-12.png" alt="" class="img-fluid" />
                                    <h3>
                                        Powerd by Innovation
                                    </h3>
                                    <p>
                                        Powered By Innovation (PBI) is a group of experienced business consultants with
                                        a global delivery model to assist clients in transforming their business
                                        operations
                                    </p>

                                    <a href="https://www.organizein.com/powerd-by-innovation-case-study/"
                                        target="blank">
                                        Read more <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div
                                class="col-12 mx-3 d-flex justify-content-center align-items-center text-center col-md-4 col-xl-4 mx-auto">
                                <div class="Happy__single__customar">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/screenshot_2016_03_11_00.47_1458024802__37248.original.jpg"
                                        alt="" class="img-fluid" />
                                    <h3>
                                        O2Fit
                                    </h3>
                                    <p>
                                        O2fit is a 100% Australian company based in Perth and Western Australia They
                                        manufacture compression clothing. The main aim of O2fit was to reduce the
                                        expensive price of compression
                                    </p>

                                    <a href="https://www.organizein.com/o2fit-case-study/" target="blank">
                                        Read more <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="text-center pt-5 btn____ViewAllCase">
                        <a href="#">VIEW ALL CASE STUDIES</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--------------------- section of Happy Customers end ------------------------------>

    <!--#1 Digital Marketing Service Provider-->
    <div class="marketing_Banner">
        <div class="marketing_banner_inner">

            <h1>#1 Digital Marketing Service Provider</h1>
            <div class="owl-carousel owl-theme owl-carousel2">
                <div class="item item_inner">
                    <p>‘’The functionalities of our apps MVP fit in seamlessly with the desire to improve our online
                        performance and marketing communication.’’
                    </p>
                    <a href="#">Martin van Berkel, Communication Manager at De Nevobo</a>
                </div>
                <div class="item item_inner">
                    <p>“Organizein understood our issue, understood that we already had a CRM in place and that we
                        needed a bolt-on, and were prepared to look at our bespoke requirements and work with us to
                        deliver them. That was unique.”
                    </p>
                    <a href="#">Colin Peters, Director at Radius Payment Solutions</a>
                </div>
                <div class="item item_inner">
                    <p>“Organizein.com proposed to change the look and feel of the Home page to match Foodbag’s look and
                        feel. To us, Organizein is more than just a Digital service provider; they are an IT partner in
                        the entire customer journey.”
                    </p>
                    <a href="#">Stéphane Ronse, Founder of Foodbag</a>
                </div>
                <div class="item item_inner">
                    <p>“After the onboarding phase, the Inbound Marketing team continues to come up with new ideas, and
                        they will email us to see if any issues have arisen. The team is always, always on hand to
                        ensure that we’ve got everything we need.”
                    </p>
                    <a href="#">Katie Hucks, Customer Service Manager at Revolution Beauty</a>
                </div>
            </div>
        </div>
    </div>

    <div class="banner3">
        <h1>Why Customers Choose Organizein</h1>
        <div class="banner_cards">
            <div class="banner_card">
                <img src="https://www.organizein.com/wp-content/uploads/2021/10/Artboard-4-1-1.png" alt="">
                <p>More than 12 years of experience</p>
            </div>
            <div class="banner_card">
                <img src="https://www.organizein.com/wp-content/uploads/2021/10/cloud2.png" alt="">
                <p>Global team</p>
            </div>
            <div class="banner_card">
                <img src="https://www.organizein.com/wp-content/uploads/2021/10/Artboard-1-1.png" alt="">
                <p>Customers across 118 countries</p>
            </div>
            <div class="banner_card">
                <img src="https://www.organizein.com/wp-content/uploads/2021/10/cloud4-1.png" alt="">
                <p>Google Certified</p>
            </div>
            <div class="banner_card">
                <img src="https://www.organizein.com/wp-content/uploads/2021/04/cloud5.png" alt="">
                <p>Global monitoring & support</p>
            </div>
            <div class="banner_card">
                <img src="https://www.organizein.com/wp-content/uploads/2021/10/cloud6-1.png" alt="">
                <p>Listed & Global team</p>
            </div>
        </div>
    </div>







    <!---------------------------- sectio of admin start  ------------------------------>
    <section>
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-12 max____width__ col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
                        <div class="row gy-4">
                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 mx-auto">
                                <div class="Wraper__admit__id">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/young-happy-smiling-woman-casual-clothes-holding-laptop-sending-email-her-best-friend-isolated-gray-backgroundv1.png"
                                        alt="" class="img-fluid" />
                                    <p class="header___admin">
                                        Proven Performance
                                    </p>
                                    <p>
                                        Our 300 member strong team is one of the leading digital marketing agencies in
                                        the world. We’ve partnered with the best in the cyberworld including Google,
                                        Facebook, Bing and many more to bring the latest and greatest in digital
                                        marketing technology to our clients.
                                    </p>
                                    <a href="#">Get in touch</a>
                                </div>
                            </div>

                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 mx-auto">
                                <div class="Wraper__admit__id">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/transparent-Roi-v1.png" alt="" class="img-fluid" />
                                    <p class="header___admin">
                                        Transparent ROI
                                    </p>
                                    <p>
                                        You will no longer need to wade through cumbersome spreadsheets to evaluate your
                                        campaign’s performance. All our clients can access Organizein’s KPI Dashboard,
                                        our best-in-class marketing software platform that keeps track of even the
                                        minute details of each campaign.
                                    </p>
                                    <a href="#">Get in touch</a>
                                </div>
                            </div>


                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 mx-auto">
                                <div class="Wraper__admit__id">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/smiling-businesswoman-typing-laptop-sitting-cafev1.png" alt=""
                                        class="img-fluid" />
                                    <p class="header___admin">
                                        Driving Traffic
                                    </p>
                                    <p>
                                        A website that doesn’t attract visitors is worthless, but a website that
                                        attracts the right audience with consistent flow of traffic can propel a
                                        business to greater heights. Our marketers work with you to identify your target
                                        audience and work on making your site more visible and addictive with our
                                        comprehensive digital marketing services.
                                    </p>
                                    <a href="#">Get in touch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------------------- sectio of admin end  ------------------------------>





    <!-------------------------------- Partner-ship bisness start  --------------------------->
    <section>
        <div class="Warper___header px-4">
            <div class="container-fluid pb-5">
                <h1 class="text-center my-5 PartnerShip__header">One Partner for Small, Mid-Sized, and Enterprise
                    Businesses</h1>
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
                        <div class="row gy-5">
                            <div class="col-md-4 col-12  PartnerShip____img col-lg-4 col-xl-4 col-xxl-4 mx-auto">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/top-search-engines-oct-2020-copy.png" alt="" class="img-fluid" />
                            </div>
                            <div class="col-md-8 PartnerShip____details col-12 col-lg-8 col-xl-8 col-xxl-8 mx-auto">
                                <h4>Digital Marketing Solutions</h4>
                                <p>No matter the industry or type of business you are in, we have the perfect solution
                                    for you. We help you set clear goals, and achieve them! All based on data and
                                    analytics.</p>
                                <a href="#">Find Out More <i class="fas fa-chevron-right"></i></a>
                            </div>



                            <div class="col-md-4 col-12  PartnerShip____img col-lg-4 col-xl-4 col-xxl-4 mx-auto">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/29.png" alt="" class="img-fluid" />
                            </div>
                            <div class="col-md-8 PartnerShip____details col-12 col-lg-8 col-xl-8 col-xxl-8 mx-auto">
                                <h4>Web & Mobile App Solutions</h4>
                                <p>Our expert team – made up of elite designers, developers and marketers take on each
                                    project and client with a driving passion. That dedication has resulted in some of
                                    the best work on the web. Don’t take our word for it!</p>
                                <a href="#">Find Out More <i class="fas fa-chevron-right"></i></a>
                            </div>



                            <div class="col-md-4 col-12  PartnerShip____img col-lg-4 col-xl-4 col-xxl-4 mx-auto">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/28.png" alt="" class="img-fluid" />
                            </div>
                            <div class="col-md-8 PartnerShip____details col-12 col-lg-8 col-xl-8 col-xxl-8 mx-auto">
                                <h4>Custom Digital Marketing Dashboard Integrations</h4>
                                <p>Our clients exceed their goals, thanks to our winning combo — experienced digital
                                    marketers and the insightful platform – Organizein KPI Dashboard. We have engineered
                                    a customized software platform designed to help clients make smarter decisions using
                                    our in-house marketing KPI tools.</p>
                                <a href="#">Find Out More <i class="fas fa-chevron-right"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-------------------------------- Partner-ship bisness end  --------------------------->





    <!------------------------- section of Success__Digital start  +--------------------->
    <section class="mt-5 success___Digital">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row pt-5">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div
                                class="col-12 col-md-6 d-flex justify-content-center align-items-center success____Digital____ col-xl-6 col-lg-6 mx-auto">
                                <div>
                                    <h1>
                                        <b>Ready for Success in the new Digital Age?</b>
                                    </h1>
                                    <p>
                                        With Organizein, Get Ready for a 360^ Brand Identity and Accelerated Business
                                        Growth
                                        Data-Driven and Flawlessly Executed Campaigns with High ROI.
                                        Ready to grow your business? Feel Free to Contact Us.
                                    </p>
                                    <a href="#" class="contactus_btn">Contact us</a>
                                    <a class="Edition____btn" href="#">Editions & Pricing</a>
                                </div>

                            </div>
                            <div class="col-12 col-md-6 col-xl-6 col-lg-6 mx-auto">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/erewr.png" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------- section of Success__Digital end  +--------------------->






    <!-------------------------------- Comment box section start  --------------------->
    <section class="comment___box___Wraper">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <form action="functions/save-data.php" method="post" id="form2">
                    <div class="row">
                        <div class="col-12 max____width__ col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
                            <div class="row">
                                <div class="col-12 col-md-6  col-xl-6 comment____area___from col-lg-6 mx-auto">

                                    <h3>We’ve driven over <span class="footer_title_outlin">6,271,747</span> leads for
                                        clients. Discover how we can help your business grow</h3>
                                    <div class="row">

                                        <div class="col-md-6 col-12 Fname___email col-lg-6 col-xl-6 mx-auto">
                                            <h5>Full Name</h5>
                                            <input type="text" placeholder="Full Name" name="name" required />
                                            <h5>Email</h5>
                                            <input type="email" placeholder="your@gmail.com" name="email" required />
                                        </div>
                                        <div class="col-md-6 Fname___email col-12 col-lg-6 col-xl-6 mx-auto">
                                            <h5>Company</h5>
                                            <input type="text" placeholder="Company Name" name="company" required />
                                            <h5>Phone</h5>
                                            <input type="number" placeholder="(555) 555-5555" name="phone" required />
                                        </div>
                                    </div>

                                    <h5>Interested services</h5>
                                    <select name="service" id="Interested services" required>
                                        <option value="">Please Select...</option>
                                        <option value="Web Design and Development">Web Design and Development</option>
                                        <option value="Digital Marketing">Digital Marketing</option>
                                        <option value="SEO">SEO</option>
                                        <option value="SEM">SEM</option>
                                        <option value="Social Media">Social Media</option>
                                        <option value="Email Marketing">Email Marketing</option>
                                        <option value="Inbound Marketing">Inbound Marketing</option>
                                        <option value="Content Development">Content Development</option>
                                        <option value="Cloned Application">Cloned Application</option>
                                        <option value="Mobile Apps">Mobile Apps</option>
                                        <option value="Web Maintenance">Web Maintenance</option>
                                        <option value="Custom">Custom</option>
                                    </select>


                                    <h5>What is your projected monthly budget for this project?</h5>
                                    <select name="budget" id="Interested services" required>
                                        <option value="">Please Select...</option>
                                        <option value="Unknown">Unknown</option>
                                        <option value="$30 - $750/mo.">$30 - $750/mo.</option>
                                        <option value="$750 - $1,500/mo.">$750 - $1,500/mo.</option>
                                        <option value="$1,500 - $3,500/mo.">$1,500 - $3,500/mo.</option>
                                        <option value="$3,500 - $10,000/mo.">$3,500 - 10,000/mo.</option>
                                        <option value="$10,000+/mo.">="$10,000+/mo.</option>
                                    </select>

                                    <h5>How can we help your business?</h5>
                                    <textarea placeholder="Tell us more..." name="message" id="" cols="71.9" rows="3"
                                        required></textarea>
                                    <!-- <div class="g-recaptcha" data-sitekey="6Lc1uigeAAAAADXQ0y8j1Qt6x1UznrzyoIiG279B">
                                    </div> -->
                                    <button>Hear from an expert</button>
                                </div>

                                <div class="col-12 col-md-6 col-xl-6 col-lg-6 mx-auto">
                                    <div class="Organizein_____">
                                        <h3 class="mt-2">Hear from over 500 <span>Organizein</span> clients</h3>
                                        <div class="Wraper___Orga___">
                                            <div class="Organizen____box_____Wraper mb-5">
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div class="Organizen____box">
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/icon1.png" alt=""
                                                                    class="img-fluid" />
                                                                <p>
                                                                    Organizein has been excellent to work with! Very
                                                                    knowledgeable about the ever changing algorithms
                                                                    that
                                                                    make up SEO!
                                                                    <br />
                                                                    <br />
                                                                    <span>Marketing Director </span>
                                                                <p class="Arizona____">ALARM SYSTEM PROVIDER IN MA</p>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="carousel-item">
                                                            <div class="Organizen____box">
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/icon1.png" alt=""
                                                                    class="img-fluid" />
                                                                <p>
                                                                    Organizein did everything they said they would do
                                                                    and
                                                                    did it on time! The whole process was very easy!
                                                                    <br />
                                                                    <br />
                                                                    <span>Owner</span>
                                                                <p class="Arizona____">ARIZONA GARAGE DOOR SUPPLIER</p>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="carousel-item">
                                                            <div class="Organizen____box">
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/icon1.png" alt=""
                                                                    class="img-fluid" />
                                                                <p>
                                                                    Organizein has been a pleasure to work with on our
                                                                    SEO
                                                                    needs and I look forward to working with them on
                                                                    future
                                                                    projecs,
                                                                    <br />
                                                                    <br />
                                                                    <span>Operations Manager</span>
                                                                <p class="Arizona____">METAL STAMPING SERVICE</p>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="carousel-item">
                                                            <div class="Organizen____box">
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/icon1.png" alt=""
                                                                    class="img-fluid" />
                                                                <p>
                                                                    Organizein did everything they said they would do
                                                                    and
                                                                    did it on time! The whole process was very easy!
                                                                    <br />
                                                                    <br />
                                                                    <span>Owner</span>
                                                                <p class="Arizona____">ARIZONA GARAGE DOOR SUPPLIER</p>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="Clinet____testimonials" href="#">VIEW 500+ CLIENT TESTIMONIALS</a>

                                        <div class="Claient____CompanyLogo my-5">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/award-footer.png" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-------------------------------- Comment box section end  --------------------->




    <!---------------------- speak marketing section start  ---------------------->
    <section class="speak____marketing__Wraper mb-5">
        <div class="Warper___header px-4">
            <div class="container-fluid Contact__wraper__bg">
                <div class="row">
                    <div class="col-md-12 max____width__ col-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                        <div class="row justify-content-between align-items-center text-center">
                            <div
                                class="col-12 left___speck___ d-flex justify-content-center align-items-center text-start col-md-7 col-lg-7 col-xl-7 col-xxl-7 mx-auto">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/1675426.png" alt="" class="img-fluid" width="100px" />
                                <div class="company_details">
                                    <h5>Ready to speak with a marketing expert? Give us a ring</h5>
                                    <!-- <h2>+1 646 679-7250</h2> -->
                                    <h2>hi@organizein.com</h2>
                                </div>
                            </div>

                            <div
                                class="col-12 col-md-5 justify-content-center align-items-center text-center col-lg-5 col-xl-5 col-xxl-5 mx-auto">
                                <div class="row">
                                    <div
                                        class="col-12 d-flex justify-content-center align-items-center text-center col-md-4 col-lg-4 col-xl-4 col-xxl-4 mx-auto">
                                        <div class="Single___Client__contact">
                                            <h3>1.6M</h3>
                                            <p>Hours of Expertise</p>
                                        </div>
                                    </div>

                                    <div
                                        class="col-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-center align-items-center text-center  mx-auto">
                                        <div class="Single___Client__contact">
                                            <h3>300+</h3>
                                            <p>Digital Marketing Masters On Staff</p>
                                        </div>
                                    </div>

                                    <div
                                        class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center text-center  col-xxl-4 mx-auto">
                                        <div class="Single___Client__contact">
                                            <h3>1,128</h3>
                                            <p>Websites Launched</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------------- speak marketing section end  ---------------------->

    <?php get_footer(); ?>