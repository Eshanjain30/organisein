<!doctype html>
<html lang="en">

<head>
    <!--------------- Required meta tags ------------------->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css" />

    <!----------------------- custom css  ----------------------->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/./style css/style.css">
    <!---------------------- fontawesome  ------------------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/logo favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/./megaMenu.css">
    <style>
        .loader {
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            position: fixed;
        }

        .center-box {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120px;
            height: 120px;
        }

        .spinner {
            border: 16px solid #f3f3f3;
            /* Light grey */
            border-top: 16px solid #3498db;
            /* Blue */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <title>organizein</title>
</head>

<body>
    <div class="loader d-none">
        <div class="center-box">
            <div class="spinner"></div>
        </div>
    </div>
    <!--------------------- header section start --------------------------->
    <header>
        <div class="____shadow">
            <div class="Warper___header px-4">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-12 top__header__Wraper mx-auto">
                            <div class="left___site____top_____header">
                                <span>Get Custom Proposal</span>
                                <ul>
                                    <li class="social_media_icons"><a href="https://www.facebook.com/organizeindm/ 
                                        "><i class="fab fa-facebook"></i></a><span>Facebook</span></li>
                                    <li class="social_media_icons"><a href="https://twitter.com/Organizein/ "><i
                                                class="fab fa-twitter"></i></a><span>Twitter</span></li>
                                    <li class="social_media_icons"><a
                                            href="https://www.linkedin.com/company/3273657/"><i
                                                class="fab fa-linkedin"></i></a><span>Linkedin</span></li>
                                    <li class="social_media_icons"><a href="https://www.youtube.com/channel/UCAuvWg57vxGiRcyRV9p3Avw/videos
                                        "><i class="fab fa-youtube"></i></a><span>Youtube</span></li>
                                    <li class="social_media_icons"><a href="https://www.instagram.com/organizein_/"><i
                                                class="fab fa-instagram"></i></a><span>Instagram</span></li>
                                </ul>
                            </div>
                            <div class="right___site____top___header">
                                <div class="number___div">
                                    <!-- <span><i class="fas fa-mobile-alt"></i> +1 646 679-7250</span> -->
                                    <span><i class="fas fa-mobile-alt"></i> hi@organizein.com</span>
                                </div>
                                <div class="login___img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/login.svg" alt="flag" class="img-fluid flag"
                                        class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <span class="login_btn_company">Login
                                        <div class="openPoper">
                                            <div class="head">
                                                <div class="logo"></div>
                                                <a href="#" class="login">Login</a>
                                            </div>
                                            <div class="center">
                                                <div class="otherLogins">Other Logins</div>
                                                <p>Staff login , client KPI...</p>
                                                <div class="bottom">
                                                    <a href="https://crm.organizein.com/admin">Staff Login</a>
                                                    <a href="https://crm.organizein.com">Client Login</a>
                                                    <a href="https://crm.organizein.com/myaccount/login">Kpi
                                                        Dashboard</a>
                                                </div>
                                            </div>
                                        </div>

                                    </span>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/icon-login.png" alt="persone" class="img-fluid persone__logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!------------------------- middel header section start  ------------------------------>

        <div class="Warper___header nav___sit px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12 middle___header__Wraper mx-auto">
                        <div class="logo__img logo___p">
                            <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/logo.png" alt="logo__img" class="img-fluid" /></a>
                        </div>
                        <div class="list___nav__here">
                            <ul>
                                <li><a href="#" class="mega_trigger_1">SEO <i class="fas fa-chevron-down"></i></a>
                                    <div class="mega_menu_container mega_trigger_1_container">
                                        <div class="mega_menu_wrapper mega_trigger_1">
                                            <div class="mega_menu_left">
                                                <div>
                                                    <div class="mega_menu_left_heading">BOOST ONLINE PRESENCE</div>
                                                    <h4>SEO Services :Turn
                                                        Traffic Increases Into
                                                        Revenue</h4>
                                                    <p class="small-txt">Start ranking higher, earning<br>
                                                        more qualified traffic, and<br>
                                                        increasing your bottom line with<br>
                                                        fully-managed SEO services<br>
                                                        from organizein</p>
                                                </div>
                                                <div class="serviceBtn">
                                                    <a href="https://www.organizein.com/seo/" class="allService">
                                                        <img src="https://www.organizein.com/wp-content/uploads/2021/01/allservice.png"
                                                            alt="" srcset="" width="40px">
                                                        See All Services
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mega_menu_right ">
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">DRIVE MORE LEADS</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/seo-services/">SEO
                                                            Services</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/e-commerce-seo/">eCommerce
                                                            SEO</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/local-seo/">Local
                                                            SEO</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/link-building-services-seo/">Link
                                                            Building Services</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/link-penalty-removal/">Link
                                                            Penalty Removal</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/seo-audits/">SEO
                                                            Audits</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/negative-seo-monitoring/">Negative
                                                            SEO Monitoring</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/seo-competitor-intelligence/">SEO
                                                            Competitor Intelligence</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/video-seo/">Video
                                                            SEO</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/pnb-guest-blog-outreach/">PNB
                                                            -Guest Blog</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/gov-edu-link-building/">Gov
                                                            &amp; Edu link Building</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/website-seo-copywriting/">Website
                                                            SEO Copywriting</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/voice-search-content-optimization/">Voice
                                                            Search Content Optimization</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/seo-friendly-site-architecture/">SEO
                                                            Friendly Site Architecture</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/seo-strategy-advice/">SEO
                                                            Strategy Advice</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/top-keywords-advice/">Top
                                                            Keywords Advice</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/digital-pr/">Digital
                                                            PR</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">Increase Your Reach</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/amazon-seo-product-optimization/">Amazon
                                                            SEO &amp; Product Optimization</a><a class="item_data"
                                                            href="https://www.organizein.com/mobile-apps-seo/">Mobile
                                                            Apps SEO</a><a class="item_data"
                                                            href="https://www.organizein.com/optimize-social-media/">Optimize
                                                            Social Media</a><a class="item_data"
                                                            href="https://www.organizein.com/hubsot-seo/">HubSpot
                                                            SEO</a><a class="item_data"
                                                            href="https://www.organizein.com/wix-seo/">Wix SEO</a><a
                                                            class="item_data"
                                                            href="https://www.organizein.com/shopify-seo/">Shopify
                                                            SEO</a><a class="item_data"
                                                            href="https://www.organizein.com/wordpress-seo/">Wordpress
                                                            SEO</a><a class="item_data"
                                                            href="https://www.organizein.com/volusion-seo/">Volusion
                                                            SEO</a><a class="item_data"
                                                            href="https://www.organizein.com/magento-seo/">Magento
                                                            SEO</a><a class="item_data"
                                                            href="https://www.organizein.com/squarespace-seo/">Squarespace
                                                            SEO</a><a class="item_data"
                                                            href="https://www.organizein.com/woocommerce-seo/">WooCommerce
                                                            SEO</a><a class="item_data"
                                                            href="https://www.organizein.com/bigcommerce-seo/">BigCommerce
                                                            SEO</a><a class="item_data"
                                                            href="https://www.organizein.com/weebly-seo/">Weebly SEO</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">Accelerate Your Revenue</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/enterprise-seo/">Enterprise
                                                            SEO</a><a class="item_data"
                                                            href="https://www.organizein.com/franchse-seo/">Franchise
                                                            SEO</a><a class="item_data"
                                                            href="https://www.organizein.com/hire-dedicated-seo-team/">Hire
                                                            Dedicated SEO Team</a><a class="item_data"
                                                            href="https://www.organizein.com/white-label-seo/">White-label
                                                            SEO</a><a class="item_data"
                                                            href="https://www.organizein.com/seo-project-management/">SEO
                                                            Project Management</a><a class="item_data"
                                                            href="https://www.organizein.com/managed-seo-service/">Managed
                                                            SEO Service</a><a class="item_data"
                                                            href="https://www.organizein.com/web-consule-management/">Web
                                                            console Management</a><a class="item_data"
                                                            href="https://www.organizein.com/custom-seo-dashboard-reporting/">Custom
                                                            SEO Dashboard &amp; Reporting</a><a class="item_data"
                                                            href="https://www.organizein.com/smb-solution/">SMB
                                                            Solution</a><a class="item_data"
                                                            href="https://www.organizein.com/multigual-seo/">Multilingual
                                                            SEO</a><a class="item_data"
                                                            href="https://www.organizein.com/seo-web-speed-optimization/">SEO
                                                            Web Speed Optimization</a><a class="item_data"
                                                            href="https://www.organizein.com/seo-safe-cdn-integration/">SEO
                                                            Safe CDN Integration</a><a class="item_data"
                                                            href="https://www.organizein.com/improve-score-in-gtmetrix/">Improve
                                                            Score in GTMetrix</a><a class="item_data"
                                                            href="https://www.organizein.com/improve-core-web-vitals/">Improve
                                                            Core Web Vitals</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li><a href="#" class="mega_trigger_2">SEM <i class="fas fa-chevron-down"></i></a>
                                    <div class="mega_menu_container mega_trigger_2_container">
                                        <div class="mega_menu_wrapper mega_trigger_2">
                                            <div class="mega_menu_left">
                                                <div>
                                                    <div class="mega_menu_left_heading">BUSINESS VERTICALS</div>
                                                    <h4>Learn how organizein can help any industry work from anywhere.
                                                    </h4>
                                                    <p class="small-txt">Technical partners for online advertising and
                                                        marketing companies</p>
                                                </div>
                                            </div>
                                            <div class="mega_menu_right ">
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">Search Engine</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/google-search-ads/">Google
                                                            Search Ads</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/google-display-ads/">Google
                                                            Display Ads</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/google-remarketing-ads/">Google
                                                            Remarketing Ads</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/google-mobile-ads/">Google
                                                            Mobile Ads</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/google-shopping-ads/">Google
                                                            Shopping Ads</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/google-video-ads/">Google
                                                            Video Ads</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/microsoft-ads/">Microsoft
                                                            Ads</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/yahoo-ads/">Yahoo
                                                            Ads</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/amazon-ads/">Amazon
                                                            Ads</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/spotify-ads/">Spotify
                                                            Ads</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">Social Network</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/facebook-ads/">Facebook
                                                            Ads</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/instagram-ads/">Instagram
                                                            Ads</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/twitter-ads/">Twitter
                                                            Ads</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/linkedin-ads/">LinkedIn
                                                            Ads</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/youtube-ads/">Youtube
                                                            Ads</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/snapchat-ads/">Snapchat
                                                            Ads</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/taboola/">Taboola</a>

                                                        <a class="item_data"
                                                            href="https://www.organizein.com/pinterest-ads/">Pinterest
                                                            Ads</a>
                                                    </div>

                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">Mobile Network</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/admob/">AdMob</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/adcolony/">AdColony</a>

                                                        <a class="item_data"
                                                            href="https://www.organizein.com/tubemogul/">TubeMogul</a>

                                                        <a class="item_data"
                                                            href="https://www.organizein.com/airpush/">Airpush</a>

                                                        <a class="item_data"
                                                            href="https://www.organizein.com/one-by-aol/">ONE by
                                                            AOL</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/inmobi/">Inmobi</a>

                                                        <a class="item_data"
                                                            href="https://www.organizein.com/leadbolt/">LeadBolt</a>

                                                        <a class="item_data"
                                                            href="https://www.organizein.com/ad-recover/">Ad
                                                            Recover</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li><a href="#" class="mega_trigger_3">Digital Marketing <i
                                            class="fas fa-chevron-down"></i></a>
                                    <div class="mega_menu_container mega_trigger_3_container">
                                        <div class="mega_menu_wrapper mega_trigger_3">
                                            <div class="mega_menu_left">
                                                <div>
                                                    <div class="mega_menu_left_heading">OUR TOP SERVICES</div>
                                                    <h4>Digital Marketing
                                                        That Drives Revenue
                                                        Revenue</h4>
                                                    <p class="small-txt">Power Your Business To New
                                                        Height With Our Award Winning
                                                        Digital Marketing Services And
                                                        Technologies Platform</p>
                                                </div>
                                                <div class="serviceBtn">
                                                    <a href="https://www.organizein.com/seo/" class="allService">
                                                        <img src="https://www.organizein.com/wp-content/uploads/2021/01/allservice.png"
                                                            alt="" srcset="" width="40px">
                                                        See All Services
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mega_menu_right ">
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">ATTRACT PROSPECTS</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/seo/">Search Engine
                                                            Optimization</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/search-engine-marketing-seo/">Search
                                                            Engine Marketing</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/mobile-advertising/">Mobile
                                                            Advertising</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/influencer-marketing/">Influencer
                                                            Marketing</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/branding-design/">Branding
                                                            &amp; Design</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/managed-digital-service-360/">Managed
                                                            Digital Service 360</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">BUID ENGAGEMENT</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/social-media-marketing-seo/">Social
                                                            Media Marketing</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/re-marketing-ads/">Re-Marketing
                                                            Ads</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/content-development-seo/">Content
                                                            Development</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">TURN OPPORTUNITIES INTO CLIENTS</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/sms-marketing/">SMS
                                                            Marketing</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/email-marketing-seo/">Email
                                                            Marketing</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/crm-integrations-analytics/">CRM
                                                            Integrations &amp; Analytics</a>
                                                        <div class="digitalMarking">
                                                            <div>Digital Marketing Pricing
                                                            </div>
                                                            <a href="">view pricing</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li><a href="#" class="mega_trigger_4">Development <i
                                            class="fas fa-chevron-down"></i></a>
                                    <div class="mega_menu_container mega_trigger_4_container">
                                        <div class="mega_menu_wrapper mega_trigger_4">
                                            <div class="mega_menu_left">
                                                <div>
                                                    <div class="mega_menu_left_heading">CUSTOM SOFTWARE DEVLOPMENT</div>
                                                    <h4>Transform your business through full-stack custom software
                                                        solutions
                                                    </h4>
                                                    <p class="small-txt">We cover mobile, web, app custom software
                                                        development for various verticals. <br>Our focus: your business
                                                        goals
                                                        and customers’ needs. </p>
                                                    <div class="serviceBtn">
                                                        <a href="https://www.organizein.com/seo/" class="allService">
                                                            <img src="https://www.organizein.com/wp-content/uploads/2021/01/allservice.png"
                                                                alt="" srcset="" width="40px">
                                                            See All Services
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mega_menu_right ">
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">WEB DEVELOPMENT</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/ecommerce-store/">eCommerce
                                                            Store</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/php-web-development/">PHP
                                                            Web Development</a>

                                                        <a class="item_data"
                                                            href="https://www.organizein.com/wordpress-development/">WordPress
                                                            Development</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/chatbot-apps/">Chatbot
                                                            Apps</a></li736>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/website-localization/">Website
                                                            Localization</a>

                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">MOBILE APPLICATION</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/android-app-development/">Android
                                                            App
                                                            development</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/ios-app-development/">iOS
                                                            App Development</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/hybrid-apps/">Hybrid
                                                            Apps</a>
                                                        <a class="item_data" href="#">MVP Prototypes</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">DOMAIN &amp; SERVER MANAGEMENT</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/dedicated-server-management/">Dedicated
                                                            Server
                                                            Management</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/vps-shared-server-management/">VPS
                                                            &amp; Shared
                                                            Server Management</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/ssl-certification-management/">SSL
                                                            Certification
                                                            Management</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/qa-testing/">QA &amp;
                                                            Testing</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/migration-services/">Migration
                                                            Services</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li><a href="#" class="mega_trigger_5">Industry <i class="fas fa-chevron-down"></i></a>
                                    <div class="mega_menu_container mega_trigger_5_container">
                                        <div class="mega_menu_wrapper mega_trigger_5">
                                            <div class="mega_menu_left">
                                                <div>
                                                    <div class="mega_menu_left_heading">BUSINESS VERTICALS</div>
                                                    <h4>Learn how Organizein can help any industry work from anywhere.
                                                    </h4>
                                                    <p class="small-txt">Clients in a range of industries trust
                                                        Organizein to drive revenue. Check out the in-depth case studies
                                                        below to learn how we can drive real results for you too</p>
                                                </div>
                                                <div class="serviceBtn">
                                                    <a href="https://www.organizein.com/seo/" class="allService">
                                                        <img src="https://www.organizein.com/wp-content/uploads/2021/01/allservice.png"
                                                            alt="" srcset="" width="40px">
                                                        See All Services
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mega_menu_right ">
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">Industry</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/financial-services/">Financial
                                                            Services</a>

                                                        <a class="item_data"
                                                            href="https://www.organizein.com/healthcare-life-sciences/">Healthcare
                                                            &amp;
                                                            Life Sciences</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/communications/">Communications</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/retail/">Retail</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/consumer-goods/">Consumer
                                                            Goods</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/media-agencies/">Media
                                                            Agencies</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/government/">Government</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/manufacturing/">Manufacturing</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/transportation-hospitality/">Transportation
                                                            &amp; Hospitality</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/automotive/">Automotive</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading"></div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/higher-education/">Higher
                                                            Education</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/nonprofits/">Nonprofits</a>

                                                        <a class="item_data"
                                                            href="https://www.organizein.com/professional-services/">Professional
                                                            Services</a>

                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">BUSINESS TYPE</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/small-business/">Small
                                                            Business</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/medium-sized-business/">Medium
                                                            sized business</a>

                                                        <a class="item_data"
                                                            href="https://www.organizein.com/franchise-business/">Franchise
                                                            business</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/enterprise/">Enterprise</a>

                                                        <a class="item_data"
                                                            href="https://www.organizein.com/startups/">Startups</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#" class="mega_trigger_6">Support <i class="fas fa-chevron-down"></i></a>
                                    <div class="mega_menu_container mega_trigger_6_container">
                                        <div class="mega_menu_wrapper mega_trigger_6">
                                            <div class="mega_menu_left">


                                                <div>
                                                    <div class="mega_menu_left_heading">BUSINESAS VERTICALS</div>
                                                    <h4>Learn how Organizein can help any industry work from anywhere.
                                                    </h4>
                                                    <p class="small-txt">
                                                        Clients in a range of industries trust Organizein to drive
                                                        revenue. Check out the in-depth case studies below to learn how
                                                        we can drive real results for you too</p>
                                                    <div class="serviceBtn">
                                                        <a href="https://www.organizein.com/seo/" class="allService">
                                                            <img src="https://www.organizein.com/wp-content/uploads/2021/01/allservice.png"
                                                                alt="" srcset="" width="40px">
                                                            See All Services
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mega_menu_right ">
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">CUSTOMER STORIES</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/case-studies/">Case
                                                            Studies</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/onboarding-services/">Onboarding
                                                            services</a>
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/client-testimonials/">Client
                                                            Testimonials</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">RESOURCES</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/get-a-free-digital-audit-report/">Get
                                                            a free digital
                                                            audit report</a><a class="item_data"
                                                            href="https://www.organizein.com/what-is-crm/">What is
                                                            CRM</a><a class="item_data"
                                                            href="https://www.organizein.com/what-is-digital-marketing/">What
                                                            is Digital Marketing</a><a class="item_data"
                                                            href="https://www.organizein.com/what-is-inbound-marketing/">What
                                                            is Inbound
                                                            Marketing</a><a class="item_data"
                                                            href="https://www.organizein.com/what-is-search-engine-optimization/">What
                                                            is Search
                                                            Engine Optimization</a><a class="item_data"
                                                            href="https://www.organizein.com/how-much-should-a-website-cost/">How
                                                            much should a
                                                            website cost?</a><a class="item_data"
                                                            href="https://www.organizein.com/how-much-does-seo-cost/">How
                                                            much does SEO Cost?</a>

                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">FAQ</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/service-faq/">Service
                                                            FAQ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#" class="mega_trigger_7">About Us <i class="fas fa-chevron-down"></i></a>
                                    <div class="mega_menu_container mega_trigger_7_container">
                                        <div class="mega_menu_wrapper mega_trigger_7">
                                            <div class="mega_menu_left">
                                                <div>
                                                    <div class="mega_menu_left_heading">ABOUT US</div>
                                                    <h4>About Company
                                                        That Drives Revenue</h4>
                                                    <p class="small-txt">Power Your Business To New
                                                        Height With Our Award Winning
                                                        Digital Marketing Services And
                                                        Technologies Platform</p>
                                                </div>
                                                <div class="serviceBtn">
                                                    <a href="https://www.organizein.com/seo/" class="allService">
                                                        <img src="https://www.organizein.com/wp-content/uploads/2021/01/allservice.png"
                                                            alt="" srcset="" width="40px">
                                                        See All Services
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mega_menu_right ">
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">About Us</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/our-story/">Our Story</a><a
                                                            class="item_data"
                                                            href="https://www.organizein.com/organizeinteam/">Team</a><a
                                                            class="item_data"
                                                            href="https://www.organizein.com/our-locations/">Locations</a><a
                                                            class="item_data"
                                                            href="https://www.organizein.com/timeline/">Timeline</a><a
                                                            class="item_data"
                                                            href="https://www.organizein.com/acquisitions-org/">Acquisitions</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">Careers &amp; Culture</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/careers-org/">Careers</a><a
                                                            class="item_data"
                                                            href="https://www.organizein.com/our-culture/">Our
                                                            Culture</a><a class="item_data"
                                                            href="https://www.organizein.com/internship-at-organizein/">Internship
                                                            at Organizein</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">Partners</div>
                                                    <div class="column_items">
                                                        <a class="item_data"
                                                            href="https://www.organizein.com/partner-with-us/">Partner
                                                            with us</a><a class="item_data"
                                                            href="https://www.organizein.com/hire-a-partner/">Hire a
                                                            Partner</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li><a href="#" class="contactus_btn ">contact us</a></li>
                            </ul>
                        </div>
                        <label id="icon">
                            <i class="fas fa-bars"></i>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!------------------------- middel header section end  ------------------------------>



        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-60397574-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());
            gtag('config', 'UA-60397574-1');
        </script>

    </header>
    <!--------------------- header section end --------------------------->