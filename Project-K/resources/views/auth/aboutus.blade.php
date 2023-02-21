@extends('layouts.header1')
@section('title','aboutus')

@section('content')
<link rel="stylesheet" href="https://assets.icliniq.com/v2/assets/css/jquery.toast.css" />

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWB2TRD" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<style>
.logo-sticky{height:50px}.logo-transparent{height:60px;background:#fff;padding:5px;border-radius:10px}.popular-fire{width:20px;margin-top:-10px}.btn.btn-consult{background-color:#f26522;height:35px;line-height:35px;padding:0 15px}
.megamenu-panel{
	left: 35%!important;
	max-width: 700px;
}
.sidebar-textwidget{padding-top:80px}.youtube{background:#b00}.social-list.version-2 li a.youtube:hover{color:#b00;border-color:currentColor}.xs-header.header-main .xs-menus .nav-menu>li>a{padding:30px 0}.nav-sticky.sticky-header .xs-header .xs-menus .nav-menu>li>a{padding:30px 0}.mobile-icon{font-size:16px}.moblie:hover{transition-delay:2s}.animated i{-webkit-animation-duration:2.3s;animation-duration:2.3s;-webkit-animation-fill-mode:both;animation-fill-mode:both}.animated i{-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}.tada:hover i{-webkit-animation-name:tada;animation-name:tada}.header-transparent .xs-header.header-main .xs-menus .nav-menu>li>a .submenu-indicator-chevron{border-color:transparent #181818 #181818 transparent}.xs-header.header-main .xs-menus .nav-menu>li>.user-log.nav-dropdown{right:20px !important}.xs-header.header-main .navSidebar-wraper{bottom:-45px}.nav-sticky .xs-header .xs-logo>img,.nav-sticky .xs-header .nav-brand>img{top:25%}.breadcumbs>li>a{font-weight:700}.breadcumbs>li{color:#ccc}.header-tranparent-style2 .xs-header.header-main .xs-menus .nav-menu>li>a::before{background-color:#0c5adb;-webkit-box-shadow:9px 0 0 0 #0c5adb,18px 0 0 0 #0c5adb;box-shadow:9px 0 0 0 #0c5adb,18px 0 0 0 #0c5adb}.nav-sticky.sticky-header .xs-header .xs-menus .nav-menu>li>a::before{bottom:calc(0% + 22px)}.close-side-widget{line-height:37px;border:2px solid currentColor}@-webkit-keyframes tada{0%{-webkit-transform:scale(1.5)}10%,20%{-webkit-transform:scale(1.4) rotate(-3deg)}30%,50%,70%,90%{-webkit-transform:scale(1.6) rotate(3deg)}40%,60%,80%{-webkit-transform:scale(1.6) rotate(-3deg)}100%{-webkit-transform:scale(1) rotate(0)}}@keyframes tada{0%{transform:scale(1.5)}10%,20%{transform:scale(1.4) rotate(-3deg)}30%,50%,70%,90%{transform:scale(1.6) rotate(3deg)}40%,60%,80%{transform:scale(1.6) rotate(-3deg)}100%{transform:scale(1) rotate(0)}}@media(max-width:1255px){.header-transparent .xs-header.header-main .xs-menus .nav-menu>li:not(:last-child){padding-right:0}}@media(max-width:1074px){.header-transparent .xs-header.header-main .xs-menus .nav-menu>li:not(:last-child){margin-right:12px}}@media(max-width:992px){.header-transparent .xs-header.header-main .xs-menus .nav-menu>li>a{color:#333;padding:20px}.hidden-sm{display:none}.nav-sticky .xs_nav-portrait .nav-menus-wrapper,.nav-sticky .nav-overlay-panel{height:100%}.nav-sticky.sticky-header .xs_nav-portrait .nav-menus-wrapper,.nav-sticky .nav-overlay-panel{height:100vh}}@media(max-width:767px){.xs-top-bar-info{margin-bottom:0;text-align:center}.hidden-xs{display:none}}

.single-menu-item a>sub{
	bottom: 6px;
    color: #fff;
    font-weight: 700;
    left: 0px;
    background: linear-gradient(148deg, #ff105e 30%, #f122dd, #f91593 , #cd0048, #ea412c 74%);
    padding: 2px;
    border-radius: 5px;
}
.hello-bar {
	padding: 3px;
    width: 100%;
    text-align: center;
    background: #753d7c;
	color: #fff;
	font-weight: 700;
	min-height: 31px;
}
.consult-modal-btn {
    background: #f26522;
    color: #fff;
    border: 0;
    font-weight: 600;
    padding: 8px 15px;
    text-transform: uppercase;
    border: 1px solid #f26522 !important;
    border-radius: 3px;
    line-height: 20px;
}
.consult-modal-btn:hover {
    color: #fff !important;
    background-color: #ff5200 !important;
}
.badge-new {
		display: inline-block;
		background-color: #ff6666;
		border-radius: 5px;
		color: #fff;
		padding: 1px 5px;
		font-size: 12px;
		position: relative;
		margin-right: 5px;
	}

	.pulsate::before {
		content: "";
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		-webkit-animation: pulse 0.5s ease infinite;
				animation: pulse 0.5s ease infinite;
		border-radius: 5px;
		border: 4px double #ff6666;
	}
	.hello-bar-icliniq{
		color: #fff;
		min-height: 31px;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	@-webkit-keyframes pulse {
		0% {
			transform: scale(1);
			opacity: 1;
		}
		20% {
			transform: scale(1.2);
			opacity: 0.4;
		}
		40% {
			transform: scale(1.3);
			opacity: 0.4;
		}
		60% {
			transform: scale(1.4);
			opacity: 0.4;
		}
		80% {
			transform: scale(1.5);
			opacity: 0.4;
		}
		100% {
			transform: scale(1.6);
			opacity: 0;
		}
	}

	@keyframes pulse {
		0% {
			transform: scale(1);
			opacity: 1;
		}
		20% {
			transform: scale(1.2);
			opacity: 0.4;
		}
		40% {
			transform: scale(1.3);
			opacity: 0.4;
		}
		60% {
			transform: scale(1.4);
			opacity: 0.4;
		}
		80% {
			transform: scale(1.5);
			opacity: 0.4;
		}
		100% {
			transform: scale(1.6);
			opacity: 0;
		}
	}
</style>
<link rel="stylesheet" href="https://assets.icliniq.com/phone-input/css/intlTelInput.min.css">
<div class="clear-fix"></div>
<div class="header nav-sticky header-transparent header-tranparent-style2">

<header class="xs-header header-main" style="display: none;">
<div class="container-fluid">
<div class="row">
<div class="col-lg-2">
<div class="xs-logo-wraper">
<a href="/en/" class="xs-logo">
<img src="https://assets.icliniq.com/v2/assets/images/iCliniq-logo/ic-white-logo.svg" alt="logo" title="logo" class="logo-transparent">
<img src="https://assets.icliniq.com/v2/assets/images/iCliniq-logo/ic-white-logo.svg" alt="logo" title="logo" class="logo-sticky ">
</a>
</div>
</div>
<div class="col-lg-10 col-md-12 pl-0">
<nav class="xs-menus align-to-right">
<div class="nav-header">
<a class="nav-brand" href="/en/">
</a>
<div class="nav-toggle"></div>
</div>
<div class="nav-menus-wrapper">
<ul class="nav-menu align-to-right">
<li><a href="/ask-a-doctor-online">Consult Doctor</a></li>
<li>
<a href="/search/online-doctors-directory">Choose a Doctor</a>
</li>
<li><a href="/qa">Medical Q&A</a></li>
<li>
<a href="#?">More
<img class="popular-fire" src="https://assets.icliniq.com/v2/img/fire-popular.png" alt="Popular">
</a>
<div class="megamenu-panel xs-icon-menu">
<div class="row">
<div class="col-lg-4">
<div class="single-menu-item">
<a href="/ask-a-doctor-online"><i class="fas fa-clinic-medical"></i>Ask a Doctor Online</a>
</div>
<div class="single-menu-item">
<a href="/ask-a-doctor-online/icq100"><i class="fas fa-comment-medical"></i>Chat with a Doctor</a>
</div>
<div class="single-menu-item">
<a href="/phone-a-doctor"><i class="fas fa-mobile-alt"></i>Phone a Doctor</a>
</div>
<div class="single-menu-item">
<a href="/video-chat-with-doctor"><i class="fas fa-video"></i>Video Consultation</a>
</div>
<div class="single-menu-item">
</div>
<div class="single-menu-item">
<a href="/search/online-doctors-directory"><i class="fas fa-search"></i>Choose a Doctor</a>
</div>
<div class="single-menu-item">
<a rel="noreferrer" href="https://help.icliniq.com/"><i class="fas fa-hands-helping"></i>Help</a>
</div>
<div class="single-menu-item">
<a href="/en/lab-tests-at-home"><i class="fas fa-flask"></i>Book a Lab Test</a>
</div>
</div>
<div class="col-lg-4">
<div class="single-menu-item">
<a href="/articles"><i class="far fa-newspaper"></i>Articles</a>
</div>
<div class="single-menu-item">
<a href="/qa"><i class="fas fa-newspaper"></i>Medical Q&A</a>
</div>
<div class="single-menu-item">
<a href="/discuss-case"><i class="fas fa-briefcase-medical"></i>Medical cases</a>
</div>
<div class="single-menu-item">
<a href="/faq/index" target="_blank"><i class="far fa-question-circle"></i>FAQ</a>
</div>
<div class="single-menu-item">
<a href="/symptom-checker?utm_source=icliniq+header&utm_medium=banner&utm_campaign=sym201221" title="Diagnose your symptoms using iCliniq Symptom Checker"><i class="fas fa-user-check"></i>Symptom Checker</a>
</div>
<div class="single-menu-item">
<a href="/mri-ct-scan-tests"><i class="fas fa-flask"></i>MRI/CT Scan</a>
</div>
<div class="single-menu-item">
<a href="https://www.icliniq.com/tool"><i class="fas fa-tools"></i>Tools</a>
</div>
</div>
<div class="col-lg-4">
<div class="single-menu-item">
<a href="/app"><i class="fas fa-mobile"></i>Get iCliniq App</a>
</div>
<div class="single-menu-item">
<a href="about-us"><i class="far fa-address-card"></i>About Us</a>
</div>
<div class="single-menu-item">
<a href="/press"><i class="far fa-newspaper"></i>Press</a>
</div>
<div class="single-menu-item">
<a href="/contact/contact-icliniq"><i class="fas fa-user-friends"></i>Contact</a>
</div>
<div class="single-menu-item">
<a href="/deals-offers" title="Deals & Offer"><i class="fas fa-medal"></i>Deals & Offer</a>
</div>
<div class="single-menu-item">
<a href="https://icliniqsupport.freshdesk.com/support/tickets/new"><i class="fas fa-headset"></i>Support</a>
</div>
</div>
</div>
</div>
</li>
<li>
<a href="#modal-popup-2" class="navsearch-button xs-modal-popup"><i class="fas fa-search"></i></a>
</li>
<li class="m-0 p-0">
<a href="/">Login <span class="hidden-xs hidden-sm hidden-md">/</span></a>
</li>
<li class="pl-1 pr-0">
<a href="user-register"> Signup</a>
</li>
</ul>
</div>
</nav>
</div>
</div>
</div>
</header>
</div>
<link rel="stylesheet" href="https://assets.icliniq.com/v2/assets/css/owl.carousel.min.css">
<style>
	.banner-v2 {
		margin-top: 0;
		padding-top: 0;
	}
	.work-process-icon img {
		width: unset;
	}
    .inner-banner-area{
        /*min-height: 250px;*/
        min-height: 175px;
    }
    .inner-banner-area.height-bg{
        min-height: 450px;
    }
    .inner-banner-area .banner-image{
        position: absolute;
        top: 0;
        left: unset;
        right: 0;
        height: 100%;
        width: 50%;
        background-repeat: no-repeat;
        background-position: center;
        z-index: -1;
        opacity: .1;
        background-size: cover;
    }
    .single-box .hover-area{
        width: 100%;
    }
    .inner-banner-area .banner-image{
        opacity: 0.4;
    }
    .hurdles-mask:after {
        background-image: url('https://assets.icliniq.com/v2/assets/images/Curves.png')
    }
    .inner-banner-area.height-bg.bg-color-white{
        min-height: 973px
    }
    .bg-color-white{
        background-color: #fff;
    }
    .inner-banner-area.bg-color-white .banner-image{
        width: 100%;
        opacity: 1;
    }
	.flex-middle{
		display: flex;
		justify-content: center;
		align-items: center;
	}
    .xs-padding-50{
        padding-right: 50px;
    }
    .video-popup-btn.video-bottom-color{
        background-color: #fff;
        color: #0c5adb;
    }
    .single-box .box-footer {
        padding: 30px 10px 15px;
    }

    .box-footer .list-inline>li a{
        color: #333;
    }
    .box-footer .list-inline>li a:hover{
        color: #007bff;
    }
    .box-footer .title a:hover{
        color: #007bff;
    }
    #right_div .xs-heading{
        margin-top: 23px;
    }
    .box-footer .list-inline{
        padding-top: 15px;
    }
    .btn-view-founder{
        background-color: #fff!important;
        height: 35px;
        line-height: 35px;
        padding: 0 15px;
        color: #0c5adb!important;
        font-weight: 700;
    }
    body{
        color: #333;
    }
    .brand-mention img{
		width: 200px;
		margin: 1rem 0;
		background-color: #fff;
		/* height: 100px; */
		padding: 10px 15px;
		box-shadow: 0 1px 5px 0 rgb(0 0 0 / 16%);
		-webkit-box-shadow: 0 1px 5px 0 rgb(0 0 0 / 16%);
		-moz-box-shadow: 0 1px 5px 0 rgba(0,0,0,.16);
		border-radius: 4px;
	}
	.ic-mentions {
		height: 100px;
		padding: 10px 15px;
	}
    .consult-spec-list {
		height: auto;
		background-color: #fff;
		position: relative;
		display: flex;
		flex-direction: column;
		box-shadow: 0 1px 5px 0 rgb(0 0 0 / 16%);
		-webkit-box-shadow: 0 1px 5px 0 rgb(0 0 0 / 16%);
		-moz-box-shadow: 0 1px 5px 0 rgba(0,0,0,.16);
		border-radius: 4px;
		overflow: hidden;
		margin: 4px 0;
		-webkit-tap-highlight-color: transparent;
		transition: transform .1s linear 0s;
	}
    @media (max-width: 992px) {
        .inner-banner-area .banner-image{
            width: 100%;
        }
    }
    @media (max-width: 767px) {
        .hidden-xs{
            display: none!important;
        }
        .flex-middle{
            padding-top: 50px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .xs-padding-50{
            padding-right: 0;
        }
    }
    @media (max-width: 480px){
        .xs-info-img+.video-content {
            position: absolute;
        }
    }
</style>
<link rel="stylesheet" href="https://assets.icliniq.com/v2/assets/css/about-new-v1.css">
<script defer="" src="https://assets.icliniq.com/v2/assets/js/about-new.js"></script>
<section class="inner-banner-area banner-v2">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="inner-banner-content">
<h1 class="inner-banner-title">About iCliniq</h1>
<ul class="breadcumbs list-inline">
<li><a href="/" title="iCliniq">iCliniq</a></a></li>
<li>About iCliniq</li>
</ul>
<span class="border-divider style-white"></span>
</div>
</div>
</div>
</div>
</section>
<section class="xs-section-padding">
<div class="container">
<div class="row">
<div class="col-lg-6 align-self-center">
<div class="xs-info-wraper style2 wow fadeInUp">
<div class="xs-heading">
<h2 class="section-title">Who we are?</h2>
<span class="line"></span>
</div>
<p>
iCliniq is a <a href='/medical-second-opinion'> Medical Second Opinion </a> platform where users can get medical advice from doctors. Our virtual online medical help service provides the ultimate convenience and premier health care. we are proud to be in the Telemedicine industry. Our doctor panel consists of medical practitioners, physicians and therapists from US, UK, UAE, India, Singapore, Germany and counting... iCliniq upholds the highest standards when approving physicians to practice in the online doctor consultation service. We are adding new doctors by the day. We stringently verify our online doctors to ensure they are fully licensed so that the care we provide will always be of the highest quality. <a href='https://www.icliniq.com/' '>icliniq.com </a> is brought to you by Orane Healthcare India Private Limited. Team-iCliniq consists of eminent doctors, researchers and programmers who work round the clock to innovate, create and implement the best web technologies for the use of doctors, users and hospitals. </p>
</div>
</div>
<div class="col-lg-6">
<div class="col-lg-12 p-0">
<div class="video-popup-wraper">
<div class="xs-info-img">
<img src="https://assets.icliniq.com/v2/assets/images/nasdaq-video-thumbnail.jpg" alt="icliniq on nasdaq milestone">
</div>
<div class="video-content text-center">
<a href="https://www.youtube.com/watch?v=ID_YyEa4xo0" class="xs-video-popup video-popup-btn pulse-effect">
<i class="fas fa-play"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-12 p-0 mt-3">
<p class="text-center" style="color:#333;font-weight: 700;">Dhruv Suyamprakasam speaks at the graduation ceremony of the Nasdaq milestone makers program, at the Nasdaq entrepreneurial Centre in San Francisco, California, USA.</p>
</div>
</div>
</div>
</div>
</section>
<section class="xs-section-padding">
<div class="row">
<div class="col-md-6 mx-auto">
<div class="xs-heading text-center">
<h3 class="section-title">What we do?</h3>
<span class="line"></span>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="platform-diagram diagram">
<div class="diagram-apps diagram-section js-diagram">
<a href="/ask-a-doctor-online" class="diagram-product diagram-product--radar">
<i class="fas fa-envelope"></i>
<span>Query</span>
</a>
<a href="/ask-a-doctor-online/icq100" class="diagram-product diagram-product--sigma">
<i class="fas fa-comments"></i>
<span>Chat</span>
</a>
<a href="/video-chat-with-doctor" class="diagram-product diagram-product--billing">
<i class="fas fa-video"></i>
<span>Video</span>
</a>
<a href="/phone-a-doctor" class="diagram-product diagram-product--atlas">
<i class="fas fa-phone-alt"></i>
<span>Phone</span>
</a>
</div>
<div class="diagram-platforms diagram-section js-diagram">
<a href="/tool" class="diagram-product diagram-product--payments">
<i class="fas fa-tools"></i>
<span>Health Tools</span>
</a>
<a href="/en/lab-tests-at-home" class="diagram-product diagram-product--connect">
<i class="fas fa-flask"></i>
<span>Book a Lab Test</span>
</a>
</div>
<div class="diagram-infra diagram-section js-diagram">
<a href="/articles" class="diagram-product diagram-product--articles">
<i class="far fa-newspaper"></i>
<span>Articles</span>
</a>
<a href="/qa" class="diagram-product diagram-product--checker">
<i class="fas fa-newspaper"></i>
<span>Q & A</span>
</a>
<a href="/symptom-checker" class="diagram-product diagram-product--answers">
<i class="fas fa-user-check"></i>
<span>Symptom Checker</span>
</a>
</div>
<div class="diagram-apps-content diagram-content js-diagram-explanation">
<p class="common-BodyText">
We provide various channels to contact our doctors such as posting as a health query or booking a slot for real time face-to-face consultation over HD video and phone (it will be a private/secure call back). One can use our service to consult with highly qualified physicians at the comfort of your home. </p>
</div>
<div class="diagram-platforms-content diagram-content js-diagram-explanation">
<p class="common-BodyText">
When a doctor provides a quick medical advice online, he/she will be helping a patient who may otherwise have had to visit the emergency room. Our goal is to provide the highest caliber of online healthcare and to offer a unique service where any patient can receive consultation with any doctors irrespective of their geographical location. Team-iCliniq is committed to provide the best services in online healthcare. </p>
</div>
<div class="diagram-infra-content diagram-content js-diagram-explanation">
<p class="common-BodyText">
'Prevention is better than cure' is an old adage. Every one at team-iCliniq strictly follows the thumb rule that under no circumstances the identity of iCliniq's users are revealed. Your requirement being whether to ask a doctor about a pressing health concern or consult a psychiatrist online (for an online psychotherapy & counseling help), our service offers the perfect solution.
</p>
</div>
</div>
</div>
</div>
</section>
<section class="xs-section-padding waypoint-tigger pb-0">
<div class="container">
<div class="row">
<div class="col-md-6 mx-auto">
<div class="xs-heading text-center">
<h3 class="section-title"><span> Why </span> iCliniq? </h3>
<span class="line"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-8 mx-auto">
<div class="row funfact-wraper no-gutters">
<div class="col-md-4">
<div class="single-funfact wow fadeIn text-center" data-wow-duration="1s">
<span class="number-percentage-count number-percentage" data-value="3500" data-animation-duration="10000">0</span><span>+</span>
<p>Doctors</p>
</div>
</div>
<div class="col-md-4">
<div class="single-funfact wow fadeIn text-center" data-wow-duration="1.2s">
<span class="number-percentage-count number-percentage" data-value="80" data-animation-duration="10000">0</span><span>+</span>
<p>Specialties</p>
</div>
</div>
<div class="col-md-4">
<div class="single-funfact wow fadeIn text-center" data-wow-duration="1.4s">
<span class="number-percentage-count number-percentage" data-value="190" data-animation-duration="10000">0</span><span>+</span>
<p>Countries</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="xs-section-padding spec-move">
<div class="row">
<div class="col-md-6 mx-auto">
<div class="xs-heading text-center">
<h3 class="section-title">Our Top Specialties</h3>
<span class="line"></span>
</div>
</div>
</div>
<div class="hurdles hurdles-normal js-hurdles">
<div class="hurdles-bubbles">
</div>
<div class="hurdles-mask"></div>
<div class="hurdles-stakeholder hurdles-stakeholder--merchant mask-out animating moved">
<div class="hurdles-stakeholder-glow"></div>
<div class="hurdles-stakeholder-arrows">
<div class="arrow">
<img src="https://assets.icliniq.com/v2/assets/images/right-arrow.png" alt="arrow">
</div>
<div class="arrow">
<img src="https://assets.icliniq.com/v2/assets/images/left-arrow.png" alt="arrow">
</div>
</div>
<img class="team-img" src="https://assets.icliniq.com/v2/assets/images/default-male.png" alt="users">
<span class="hurdles-stakeholder-label">Users</span>
</div>
<div class="hurdles-stakeholder hurdles-stakeholder--iCliniq p-2">
<img src="https://assets.icliniq.com/v2/assets/images/iCliniq-logo/ic-white-logo.svg" alt="iCliniq logo" title="iCliniq logo">
</div>
</div>
</section>
<section class="xs-section-padding gray-bg">
<div class="container">
<div class="row">
<div class="col-lg-6 align-self-center">
<div class="xs-info-wraper style2 wow fadeInUp">
<div class="xs-heading">
<h3 class="section-title">Our Vision</h3>
<span class="line"></span>
</div>
<p>iCliniq's vision is to gain recognition from its users as the world's largest medical second opinion platform and to keep working tirelessly to stay there. We want to ensure that all its users are rightly informed about their potential health issues and that the Doctor team at iCliniq helps the users with prevention. We want to make iCliniq the one-stop-shop for all health-related clarifications. We aim at connecting patients from all around the world with doctors whenever necessary with a click of the button.
</p>
</div>
</div>
<div class="col-lg-6 hidden-xs">
<div class="xs-info-img">
<img src="https://assets.icliniq.com/v2/assets/images/vision.png" alt="Vision" />
</div>
</div>
</div>
</div>
</section>
<section class="xs-section-padding primary-bg working-process-anim">
<div class="container text-center">
<div class="row">
<div class="col-lg-12 mx-auto" style="color: #fff;">
<div class="text-center">
<a href="https://thecenter.nasdaq.org/milestone-maker-2019/" rel="noreferrer"><img src="https://assets.icliniq.com/v2/assets/images/nasdaq-milestone.jpg" alt="Nasdaq" /></a>
</div>
<div class="text-center" style="padding-top:10px;">
It is an honor for our company, iCliniq to be on the Nasdaq tower in Times Square, New York, US on June 12, 2019. <a href="https://thecenter.nasdaq.org/milestone-maker-2019/" rel="noreferrer" style="color: #fff;text-decoration:underline;">read more..</a>
</div>
</div>
</div>
</div>
</section>
<section class="xs-section-padding pt-0">
<div class="container-fluid">
<div class="row">
<div class="col-md-6 p-0 hidden-xs" id="left_div">
<img src="https://assets.icliniq.com/v2/assets/images/mission-cover.jpg" alt="Mission">
</div>
<div class="col-md-6 col-xs-12 align-self-center flex-middle" id="right_div">
<div class="xs-heading">
<h3 class="section-title">Our Mission</h3>
<span class="line" style="margin-bottom: 23px;"></span>
<p clsss="xs-padding-50">iCliniq's mission is to create a platform that is easily accessible and trustworthy for both Doctors and Patients. We believing in constantly evolving and creating different services that will be a right fit for any user based on his requirements. We aim at making iCliniq the best at what it does in terms of both the quality of the service provided and the time of delivery of the service. We want to build a platform that is the right combination between viability, desirability and feasibility. </p>
</div>
</div>
</div>
</div>
</section>
<section class="xs-section-padding pt-0">
<div class="container">
<div class="row">
<div class="col-md-6 mx-auto">
<div class="xs-heading text-center">
<h3 class="section-title">Founding Team</h3>
<span class="line"></span>
</div>
</div>
</div>
<div class="row mb-4">
<div class="col-lg-4 col-md-4">
<div class="single-box text-center">
<div class="image">
<img src="https://assets.icliniq.com/v2/assets/images/team/madhan.jpg" alt="Dr. Madathupalayam Madhankumar">
<div class="hover-area">
<h4 class="title"><a href="/aboutus/founder-profile#madhan">Dr. Madathupalayam Madhankumar</a></h4>
<p class="description">Co-Founder and Director</p>
<span class="line"></span>
<a class="btn btn-view-founder" href="/aboutus/founder-profile#madhan">View profile</a>
</div>
</div>
<div class="box-footer">
<h4 class="title"><a href="/aboutus/founder-profile#madhan"> Dr. Madhankumar </a></h4>
<ul class="xs-list list-inline" style="padding-top: 15px;">
<li><a target="_blank" rel="noreferrer" href="https://www.linkedin.com/in/dr-madathupalayam-madhankumar-14bbb45/"><i class="fab fa-linkedin-in"></i></a></li>
<li><a target="_blank" rel="noreferrer" href="https://www.facebook.com/madhankumar.madathupalayam"><i class="fab fa-facebook-f"></i></a></li>
<li><a target="_blank" rel="noreferrer" href="https://www.icliniq.com/doctor/drmadhankumar-m-v"><i class="fas fa-globe"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="single-box text-center">
<div class="image">
<img src="https://assets.icliniq.com/v2/assets/images/team/dhruv.jpg" alt="Dhruv Suyamprakasam">
<div class="hover-area">
<h4 class="title"><a href="/aboutus/founder-profile#dhruv">Dhruv Suyamprakasam</a> </h4>
<p class="description">CEO, Founder and Director</p>
<span class="line"></span>
<a class="btn btn-view-founder" href="/aboutus/founder-profile#dhruv">View profile</a>
</div>
</div>
<div class="box-footer">
<h4 class="title"><a href="/aboutus/founder-profile#dhruv">Dhruv Suyamprakasam </a></h4>
<ul class="xs-list list-inline">
<li><a target="_blank" rel="noreferrer" href="https://www.linkedin.com/in/dhruv-suyamprakasam-49005b17/"><i class="fab fa-linkedin-in"></i></a></li>
<li><a target="_blank" rel="noreferrer" href="https://www.facebook.com/dhruvsuyamprakasam"><i class="fab fa-facebook-f"></i></a></li>
<li><a target="_blank" rel="noreferrer" href="https://twitter.com/dhruvsuyam"><i class="fab fa-twitter"></i></a></li>
<li><a target="_blank" rel="noreferrer" href="https://www.instagram.com/dhruvsuyamprakasam/"><i class="fab fa-instagram"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="single-box text-center">
<div class="image">
<img src="https://assets.icliniq.com/v2/assets/images/team/subha.jpg" alt="Dr.Subha Jagannathan">
<div class="hover-area">
<h4 class="title"><a href="/aboutus/founder-profile#suba">Dr.Subha Jagannathan</a></h4>
<p class="description">Co-Founder, Chief Medical Officer and Director</p>
<span class="line"></span>
<a class="btn btn-view-founder" href="/aboutus/founder-profile#suba">View profile</a>
</div>
</div>
<div class="box-footer">
<h4 class="title"><a href="/aboutus/founder-profile#suba">Dr. Subha Jagannathan</a></h4>
<ul class="xs-list list-inline">
<li><a target="_blank" rel="noreferrer" href="https://www.linkedin.com/in/subha-jagannathan-27b23a122/"><i class="fab fa-linkedin-in"></i></a></li>
<li><a target="_blank" rel="noreferrer" href="https://www.facebook.com/subha.jaganathan"><i class="fab fa-facebook-f"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="xs-section-padding">
<div class="container">
<div class="row">
<div class="col-lg-6 align-self-center">
<div class="xs-info-wraper style2 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
<div class="xs-heading">
<h3 class="section-title">Funding source</h3>
<span class="line"></span>
</div>
<p><a href="https://www.icliniq.com/">icliniq.com</a>
is the product of Orane Healthcare India Private Limited. Orane Healthcare India Private Limited is an independent organization and does not accept funds from any other external sources other than its founders. Orane Healthcare India Private Limited's operations are funded by the platform fee we receive from our users for using the services on our site. The company does not accept any kind of gifts from its employees. Any kind of funds that come in the company apart from our platform fees is brought in through by our founding team who are also our board of directors. They are Dr. Madathupalayam Madhankumar, Mr. Dhruv Suyamprakasam, and Dr.Subha Jagannathan. The promoters of Orane Healthcare India Private Limited viz Dr. Madathupalayam Madhankumar and Mr. Dhruv Suyamprakasam also have a US company called icliniq Inc.
</p>
</div>
</div>
<div class="col-lg-6 hidden-xs">
<div class="xs-info-img">
<img src="https://assets.icliniq.com/v2/assets/images/funding-source.jpg" alt="Vision" draggable="false">
</div>
</div>
</div>
</div>
</section>
<section class="inner-banner-area height-bg xs-section-padding">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="inner-banner-content">
<div class="col-lg-6">
<div class="col-md-12 p-0">
<div class="video-popup-wraper">
<div class="xs-info-img">
<img src="https://assets.icliniq.com/v2/assets/images/tmforum.jpg" alt="founder of iCliniq">
</div>
<div class="video-content text-center">
<a href="https://www.youtube.com/watch?v=g1Fj3kfWLaA" class="xs-video-popup video-popup-btn video-bottom-color pulse-effect">
<i class="fas fa-play"></i>
</a>
</div>
</div>
</div>
<div class="col-md-12 mt-3">
<p class="text-center" style="color: #fff;">Dhruv Suyamprakasam, Founder and CEO of iCliniq speaks at the launch of e-Health Catalyst in Nice, France.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="banner-image" style="background-image:url('https://assets.icliniq.com/v2/assets/images/team/Office.jpg')"></div>
</section>
<section class="ic-mention-block py-5">
<div class="container">
<div class="xs-heading text-center">
<h2 class="section-title">iCliniq Mentions</h2>
<span class="line"></span>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="postCarousel owl-carousel owl-theme">
<a rel="nofollow noopener noreferrer" target="_blank" href="https://www.insider.com/best-telemedicine-services#icliniq-2" title="icliniq ranked 5th by INSIDER" class="consult-spec-list">
<div class="image d-flex align-items-center  ic-mentions">
<img class="lazyload" data-src="https://assets.icliniq.com/v2/assets/images/insider-1.svg" alt="icliniq ranked 5th by INSIDER">
</div>
</a>
<a rel="nofollow noopener noreferrer" target="_blank" href="https://www.producthunt.com/tech/icliniq-on-telegram" title="icliniq on Product Hunt" class="consult-spec-list">
<div class="image d-flex ic-mentions">
<img class="lazyload" data-src="https://assets.icliniq.com/v2/assets/images/ic-mentions/producthunt.svg" alt="icliniq on Product Hunt">
</div>
</a>
<a rel="nofollow noopener noreferrer" target="_blank" href="https://www.vccircle.com/news/technology/2016/06/02/exclusive-erode-based-doctor-madhankumar-madathupalayam-invests-icliniq" title="icliniq got funding" class="consult-spec-list">
<div class="image d-flex ic-mentions">
<img class="lazyload" data-src="https://assets.icliniq.com/v2/assets/images/ic-mentions/VCC-logo.svg" alt="icliniq got funding">
</div>
</a>
<a rel="nofollow noopener noreferrer" target="_blank" href="https://www.icliniq.com/blog/innovator-online-doctor-click-away-the-week/" title="icliniq on TheWeek" class="consult-spec-list">
<div class="image d-flex align-items-center ic-mentions">
<img class="lazyload" data-src="https://assets.icliniq.com/v2/assets/images/ic-mentions/the-week.svg" alt="icliniq on TheWeek">
</div>
</a>
 <a rel="nofollow noopener noreferrer" target="_blank" href="https://techcrunch.com/2015/08/11/its-operating-systems-vs-messaging-apps-in-the-battle-for-techs-next-frontier/" title="icliniq on Techcrunch" class="consult-spec-list">
<div class="image d-flex ic-mentions">
<img class="lazyload" data-src="https://assets.icliniq.com/v2/assets/images/ic-mentions/techcrunch.svg" alt="icliniq on Techcrunch">
</div>
</a>
<a rel="nofollow noopener noreferrer" target="_blank" href="http://www.iamwire.com/2016/06/icliniq-startup-healthcare/138138" title="icliniq on I am Wire" class="consult-spec-list">
<div class="image d-flex align-items-center  ic-mentions">
<img class="lazyload" data-src="https://assets.icliniq.com/v2/assets/images/ic-mentions/iamwire.png.jpg" alt="icliniq on I am Wire">
</div>
</a>
<a rel="nofollow noopener noreferrer" target="_blank" href="https://www.entrepreneur.com/article/275761" title="icliniq on Enterpreneur" class="consult-spec-list">
<div class="image d-flex ic-mentions">
<img class="lazyload" data-src="https://assets.icliniq.com/v2/assets/images/ic-mentions/entrepreneur.svg" alt="icliniq on Enterpreneur">
</div>
</a>
<a rel="nofollow noopener noreferrer" target="_blank" href="https://economictimes.indiatimes.com/slideshows/people/6-indians-entreprenurs-who-is-making-big-in-bot-industry/dhruv-suyamprakasam/slideshow/52617824.cms" title="icliniq on The Economic Times" class="consult-spec-list">
<div class="image d-flex align-items-center ic-mentions">
<img class="lazyload" data-src="https://assets.icliniq.com/v2/assets/images/ic-mentions/economictimes.jpg" alt="icliniq on The Economic Times">
</div>
</a>
<a rel="nofollow noopener noreferrer" target="_blank" href="https://bwdisrupt.businessworld.in/article/iCliniq-A-Healthcare-Startup-That-Believes-The-Best-Outcomes-Happen-When-Doctors-Ask-the-Right-Questions-/14-06-2016-99139/" title="icliniq on Business World" class="consult-spec-list">
<div class="image d-flex align-items-center  ic-mentions">
<img class="lazyload" data-src="https://assets.icliniq.com/v2/assets/images/ic-mentions/full-Disrupt-logo.jpg" alt="icliniq on Business World">
</div>
</a>
<a rel="nofollow noopener noreferrer" target="_blank" href="https://www.business-standard.com/article/companies/icliniq-to-raise-funds-to-invest-in-technology-116051801145_1.html" title="icliniq on Business Standard" class="consult-spec-list">
<div class="image d-flex align-items-center ic-mentions">
<img class="lazyload" data-src="https://assets.icliniq.com/v2/assets/images/ic-mentions/business-standard-logo-mob.jpg" alt="icliniq on Business Standard">
</div>
</a>
<a rel="nofollow noopener noreferrer" target="_blank" href="https://venturebeat.com/2018/02/18/why-ai-has-yet-to-solidify-its-role-in-health-care/" title="icliniq on VentureBeat" class="consult-spec-list">
<div class="image d-flex ic-mentions">
<img class="lazyload" data-src="https://assets.icliniq.com/v2/assets/images/ic-mentions/venturebeat.svg" alt="icliniq on VentureBeat">
</div>
</a>
</div>
</div>
</div>
</div>
</section>
<script src="https://assets.icliniq.com/v2/assets/js/jquery.waypoints.min.js"></script>
<script src="https://assets.icliniq.com/v2/assets/js/jquery.easypiechart.min.js"></script>
<script src="https://assets.icliniq.com/v2/assets/js/owl.carousel.min.js"></script>
<script>
	$('document').ready(function() {
        $(".spec-move").children("svg:first").remove();
	});
    $('.postCarousel').owlCarousel({
		stagePadding: 5,
		loop:true,
		margin:10,
		nav:false,
		dots:false,
		responsive:{
			0:{
				items:1,
				nav:false
			},
			600:{
				items:3
			},
			1000:{
				items:6
			}
		}
	});
</script>
<script type="application/json" id="site-about-config">
    {"bubbleNodes":[{"title":"General Medicine","type":"blue"},{"title":"Obstetrics And Gynaecology","type":"blue"},{"title":"Dermatology","type":"blue"},{"title":"Internal Medicine","type":"blue"},{"title":"Dentistry","type":"blue"},{"title":"Sexology","type":"blue"},{"title":"Medical Gastroenterology","type":"blue"},{"title":"Psychiatry","type":"blue"},{"title":"Endocrinology","type":"blue"},{"title":"Ophthalmology (Eye Care)","type":"blue"},{"title":"Urology","type":"blue"},{"title":"Cardiology","type":"blue"},{"title":"HIV\/AIDS Specialist","type":"blue"},{"title":"Nephrology","type":"blue"},{"title":"Otolaryngology (E.N.T)","type":"blue"},{"title":"Orthopedics And Traumatology","type":"blue"},{"title":"General Practitioner","type":"blue"},{"title":"Family Physician","type":"blue"},{"title":"Infertility","type":"blue"},{"title":"Ayurveda Specialist","type":"blue"},{"title":"Paediatrics","type":"blue"},{"title":"Diabetology","type":"blue"},{"title":"Neurology","type":"blue"},{"title":"Allergy Specialist","type":"blue"},{"title":"Andrology","type":"green"},{"title":"Anesthesiology","type":"green"},{"title":"Audiology","type":"green"},{"title":"Bariatric Surgery","type":"green"},{"title":"Cardiothoracic Surgery","type":"green"},{"title":"Child Health","type":"green"},{"title":"Childbirth Educator","type":"green"},{"title":"Chiropractor","type":"green"},{"title":"Clinical Genetics","type":"green"},{"title":"Community Medicine","type":"green"},{"title":"Cosmetology","type":"green"},{"title":"Critical Care Physician","type":"green"},{"title":"Dietician","type":"green"},{"title":"Endodontist","type":"green"},{"title":"Fetal Medicine","type":"green"},{"title":"Fitness Expert","type":"green"},{"title":"Forensic Medicine","type":"green"},{"title":"General Surgery","type":"green"},{"title":"Geriatrics","type":"green"},{"title":"Hair Transplant Surgeon","type":"green"},{"title":"Hematology","type":"green"},{"title":"Homeopathy","type":"green"},{"title":"Integrative Medicine","type":"green"},{"title":"Interventional Radiology","type":"green"},{"title":"Lactation Counselor","type":"yellow"},{"title":"Maxillofacial Prosthodontist","type":"yellow"},{"title":"Medical Oncology","type":"yellow"},{"title":"Metabolic Surgery","type":"yellow"},{"title":"Microbiology","type":"yellow"},{"title":"Naturopathy","type":"yellow"},{"title":"Neuro Surgery","type":"yellow"},{"title":"Nuclear Medicine","type":"yellow"},{"title":"Nutritionist","type":"yellow"},{"title":"Occupational Therapy","type":"yellow"},{"title":"Oral And Maxillofacial Surgery","type":"yellow"},{"title":"Oral Implantologist","type":"yellow"},{"title":"Orthodontist","type":"yellow"},{"title":"Osteopathy Specialist","type":"yellow"},{"title":"Paediatric Dentistry","type":"yellow"},{"title":"Paediatric Surgery","type":"yellow"},{"title":"Pain Medicine","type":"yellow"},{"title":"Pathology","type":"yellow"},{"title":"Pediatric Allergy\/Asthma Specialist","type":"yellow"},{"title":"Periodontist","type":"yellow"},{"title":"Pharmacology","type":"yellow"},{"title":"Physiotherapy","type":"yellow"},{"title":"Plastic Surgery \u2013 Reconstructive And Cosmetic","type":"yellow"},{"title":"Preventive Medicine","type":"yellow"},{"title":"Psychologist\/ Counsellor","type":"pink"},{"title":"Psychotherapy","type":"pink"},{"title":"Pulmonology (Asthma Doctors)","type":"pink"},{"title":"Radiation Oncology","type":"pink"},{"title":"Radiodiagnosis","type":"pink"},{"title":"Radiology","type":"pink"},{"title":"Radiotherapy","type":"pink"},{"title":"Rheumatology","type":"pink"},{"title":"Siddha Medicine","type":"pink"},{"title":"Sleep Medicine","type":"pink"},{"title":"Sonologist","type":"pink"},{"title":"Speech Therapist","type":"pink"},{"title":"Spine Health","type":"pink"},{"title":"Spine Surgery","type":"pink"},{"title":"Stem Cell Therapy","type":"pink"},{"title":"Surgical Gastroenterology","type":"pink"},{"title":"Surgical Oncology","type":"pink"},{"title":"Toxicology","type":"pink"},{"title":"Unani Medicine","type":"pink"},{"title":"Vascular Surgery","type":"pink"},{"title":"Venereology","type":"pink"},{"title":"Wellness Medicine","type":"pink"},{"title":"Yoga","type":"pink"}]}
</script>
<script>
	/*! lazysizes - v5.3.0 */

!function(e){var t=function(u,D,f){"use strict";var k,H;if(function(){var e;var t={lazyClass:"lazyload",loadedClass:"lazyloaded",loadingClass:"lazyloading",preloadClass:"lazypreload",errorClass:"lazyerror",autosizesClass:"lazyautosizes",fastLoadedClass:"ls-is-cached",iframeLoadMode:0,srcAttr:"data-src",srcsetAttr:"data-srcset",sizesAttr:"data-sizes",minSize:40,customMedia:{},init:true,expFactor:1.5,hFac:.8,loadMode:2,loadHidden:true,ricTimeout:0,throttleDelay:125};H=u.lazySizesConfig||u.lazysizesConfig||{};for(e in t){if(!(e in H)){H[e]=t[e]}}}(),!D||!D.getElementsByClassName){return{init:function(){},cfg:H,noSupport:true}}var O=D.documentElement,i=u.HTMLPictureElement,P="addEventListener",$="getAttribute",q=u[P].bind(u),I=u.setTimeout,U=u.requestAnimationFrame||I,o=u.requestIdleCallback,j=/^picture$/i,r=["load","error","lazyincluded","_lazyloaded"],a={},G=Array.prototype.forEach,J=function(e,t){if(!a[t]){a[t]=new RegExp("(\\s|^)"+t+"(\\s|$)")}return a[t].test(e[$]("class")||"")&&a[t]},K=function(e,t){if(!J(e,t)){e.setAttribute("class",(e[$]("class")||"").trim()+" "+t)}},Q=function(e,t){var a;if(a=J(e,t)){e.setAttribute("class",(e[$]("class")||"").replace(a," "))}},V=function(t,a,e){var i=e?P:"removeEventListener";if(e){V(t,a)}r.forEach(function(e){t[i](e,a)})},X=function(e,t,a,i,r){var n=D.createEvent("Event");if(!a){a={}}a.instance=k;n.initEvent(t,!i,!r);n.detail=a;e.dispatchEvent(n);return n},Y=function(e,t){var a;if(!i&&(a=u.picturefill||H.pf)){if(t&&t.src&&!e[$]("srcset")){e.setAttribute("srcset",t.src)}a({reevaluate:true,elements:[e]})}else if(t&&t.src){e.src=t.src}},Z=function(e,t){return(getComputedStyle(e,null)||{})[t]},s=function(e,t,a){a=a||e.offsetWidth;while(a<H.minSize&&t&&!e._lazysizesWidth){a=t.offsetWidth;t=t.parentNode}return a},ee=function(){var a,i;var t=[];var r=[];var n=t;var s=function(){var e=n;n=t.length?r:t;a=true;i=false;while(e.length){e.shift()()}a=false};var e=function(e,t){if(a&&!t){e.apply(this,arguments)}else{n.push(e);if(!i){i=true;(D.hidden?I:U)(s)}}};e._lsFlush=s;return e}(),te=function(a,e){return e?function(){ee(a)}:function(){var e=this;var t=arguments;ee(function(){a.apply(e,t)})}},ae=function(e){var a;var i=0;var r=H.throttleDelay;var n=H.ricTimeout;var t=function(){a=false;i=f.now();e()};var s=o&&n>49?function(){o(t,{timeout:n});if(n!==H.ricTimeout){n=H.ricTimeout}}:te(function(){I(t)},true);return function(e){var t;if(e=e===true){n=33}if(a){return}a=true;t=r-(f.now()-i);if(t<0){t=0}if(e||t<9){s()}else{I(s,t)}}},ie=function(e){var t,a;var i=99;var r=function(){t=null;e()};var n=function(){var e=f.now()-a;if(e<i){I(n,i-e)}else{(o||r)(r)}};return function(){a=f.now();if(!t){t=I(n,i)}}},e=function(){var v,m,c,h,e;var y,z,g,p,C,b,A;var n=/^img$/i;var d=/^iframe$/i;var E="onscroll"in u&&!/(gle|ing)bot/.test(navigator.userAgent);var _=0;var w=0;var M=0;var N=-1;var L=function(e){M--;if(!e||M<0||!e.target){M=0}};var x=function(e){if(A==null){A=Z(D.body,"visibility")=="hidden"}return A||!(Z(e.parentNode,"visibility")=="hidden"&&Z(e,"visibility")=="hidden")};var W=function(e,t){var a;var i=e;var r=x(e);g-=t;b+=t;p-=t;C+=t;while(r&&(i=i.offsetParent)&&i!=D.body&&i!=O){r=(Z(i,"opacity")||1)>0;if(r&&Z(i,"overflow")!="visible"){a=i.getBoundingClientRect();r=C>a.left&&p<a.right&&b>a.top-1&&g<a.bottom+1}}return r};var t=function(){var e,t,a,i,r,n,s,o,l,u,f,c;var d=k.elements;if((h=H.loadMode)&&M<8&&(e=d.length)){t=0;N++;for(;t<e;t++){if(!d[t]||d[t]._lazyRace){continue}if(!E||k.prematureUnveil&&k.prematureUnveil(d[t])){R(d[t]);continue}if(!(o=d[t][$]("data-expand"))||!(n=o*1)){n=w}if(!u){u=!H.expand||H.expand<1?O.clientHeight>500&&O.clientWidth>500?500:370:H.expand;k._defEx=u;f=u*H.expFactor;c=H.hFac;A=null;if(w<f&&M<1&&N>2&&h>2&&!D.hidden){w=f;N=0}else if(h>1&&N>1&&M<6){w=u}else{w=_}}if(l!==n){y=innerWidth+n*c;z=innerHeight+n;s=n*-1;l=n}a=d[t].getBoundingClientRect();if((b=a.bottom)>=s&&(g=a.top)<=z&&(C=a.right)>=s*c&&(p=a.left)<=y&&(b||C||p||g)&&(H.loadHidden||x(d[t]))&&(m&&M<3&&!o&&(h<3||N<4)||W(d[t],n))){R(d[t]);r=true;if(M>9){break}}else if(!r&&m&&!i&&M<4&&N<4&&h>2&&(v[0]||H.preloadAfterLoad)&&(v[0]||!o&&(b||C||p||g||d[t][$](H.sizesAttr)!="auto"))){i=v[0]||d[t]}}if(i&&!r){R(i)}}};var a=ae(t);var S=function(e){var t=e.target;if(t._lazyCache){delete t._lazyCache;return}L(e);K(t,H.loadedClass);Q(t,H.loadingClass);V(t,B);X(t,"lazyloaded")};var i=te(S);var B=function(e){i({target:e.target})};var T=function(e,t){var a=e.getAttribute("data-load-mode")||H.iframeLoadMode;if(a==0){e.contentWindow.location.replace(t)}else if(a==1){e.src=t}};var F=function(e){var t;var a=e[$](H.srcsetAttr);if(t=H.customMedia[e[$]("data-media")||e[$]("media")]){e.setAttribute("media",t)}if(a){e.setAttribute("srcset",a)}};var s=te(function(t,e,a,i,r){var n,s,o,l,u,f;if(!(u=X(t,"lazybeforeunveil",e)).defaultPrevented){if(i){if(a){K(t,H.autosizesClass)}else{t.setAttribute("sizes",i)}}s=t[$](H.srcsetAttr);n=t[$](H.srcAttr);if(r){o=t.parentNode;l=o&&j.test(o.nodeName||"")}f=e.firesLoad||"src"in t&&(s||n||l);u={target:t};K(t,H.loadingClass);if(f){clearTimeout(c);c=I(L,2500);V(t,B,true)}if(l){G.call(o.getElementsByTagName("source"),F)}if(s){t.setAttribute("srcset",s)}else if(n&&!l){if(d.test(t.nodeName)){T(t,n)}else{t.src=n}}if(r&&(s||l)){Y(t,{src:n})}}if(t._lazyRace){delete t._lazyRace}Q(t,H.lazyClass);ee(function(){var e=t.complete&&t.naturalWidth>1;if(!f||e){if(e){K(t,H.fastLoadedClass)}S(u);t._lazyCache=true;I(function(){if("_lazyCache"in t){delete t._lazyCache}},9)}if(t.loading=="lazy"){M--}},true)});var R=function(e){if(e._lazyRace){return}var t;var a=n.test(e.nodeName);var i=a&&(e[$](H.sizesAttr)||e[$]("sizes"));var r=i=="auto";if((r||!m)&&a&&(e[$]("src")||e.srcset)&&!e.complete&&!J(e,H.errorClass)&&J(e,H.lazyClass)){return}t=X(e,"lazyunveilread").detail;if(r){re.updateElem(e,true,e.offsetWidth)}e._lazyRace=true;M++;s(e,t,r,i,a)};var r=ie(function(){H.loadMode=3;a()});var o=function(){if(H.loadMode==3){H.loadMode=2}r()};var l=function(){if(m){return}if(f.now()-e<999){I(l,999);return}m=true;H.loadMode=3;a();q("scroll",o,true)};return{_:function(){e=f.now();k.elements=D.getElementsByClassName(H.lazyClass);v=D.getElementsByClassName(H.lazyClass+" "+H.preloadClass);q("scroll",a,true);q("resize",a,true);q("pageshow",function(e){if(e.persisted){var t=D.querySelectorAll("."+H.loadingClass);if(t.length&&t.forEach){U(function(){t.forEach(function(e){if(e.complete){R(e)}})})}}});if(u.MutationObserver){new MutationObserver(a).observe(O,{childList:true,subtree:true,attributes:true})}else{O[P]("DOMNodeInserted",a,true);O[P]("DOMAttrModified",a,true);setInterval(a,999)}q("hashchange",a,true);["focus","mouseover","click","load","transitionend","animationend"].forEach(function(e){D[P](e,a,true)});if(/d$|^c/.test(D.readyState)){l()}else{q("load",l);D[P]("DOMContentLoaded",a);I(l,2e4)}if(k.elements.length){t();ee._lsFlush()}else{a()}},checkElems:a,unveil:R,_aLSL:o}}(),re=function(){var a;var n=te(function(e,t,a,i){var r,n,s;e._lazysizesWidth=i;i+="px";e.setAttribute("sizes",i);if(j.test(t.nodeName||"")){r=t.getElementsByTagName("source");for(n=0,s=r.length;n<s;n++){r[n].setAttribute("sizes",i)}}if(!a.detail.dataAttr){Y(e,a.detail)}});var i=function(e,t,a){var i;var r=e.parentNode;if(r){a=s(e,r,a);i=X(e,"lazybeforesizes",{width:a,dataAttr:!!t});if(!i.defaultPrevented){a=i.detail.width;if(a&&a!==e._lazysizesWidth){n(e,r,i,a)}}}};var e=function(){var e;var t=a.length;if(t){e=0;for(;e<t;e++){i(a[e])}}};var t=ie(e);return{_:function(){a=D.getElementsByClassName(H.autosizesClass);q("resize",t)},checkElems:t,updateElem:i}}(),t=function(){if(!t.i&&D.getElementsByClassName){t.i=true;re._();e._()}};return I(function(){H.init&&t()}),k={cfg:H,autoSizer:re,loader:e,init:t,uP:Y,aC:K,rC:Q,hC:J,fire:X,gW:s,rAF:ee}}(e,e.document,Date);e.lazySizes=t,"object"==typeof module&&module.exports&&(module.exports=t)}("undefined"!=typeof window?window:{});
</script>
<style>
.home-container{position:relative}#sfooter{color:#fff;background:#2a53e6;position:fixed;bottom:0;left:0;right:0;font-size:13px;display:flex;flex-direction:column;align-items:flex-start;width:100%;padding:10px 0;z-index:99}#sfooter a{font-size:13px !important;border-radius:5px;color:#fff}#sfooter a:hover{color:#fff}.sfooter-btn{margin:8px 0 !important}.app-store{background:#00173d;border-width:1px;border-style:solid;border-color:#164979;border-image:initial}.social-list li a.youtube-hover:hover{background-color:#b00;border-color:#b00}.social-list li a.youtube-hover{color:#b00}.social-list li a:hover{color:#fff}.copyright-text p,.copyright-text a:hover{color:#fff}.footer-top-area{padding:31px 0}.footer-main{padding:30px 0}.footer-widget .font-09rem{font-size:.9rem;color:#ccc}.footer-widget .font-09rem:hover{color:#fff}.footer-widget.app-store img{margin:5px}.footer-widget .xs-lsit li:not(:last-child){margin-bottom:10px}.app-store{padding:10px 10px 35px}.sidebar-block .nav-item{width:calc(calc(100%/2) - 24px);display:inline-block}.sidebar-block .nav-item .sidebar-consultation{display:block;min-height:130px;text-align:center;color:#7a7a7a;-webkit-transition:all .4s ease;-o-transition:all .4s ease;transition:all .4s ease;border-radius:2px;border:1px solid #e5e8ed;padding:25px 10px 15px;position:relative;background-color:#fff}.sidebar-block{margin-bottom:28px}.sidebar-block .nav-item:not(:last-child){margin-right:10px;margin-bottom:10px}.sidebar-block .nav-item .sidebar-consultation span{display:block;min-height:46px;margin-bottom:5px}.sidebar-block .nav-item .sidebar-consultation span img{width:45px}.xs-sidebar-widget{max-width:450px}.btn-consult-footer{background-color:#f26522 !important;height:auto;line-height:21px;padding:0 15px;align-self:center}.tweet-hover{color:#2aa3ef}.footer-widget .xs-lsit li a.tweets-class:hover i{color:#fff;-webkit-transition:all .4s ease;-o-transition:all .4s ease;transition:all .4s ease}@media(max-width:992px){.footer-widget{margin-bottom:20px}}
.footer-widget .xs-lsit li a>sub{
	bottom: 6px;
    color: #fff;
    font-weight: 700;
    left: 2px;
    background: linear-gradient(148deg, #ff105e 30%, #f122dd, #f91593 , #cd0048, #ea412c 74%);
    padding: 2px;
    border-radius: 5px;
}
.footer-healthline-white{
	width: 157px!important;
    height: 25px;
}
.footer-logo .logo-transparent{
	background-color: #fff;
	padding: 5px;
	border-radius: 5px;
	max-height: 55px!important;
}
</style>

<script>
        /**
    * Cookie Notice JS
    * @author Alessandro Benoit
    */
    ;
    (function () {

        "use strict";

        /**
        * Store current instance
        */
        var instance;

        /**
        * Defaults values
        * @type object
        */
        var defaults = {
            'messageLocales': {
                'en': 'This website uses cookies to ensure you get the best experience on our website. <a href="https://www.icliniq.com/p/privacy">iCliniq privacy policy</a>'
            },
            'buttonLocales': {
                'en': 'Ok'
            },
            'expiresIn': 30,
            'buttonBgColor': '#d35400',
            'buttonTextColor': '#fff',
            'noticeBgColor': '#000',
            'noticeTextColor': '#fff'
        };

        /**
        * Initialize cookie notice on DOMContentLoaded
        * if not already initialized with alt params
        */
        document.addEventListener('DOMContentLoaded', function () {
            if (!instance) {
                new cookieNoticeJS();
            }
        });

        /**
        * Constructor
        * @constructor
        */
        window.cookieNoticeJS = function () {

            // If an instance is already set stop here
            if (instance !== undefined) {
                return;
            }

            // Set current instance
            instance = this;

            // If cookies are not supported or notice cookie is already set
            if (!testCookie() || getNoticeCookie()) {
                return;
            }

            // Extend default params
            var params = extendDefaults(defaults, arguments[0] || {});

            // Get current locale for notice text
            var noticeText = getStringForCurrentLocale(params.messageLocales);

            // Create notice
            var notice = createNotice(noticeText, params.noticeBgColor, params.noticeTextColor);

            // Get current locale for button text
            var buttonText = getStringForCurrentLocale(params.buttonLocales);

            // Create dismiss button
            var dismissButton = createDismissButton(buttonText, params.buttonBgColor, params.buttonTextColor);

            // Dismiss button click event
            dismissButton.addEventListener('click', function (e) {
                e.preventDefault();
                setDismissNoticeCookie(parseInt(params.expiresIn + "", 10) * 60 * 1000 * 60 * 24);
                fadeElementOut(notice);
            });

            // Append notice to the DOM
            document.body.appendChild(notice).appendChild(dismissButton);

        };

        /**
        * Get the string for the current locale
        * and fallback to "en" if none provided
        * @param locales
        * @returns {*}
        */
        function getStringForCurrentLocale(locales) {
            var locale = (navigator.userLanguage || navigator.language).substr(0, 2);
            return (locales[locale]) ? locales[locale] : locales['en'];
        }

        /**
        * Test if cookies are enabled
        * @returns {boolean}
        */
        function testCookie() {
            document.cookie = 'testCookie=1';
            return document.cookie.indexOf('testCookie') != -1;
        }

        /**
        * Test if notice cookie is there
        * @returns {boolean}
        */
        function getNoticeCookie() {
            return document.cookie.indexOf('cookie_notice') != -1;
        }

        /**
        * Create notice
        * @param message
        * @param bgColor
        * @param textColor
        * @returns {HTMLElement}
        */
        function createNotice(message, bgColor, textColor) {

            var notice = document.createElement('div'),
                noticeStyle = notice.style;

            notice.innerHTML = message;
            notice.setAttribute('id', 'cookieNotice');

            noticeStyle.position = 'fixed';
            noticeStyle.bottom = 0;
            noticeStyle.left = 0;
            noticeStyle.right = 0;
            noticeStyle.background = bgColor;
            noticeStyle.color = textColor;
            noticeStyle["z-index"] = '999';
            noticeStyle.padding = '10px 5px';
            noticeStyle["text-align"] = 'center';
            noticeStyle["font-size"] = "12px";
            noticeStyle["line-height"] = "28px";
            noticeStyle.fontFamily = 'Helvetica neue, Helvetica, sans-serif';

            return notice;
        }

        /**
        * Create dismiss button
        * @param message
        * @param buttonColor
        * @param buttonTextColor
        * @returns {HTMLElement}
        */
        function createDismissButton(message, buttonColor, buttonTextColor) {

            var dismissButton = document.createElement('a'),
                dismissButtonStyle = dismissButton.style;

            // Dismiss button
            dismissButton.href = '#';
            dismissButton.innerHTML = message;

            // Dismiss button style
            dismissButtonStyle.background = buttonColor;
            dismissButtonStyle.color = buttonTextColor;
            dismissButtonStyle['text-decoration'] = 'none';
            dismissButtonStyle.display = 'inline-block';
            dismissButtonStyle.padding = '0 15px';
            dismissButtonStyle.margin = '0 0 0 10px';

            return dismissButton;

        }

        /**
        * Set sismiss notice cookie
        * @param expireIn
        */
        function setDismissNoticeCookie(expireIn) {
            var now = new Date(),
                cookieExpire = new Date();

            cookieExpire.setTime(now.getTime() + expireIn);
            document.cookie = "cookie_notice=1; expires=" + cookieExpire.toUTCString() + "; path=/;";
        }

        /**
        * Fade a given element out
        * @param element
        */
        function fadeElementOut(element) {
            element.style.opacity = 1;
            (function fade() {
                (element.style.opacity -= .1) < 0.01 ? document.body.removeChild(element) : setTimeout(fade, 40)
            })();
        }

        /**
        * Utility method to extend defaults with user options
        * @param source
        * @param properties
        * @returns {*}
        */
        function extendDefaults(source, properties) {
            var property;
            for (property in properties) {
                if (properties.hasOwnProperty(property)) {
                    if (typeof source[property] === 'object') {
                        source[property] = extendDefaults(source[property], properties[property]);
                    } else {
                        source[property] = properties[property];
                    }
                }
            }
            return source;
        }

        /* test-code */
        cookieNoticeJS.extendDefaults = extendDefaults;
        cookieNoticeJS.clearInstance = function () {
            instance = undefined;
        };
        /* end-test-code */

    }());
    </script>
<footer class="xs-footer-section">
<div class="container">
<div class="footer-top-area">
<div class="row">
<div class="col-md-4">
<div class="footer-logo">
<a href="/en/">
<img src="https://assets.icliniq.com/v2/assets/images/iCliniq-logo/ic-white-logo.svg" alt="logo" title="logo" class="logo-transparent" draggable="false">
</a>
</div>
</div>
<div class="col-md-8">
<ul class="address-info-list list-inline">
<li>
<a href="https://icliniqsupport.freshdesk.com/support/tickets/new">
<div class="media">
<img class="mr-3" src="https://assets.icliniq.com/v2/assets/images/pin.png" alt="Support">
<div class="media-body align-self-center">
<p>24/7 Support</p>
</div>
</div>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="footer-main">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-3 col-6 col-lg-3">
<div class="footer-widget">
<ul class="xs-lsit">
<li><a href="/ask-a-doctor-online">Ask a Doctor Online</a></li>
<li><a href="/ask-a-doctor-online/icq100">Chat with a Doctor</a></li>
<li><a href="/phone-a-doctor">Phone a Doctor</a></li>
<li><a href="/video-chat-with-doctor">Video Consultation</a></li>
<li><a href="/sitemap.htm">Site Map</a></li>
<li>
<a href="/search/online-doctors-directory">Choose a Doctor</a>
</li>
<li><a href="/en/lab-tests-at-home">Book a Lab Test</a></li>
<li><a href="/mri-ct-scan-tests">MRI/CT Scan</a></li>
<li><a href="/articles">Articles</a></li>
<li><a href="/qa">Medical Q&A</a></li>
<li><a class="tweets-class" href="/p/testimonial-tweets"><i class="fab fa-twitter tweet-hover"></i> Testimonial Tweets</a></li>
</ul>
</div>
</div>
<div class="col-md-3 col-sm-3 col-6 col-lg-3">
<div class="footer-widget">
<ul class="xs-lsit">
<li><a href="/tool">Tools</a></li>
<li><a href="/faq/index" target="_blank">FAQ</a></li>
<li><a href="blog">Blogs</a></li>
<li><a href="/p/careers">Careers</a></li>
<li><a href="about-us">About Us</a></li>
<li><a href="/p/terms">Terms</a></li>
<li><a href="/p/privacy">Privacy</a> </li>
<li><a href="/p/advertisement-policy">Ads Policy</a></li>
<li><a href="/press">Press</a></li>
</ul>
</div>
</div>
<div class="col-md-3 col-sm-3 col-6 col-lg-3">
<div class="footer-widget">
<ul class="xs-lsit">
<li><a href="/app">Get iCliniq App</a></li>
<li><a href="/get-api">Get API</a></li>
<li><a href="/embeddable-widget-for-affiliates">Get Widget</a></li>
<li><a href="/medical-team" title="iCliniq content moderation team">Medical Review Team</a></li>
<li><a href="/symptom-checker?utm_source=icliniq+header&utm_medium=banner&utm_campaign=sym201221" title="Diagnose your symptoms using iCliniq Symptom Checker">Symptom Checker</a></li>
<li><a href="/deals-offers" title="Deals & Offers">Deals & Offers</a></li>
<li><a href="https://icliniqsupport.freshdesk.com/support/tickets/new">Support</a></li>
<li><a rel="noreferrer" href="https://help.icliniq.com" target="_blank">Help</a></li>
</ul>
</div>
</div>
<div class="col-md-3 col-sm-3 col-6 col-lg-3">
<div class="footer-widget">
<ul class="xs-lsit">
<li><a href="https://www.icliniq.com/employer">For Employers</a></li>
<li><a href="/telegram/index">For Telegram</a></li>
<li><a href="/apps/slack">For Slack Teams</a></li>
<li><a href="/apps/msteam">For MS Team</a></li>
<li><a href="/ask-a-doctor-online/icq100/stories/">Success Stories</a></li>
<li><a href="/ask-a-doctor-online/icq100">#icliniq100hrs</a></li>
<li><a href="/discuss-case">Medical Cases</a></li>
<li><a href="/contact/contact-icliniq">Contact</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="footer-main pt-1">
<div class="container">
 <div class="row">
<div class="col-md-6 pb-3">
<div class="footer-widget">
<h4 class="xs-content-title mb-3" style="text-transform: uppercase;">specialties we cover</h4>
<a class="font-09rem" href="/qa/specialities/obstetrician-and-gynaecologist">Obstetrics and Gynecology</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/dermatologist">Dermatology</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/internal-medicine-physician">Internal Medicine</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/sexologist">Sexology</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/psychiatrist">Psychiatry</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/general-medicine-physician">General Medicine</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/ENT-Otolaryngologist">Otolaryngology (E.N.T)</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/medical-gastroenterologist">Medical Gastroenterology</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/eye-care-ophthalmologist">Ophthalmology (Eye Care)</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/dentist">Dentistry</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/cardiologist">Cardiology</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/paediatrician">Pediatrics</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/urologist">Urology</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/orthopaedician-and-traumatologist">Orthopedics And Traumatology</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/family-physician">Family Physician</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/pulmonologist">Pulmonologists</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/HIV-AIDS-specialist">HIV/AIDS Specialist</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/endocrinologist">Endocrinology</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/general-practitioner">General Practitioner</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/nephrologist">Nephrology</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/infectious-diseases-specialist">Infectious Diseases</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/diabetologist">Diabetology</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/neurologist">Neurology</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/allergy-specialist">Allergy Specialist</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/rheumatologist">Rheumatology</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities/cosmetologist">Cosmetology</a>&nbsp;&nbsp;&nbsp;
<a class="font-09rem" href="/qa/specialities"><b>More...</b></a>
</div>
</div>
<div class="col-md-6">
<div class="footer-widget app-store">
<div class="col-md-12 text-center">
<p style="margin-top: 20px;margin-bottom: 15px;font-size: 18px;color: #ff6633;font-weight: 700;text-transform: uppercase;">Get iCliniq App</p>
<span style="padding-right: 5px"><a href="https://play.google.com/store/apps/details?id=com.orane.icliniq">
<img height="45" src="https://assets.icliniq.com/v2/assets/images/google-play-store.svg" alt="google play" title="google play">
</a></span>
<span><a href="https://itunes.apple.com/in/app/icliniq-ask-a-doctor/id1247883470?mt=8">
<img height="45" src="https://assets.icliniq.com/v2/assets/images/app-store.svg" alt="apple store" title="apple store">
</a></span>
</div>
</div>
</div>
<div class="col-md-6">
<div class="footer-widget">
<p style="color:#ccc;"><small><b>Disclaimer:</b> All published on this website are not intended to be a substitute for professional medical diagnosis, advice or treatment by a trained physician. Seek the advice from your physician or other qualified health-care providers with questions you may have regarding your symptoms and medical condition for a complete medical diagnosis. Do not delay or disregard seeking professional medical advice because of something you have read on this website. </small></p>
</div>
</div>
</div>
</div>
</div>
<div class="partner-area-wraper">
<div class="container">
<div class="partner-area">
<div class="row">
<div class="col-md-8">
<ul class="xs-lsit list-inline pt-0">
<li><a href="//www.dmca.com/Protection/Status.aspx?ID=1a454a14-0c96-4301-85e3-4d008299e65e" title="DMCA.com Protection Status" class="dmca-badge"> <img src="https://images.dmca.com/Badges/DMCA_logo-grn-btn120w.png?ID=1a454a14-0c96-4301-85e3-4d008299e65e" alt="DMCA.com Protection Status" style="margin:10px 0;" /></a>

<script>
								  (function () {
									   document.addEventListener("DOMContentLoaded", function () {
									       var e = "dmca-badge";
									       var t = "refurl";
									       var n = document.querySelectorAll('a.'+e);
									       if (n[0].getAttribute("href").indexOf("refurl") < 0) {
									           for (var r = 0; r < n.length; r++) {
									               var i = n[r];
									               i.href = i.href + (i.href.indexOf("?") === -1 ? "?" : "&") + t + "=" + document.location
									           }
									       }
									   }, false)
									}
									)()
								</script>
</li>
<li><a href="#?" onclick="popUrl('https://seal.godaddy.com/verifySeal?sealID=c68QDgRKyjCOKwvDCjhsC68v3tZpTS3TdSn7s5WxVnmwmSKuMEamN5nzB');"><img class="img-responsive img-thumbnail" alt="godaddy ssl seal" title="godaddy ssl seal" style="margin: 10px 0;" src="https://assets.icliniq.com/images/boot/godaddy_seal.gif" /></a></li>
<li>
<img class="footer-healthline-white" src="https://assets.icliniq.com/v2/img/Parade-white.svg" title="Parade-white.svg" alt="Parade-white.svg">
</li>
<li>
<img height="30" src="https://assets.icliniq.com/v2/assets/images/insider-1.svg" title="INSIDER" alt="icliniq is mentioned in INSIDER">
</li>
</ul>
</div>
<div class="col-md-4">
</div>
</div>
</div>
</div>
</div>
<div class="copyright">
<div class="container">
<div class="row">
<div class="col-md-6">
<div class="copyright-text">
<p class="copy">
Copyright © 2023, iCliniq - All Rights Reserved
<br /><small>
Visit other versions in <a href="https://www.icliniq.com/en_US/" title="iCliniq America">US</a>, <a href="https://www.icliniq.com/en_GB/" title="iCliniq UK">UK</a>, <a href="https://www.icliniq.com/en_AU/" title="iCliniq Australia">Australia</a>, <a href="https://www.icliniq.com/en_IN/" title="iCliniq India">India</a>, <a href="https://www.icliniq.com/en_PH/" title="iCliniq Philippines">Philippines</a> and <a href="https://www.icliniq.com/" title="iCliniq Home">Home</a>
</small>
<br /><br />
</p>
</div>
</div>
<div class="col-md-6">
<ul class="social-list">
<li><a href="https://www.facebook.com/icliniq" rel="nofollow noopener noreferrer" target="_blank" title="follow iCliniq on Facebook" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="https://twitter.com/icliniq" rel="nofollow noopener noreferrer" target="_blank" title="follow iCliniq on Twitter" class="twitter"><i class="fab fa-twitter"></i></a></li>
<li><a href="https://www.linkedin.com/company/icliniq/" rel="nofollow noopener noreferrer" target="_blank" title="follow iCliniq on linkedin" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
<li><a href="https://www.youtube.com/icliniq" rel="nofollow noopener noreferrer" target="_blank" class="youtube-hover" title="follow iCliniq on YouTube"><i class="fab fa-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
<br /><br />
</footer>
<script src="https://assets.icliniq.com/v2/assets/js/second-inner-mainv3.js"></script>


<div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="xs-search-panel">
<form action="/home/search" method="POST" class="xs-search-group">
<input type="search" name="q" class="form-control" id="search" placeholder="Search">
<button type="submit" class="search-button"><i class="fas fa-search"></i></button>
</form>
</div>
</div>
</div>
</div>


</body>
</html>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
$(".telephone").on("keypress keyup blur",function(event){$(this).val($(this).val().replace(/[^\d].+/,""));if(event.which<48||event.which>57){event.preventDefault()}else{$(this).removeClass("error");$('label[for="telephone"]').css("display","none")}});(function($,window,document,undefined){$.fn.doubleTapToGo=function(params){if(!("ontouchstart"in window)&&!navigator.msMaxTouchPoints&&!navigator.userAgent.toLowerCase().match(/windows phone os 7/i))return false;this.each(function(){var curItem=false;$(this).on("click",function(e){var item=$(this);if(item[0]!=curItem[0]){e.preventDefault();curItem=item}});$(document).on("click touchstart MSPointerDown",function(e){var resetItem=true,parents=$(e.target).parents();for(var i=0;i<parents.length;i++)if(parents[i]==curItem[0])resetItem=false;if(resetItem)curItem=false})});return this}})(jQuery,window,document);$("#nav li:has(ul)").doubleTapToGo();
	</script>
<script type="text/javascript" src="https://assets.icliniq.com/v2/assets/js/jquery.toast.js"></script>
<script>
			$(document).ready(function() {
				setTimeout(function(){
					$(".header-main").show();
				}, 1000);
			});
		</script>
@endsection
