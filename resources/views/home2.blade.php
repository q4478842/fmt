<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <!-- <meta http-equiv="X-Frame-Options" content="deny"> -->
    <title>Fund My Tuition</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Michael">
    <meta name="description" content="Sponsor students to help them finish their school.">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ain.css') }}" rel="stylesheet">
    <link rel="icon" href="/image/interface/m.ico" mce_href="/image/interface/m.ico" type="image/x-icon" />
    <meta name="theme-color" content="#ffffff">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="home__page" id="js-front-end">
    <div class="ain-hero">
        <header class="c-header c-header-wrap relative top_menu-js">
            <nav role="navigation" class="c-nav c-nav--primary">
                <div class="u-pull-left">
                    <a class="c-nav__logo" href="http://homestead.test/" title="Fund My Tuition"></a>
                </div>
                <div class="c-nav__right u-pull-right">
                    <ul class="c-nav__items">
                        <li class='c-nav__item first'>
                            <a class='c-nav__link' href='https://www.investmentnetwork.cn/investors-home'>
                                <span class='c-nav__link-text'>Invest</span>
                                <i class='c-icon icon-invest'></i>
                            </a>
                            <div class='dropdown-content'></div>
                        </li>
                        <li class='c-nav__item'>
                            <a class='c-nav__link' href='https://www.investmentnetwork.cn/entrepreneurs-home'>
                                <span class='c-nav__link-text'>Fundraise</span>
                                <i class='c-icon icon-fundraise'></i>
                            </a>
                            <div class='dropdown-content'></div>
                        </li>
                        <li class='c-nav__item'>
                            <a class='c-nav__link' href='https://www.investmentnetwork.cn/#'>
                                <span class='c-nav__link-text'>Help</span>
                                <i class='c-icon icon-help'></i>
                            </a>
                            <div class='dropdown-content'>
                                <a class="c-nav__link first" href="https://www.investmentnetwork.cn/how-it-works">How It Works</a>
                                <a class="c-nav__link" href="https://www.investmentnetwork.cn/entrepreneurs-faq">Fundraise FAQ</a>
                                <a class="c-nav__link" href="https://www.investmentnetwork.cn/investors-faq">Invest FAQ</a>
                                <a class="c-nav__link" href="https://www.investmentnetwork.cn/testimonials">Testimonials</a>
                                <a class="c-nav__link" target="_blank" href="https://www.investmentnetwork.cn/learn">Learn</a>
                                <a class="c-nav__link" href="http://www.angelinvestmentnetwork.net/">Blog</a>
                                <a class="c-nav__link" href="https://www.investmentnetwork.cn/rates">Our Rates</a>
                                <a class="c-nav__link last" href="https://www.investmentnetwork.cn/refunds">Refunds</a>
                            </div>
                        </li>
                        <li class='c-nav__item'>
                            <a class='c-nav__link' href='https://www.investmentnetwork.cn/testimonials'>
                                <span class=''>Testimonials</span>
                            </a>
                        </li>
                        <li class='c-nav__item'>
                            <a class='js-login-register-modal-call c-nav__link' href="{{ route('login') }}" data-action='entrepreneur' data-url='overlay/login'>
                                <span class=''>Login</span>
                            </a>
                        </li>
                        <li class='c-nav__item last'>
                            <a class='js-login-register-modal-call c-nav__button' href="{{ route('register') }}" data-action='entrepreneur' data-url='overlay/signup'>
                                <span class=''>Signup</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="ain__dropdown-menu">
                        <li class="dropdown-menu__item">
                            <a class="dropdown-menu__link" href="#"> Menu </a>

                            <div class="dropdown-content">
                                <section class="ac-container">
                                    <div>
                                        <input id='ac-1' name='accordion-1' type='checkbox'>
                                        <label class='no-border-top ac-container no-border-bottom' for='ac-1'>
                                            <a class='top-level c-nav__link' href='https://www.investmentnetwork.cn/investors-home'>Invest</a>
                                        </label>
                                    </div>
                                    <div>
                                        <input id='ac-2' name='accordion-1' type='checkbox'>
                                        <label class='ac-container no-border-bottom' for='ac-2'>
                                            <a class='top-level c-nav__link' href='https://www.investmentnetwork.cn/entrepreneurs-home'>Fundraise</a>
                                        </label>
                                    </div>
                                    <div>
                                        <input id='ac-3' name='accordion-1' type='checkbox'>
                                        <label class='ac-container no-border-bottom' for='ac-3'>
                                            <a class='top-level c-nav__link' href='https://www.investmentnetwork.cn/testimonials'>Testimonials</a>
                                        </label>
                                    </div>
                                    <div>
                                        <input id='ac-4' name='accordion-1' type='checkbox'>
                                        <label class='ac-container no-border-bottom' for='ac-4'>
                                            <a class='top-level js-login-register-modal-call c-nav__link' href='https://www.investmentnetwork.cn/overlay/login' data-action='entrepreneur'
                                                data-url='overlay/login'>Login</a>
                                        </label>
                                    </div>
                                    <div>
                                        <input id='ac-5' name='accordion-1' type='checkbox'>
                                        <label class='ac-container no-border-bottom' for='ac-5'>
                                            <a class='top-level js-login-register-modal-call c-nav__button' href='https://www.investmentnetwork.cn/overlay/signup' data-action='entrepreneur'
                                                data-url='overlay/signup'>Signup</a>
                                        </label>
                                    </div>
                                    <div>
                                        <input id='ac-6' name='accordion-1' type='checkbox'>
                                        <label class='ac-container' for='ac-6'>Help
                                            <i class='i-chevron-down'></i>
                                        </label>
                                        <article class='ac-small'>
                                            <ul>
                                                <li>
                                                    <a class="c-nav__link first" href="https://www.investmentnetwork.cn/how-it-works">How It Works</a>
                                                </li>
                                                <li>
                                                    <a class="c-nav__link" href="https://www.investmentnetwork.cn/entrepreneurs-faq">Fundraise FAQ</a>
                                                </li>
                                                <li>
                                                    <a class="c-nav__link" href="https://www.investmentnetwork.cn/investors-faq">Invest FAQ</a>
                                                </li>
                                                <li>
                                                    <a class="c-nav__link" href="https://www.investmentnetwork.cn/testimonials">Testimonials</a>
                                                </li>
                                                <li>
                                                    <a class="c-nav__link" target="_blank" href="https://www.investmentnetwork.cn/learn">Learn</a>
                                                </li>
                                                <li>
                                                    <a class="c-nav__link" href="http://www.angelinvestmentnetwork.net/">Blog</a>
                                                </li>
                                                <li>
                                                    <a class="c-nav__link" href="https://www.investmentnetwork.cn/rates">Our Rates</a>
                                                </li>
                                                <li>
                                                    <a class="c-nav__link last" href="https://www.investmentnetwork.cn/refunds">Refunds</a>
                                                </li>
                                            </ul>
                                        </article>
                                    </div>
                                </section>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
    <div class="ain-block text-center bg-light" id="js-scrolled">
        <div class="container">
            <div class="row">
                @include('donation') @include('donation') @include('donation')
                <h3 class="text-normal text-center ">
                    <span class="editableLabel " labelid="home_page:browse_project ">Browse business ideas, startups and larger companies from all over the world.
                    </span>
                </h3>
                <div class="text-center ">
                    <a class="show-more-proposal " href="business-proposal ">
                        <span class="editableLabel" labelid="home_page:show_me_more_proposal ">Show me some pitches</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="ain-footer footer_twiter-update ">
        <div class="container ">
            <div class="ani-footer-top ">
                <div class="row ">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        <div class="ain__footer-logos ">
                            <a id="footer-logo " title="Angel Investment Network, China " href="https://www.investmentnetwork.cn/ ">
                                <img src="https://75dc2414b1aa08a5e135-2a7dd728879e595e5c1e336acb85c210.ssl.cf3.rackcdn.com/assets/img/logos/angel-investment-network-logo.png
                    " alt="Angel Investment Network ">
                            </a>
                            <img src="https://75dc2414b1aa08a5e135-2a7dd728879e595e5c1e336acb85c210.ssl.cf3.rackcdn.com/assets/img/logo_PayPal.png
                    " alt="Logo PayPal ">
                            <img src="https://75dc2414b1aa08a5e135-2a7dd728879e595e5c1e336acb85c210.ssl.cf3.rackcdn.com/assets/img/siteseal_gd_3_h_l_m.gif
                    " alt="SSL site seal - click to verify ">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right ">
                        <ul class="follow-us-ul ">
                            <li>
                                <a href="https://www.facebook.com/pages/Angel-Investment-Network/132382673486552?v=wall
                    " target="_blank ">
                                    <img src="https://75dc2414b1aa08a5e135-2a7dd728879e595e5c1e336acb85c210.ssl.cf3.rackcdn.com/assets/img/icon-fb.png
                    " class="img-responsive ">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/groups?mostPopular=&amp;gid=2292583 " target="_blank ">
                                    <img src="https://75dc2414b1aa08a5e135-2a7dd728879e595e5c1e336acb85c210.ssl.cf3.rackcdn.com/assets/img/icon-linkedin-round.png
                    " class="img-responsive ">
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/Angel__Network " target="_blank ">
                                    <img src="https://75dc2414b1aa08a5e135-2a7dd728879e595e5c1e336acb85c210.ssl.cf3.rackcdn.com/assets/img/icon-twitter.png
                    " class="img-responsive ">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com/mikelebus/pinvesting-pintrepreneurship/ " target="_blank ">
                                    <img src="https://75dc2414b1aa08a5e135-2a7dd728879e595e5c1e336acb85c210.ssl.cf3.rackcdn.com/assets/img/icon-pin.png
                    " class="img-responsive " alt="pintrest ">
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/107457170460731686443 " target="_blank ">
                                    <img src="https://75dc2414b1aa08a5e135-2a7dd728879e595e5c1e336acb85c210.ssl.cf3.rackcdn.com/assets/img/icon-g-plus.png
                    " class="img-responsive " alt="googleplus ">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="ain-footer-mid ">
                <div class="row fot-heading ">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                        <h3>Latest Tweets </h3>
                        <div class="latest-tweet ">
                            <div style="padding:0 0 4px; ">&bull; RT @
                                <a href="http://twitter.com/Mined_Block
                    " style="padding:3px 0;display:inline " class="fontsmall black
                    ">Mined_Block</a>: Pls retweet - We're raising funds on Angel Investment Network @
                                <a href="http://twitter.com/angel__network "
                                    style="padding:3px 0;display:inline " class="fontsmall black
                    ">angel__network</a>. Check out our pitch at
                                <a href="https://t.co/JNp1Ios… " style="padding:3px 0;display:inline "
                                    class="fontsmall black " target="_blank ">https://t.co/JNp1Ios…</a>
                            </div>
                        </div>
                        <a href="https://twitter.com/angel__network " target="_blank " class="follow-w-t ">Follow us on Twitter </a>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                        <div class="row ">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                                <h3>
                                    <span class="editableLabel " labelid="footer:hub_pages ">More Information About:</span>
                                </h3>
                                <ul class="nav ain-fot-nav ">
                                    <li>
                                        <a href='https://www.investmentnetwork.cn/business-china' title='Business in China'>
                                        Business in China</a>
                                    </li>
                                    <li>
                                        <a href='https://www.investmentnetwork.cn/angel-investors-china' title='Angel Investors in China'>
                                        Angel Investors in China</a>
                                    </li>
                                    <li>
                                        <a href='https://www.investmentnetwork.cn/new-business-china' title='New Business in China'>
                                        New Business in China</a>
                                    </li>
                                    <li>
                                        <a href='https://www.investmentnetwork.cn/early-stage-investment' title='Early Stage Investment'>
                                        Early Stage Investment</a>
                                    </li>
                                    <li>
                                        <a href='https://www.investmentnetwork.cn/start-up-capital-chinas-entrepreneurs' title='Start Up Capital & China'
                                            s Entrepreneurs '> Start Up Capital & China's Entrepreneurs</a>
                                    </li>
                                </ul>




                                <ul class="nav ain-fot-nav ">
                                    <li>
                                        <a href='https://www.investmentnetwork.cn/angel-investment-groups-china' title='Angel Investment Groups: China'>Angel Investment Groups: China</a>
                                    </li>
                                    <li>
                                        <a href='https://www.investmentnetwork.cn/shanghai-investors-and-entrepreneurs' title='Shanghai Investors and Entrepreneurs'>Shanghai Investors and Entrepreneurs</a>
                                    </li>
                                    <li>
                                        <a href='https://www.investmentnetwork.cn/beijing-investors-and-entrepreneurs' title='Beijing Investors and Entrepreneurs'>Beijing Investors and Entrepreneurs</a>
                                    </li>
                                    <li>
                                        <a href='https://www.investmentnetwork.cn/guangzhou-investors-and-entrepreneurs' title='Guangzhou Investors and Entrepreneurs '>Guangzhou Investors and Entrepreneurs </a>
                                    </li>
                                    <li>
                                        <a href='https://www.investmentnetwork.cn/xiamen-investors-and-entrepreneurs' title='Xiamen Investors and Entrepreneurs'>Xiamen Investors and Entrepreneurs</a>
                                    </li>
                                </ul>


                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                                <h3>
                                    <span class="editableLabel " labelid="footer:navigation ">Navigation</span>
                                </h3>
                                <ul class="nav ain-fot-nav ">

                                    <li>
                                        <a href="https://www.investmentnetwork.cn/how-it-works ">How It Works</a>
                                    </li>
                                    <li>
                                        <a href="https://www.investmentnetwork.cn/contact-us ">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="https://www.investmentnetwork.cn/about-us ">About Us</a>
                                    </li>
                                    <li>
                                        <a href="https://www.investmentnetwork.cn/testimonials ">Testimonials</a>
                                    </li>
                                    <li>
                                        <a href="https://www.investmentnetwork.cn/press ">In the Press</a>
                                    </li>
                                    <li>
                                        <a href="https://www.investmentnetwork.cn/company-info ">Company Info</a>
                                    </li>
                                    <li>
                                        <a href="https://www.investmentnetwork.cn/affiliates-home ">Affiliates</a>
                                    </li>
                                    <li>
                                        <a target="_blank " href="http://www.angelinvestmentnetwork.net/ ">Blog</a>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                                <h3>
                                    <span class="editableLabel " labelid="footer:entrepreneur_pages ">Entrepreneur Pages</span>
                                </h3>
                                <ul class="nav ain-fot-nav ">
                                    <li>
                                        <a href="https://www.investmentnetwork.cn/entrepreneur/submit_proposal
                    ">
                                            <span class="editableLabel " labelid="footer:submit_a_pitch ">Add a Pitch</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.investmentnetwork.cn/rates ">Rates</a>
                                    </li>
                                    <li>
                                        <a href="https://www.investmentnetwork.cn/get-investor-ready ">Get Investor Ready</a>
                                    </li>
                                    <li>
                                        <a href="https://www.investmentnetwork.cn/entrepreneurs-faq ">Entrepreneur FAQ</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 ">
                                <h3>
                                    <span class="editableLabel " labelid="footer:investor_pages ">Investor Pages</span>
                                </h3>
                                <ul class="nav ain-fot-nav ">
                                    <li>
                                        <a href="https://www.investmentnetwork.cn/investor/register ">
                                            <span class="editableLabel
                    " labelid="footer:register ">Register</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.investmentnetwork.cn/business-proposal ">Business Proposal</a>
                                    </li>
                                    <li>
                                        <a href="https://www.investmentnetwork.cn/investor-resources ">Investor Resources</a>
                                    </li>
                                    <li>
                                        <a href="https://www.investmentnetwork.cn/investors-faq ">Investors FAQ</a>
                                    </li>

                                    <li>
                                        <a href="https://www.seedtribe.com " target="_blank ">
                                            <span class="editableLabel
                    " labelid="global:online_crowdfunding ">Online Crowdfunding</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ain-footer-bottom ">
                <div class="row ">
                    <div class="col-md-9 col-sm-12 ">
                        <ul class="nav navbar-nav ain-fot-nav ">
                            <li>
                                <a href="https://www.investmentnetwork.cn/terms-and-conditions ">Terms and Conditions</a>
                            </li>
                            <li>
                                <a href="https://www.investmentnetwork.cn/privacy-policy ">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="https://www.investmentnetwork.cn/sitemap ">Site Map</a>
                            </li>
                            <li>
                                <a href="https://www.investmentnetwork.cn/refunds ">Refunds</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-12 ">
                        <p class="ain-footer-name ">&copy; 2018 Angel Investment Network Ltd - Connecting Global & Local Entrepreneurs with Angel Investors
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="notificationDiv " class="ajax-status-popup " style="display:none; "></div>
    <a href="# " class="js_go-top go-top ">
        <i class="material-icons ">arrow_upward</i>
    </a>
    <div id="js-ain-modal " class="modal new-model in ">
        <div class="close fade-in two " data-dismiss="modal ">
            <span class="close-icon ">×</span>
        </div>
        <div class="modal-content text-center ">
            <div class="md-modal md-effect ">
                <div class="js-modal-content js-popup-content "> </div>
            </div>
        </div>
    </div>
    <a href="https://www.investmentnetwork.cn/overlay/feedback_submitDoc " class="ain-h js-Docfeedback-call ">&nbsp</a>
    <div id="login-register-modal " class="modal ">
        <div class="close fade-in two " data-dismiss="modal ">
            <span class="close-icon ">×</span>
        </div>
        <div class="modal-content ">
            <div class="md-modal md-effect custom-modal-content "> </div>
        </div>
    </div>
    <!-- TrustBox script -->
    <script type="text/javascript " src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js " async></script>
    <!-- End Trustbox script -->

</body>

</html>