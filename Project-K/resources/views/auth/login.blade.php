@extends('layouts.app')
@section('title','Login')

@section('content')
<header id="home">


<nav id="nav" class="navbar nav-alt-transparent">
<div class="container-fluid">
<div class="hidden-lg hidden-md hidden-sm">
<div class="navbar-header" style="background-image: radial-gradient(ellipse farthest-corner at 0 160%, #ffffff 0%, #ffffff 70%, #2a53e7 70%);">
<button type="button" aria-label="Navbar Ham" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<i class="fa fa-bars bar-close" aria-hidden="true"></i>
</button>
<a class="navbar-brand" href="https://www.icliniq.com/" style="padding-left:15px;"><img src="https://assets.icliniq.com/v2/assets/images/iCliniq-logo/ic-white-logo.svg" title="online Doctor" alt="online Doctor" class="hidden-sm"></a>
</div>
<div class="collapse navbar-collapse navbar-right">
<ul class="nav navbar-nav">
<li class="login" style="color: black;"><a href="index">Login</a> / <a href="user-register">Signup</a></li>
<li><a href="https://www.icliniq.com/ask-a-doctor-online">Consult Doctor</a></li>
<li>
<a href="https://www.icliniq.com/search/online-doctors-directory">Choose a Doctor</a>
</li>
<li><a href="/en/lab-tests-at-home">Book a Lab Test</a></li>
<li class="dropdown more-menu">
<a href="#" class="dropdown-toggle gradient-text" data-toggle="dropdown">More <img width="24px" height="24px" class="popular-fire" src="https://assets.icliniq.com/v2/img/fire-popular.png" alt="Popular"></a>
<ul class="dropdown-menu">
<div class="col-md-4 col-sm-4 col-xs-6 sub-nav">
<li><a href="https://www.icliniq.com/ask-a-doctor-online">Ask a Doctor Online</a></li>
<li><a href="/ask-a-doctor-online/icq100">Chat with a Doctor</a></li>
<li><a href="/phone-a-doctor">Phone a Doctor</a></li>
<li><a href="/video-chat-with-doctor">Video Consultation</a></li>
<li><a href="/symptom-checker?utm_source=icliniq+header&utm_medium=banner&utm_campaign=sym201221" title="Diagnose your symptoms using iCliniq Symptom Checker">Symptom Checker</a></li>
<li><a href="/deals-offers" title="Deals & Offer">Deals & Offer</a></li>
<li><a href="/mri-ct-scan-tests">MRI/CT Scan</a></li>
<li><a href="/en/lab-tests-at-home">Book a Lab Test</a></li>
</div>
<div class="col-md-4 col-sm-4 col-xs-6 sub-nav">
<li><a href="/articles">Articles</a></li>
<li><a href="/qa">Medical Q&A</a></li>
<li><a href="/discuss-case">Medical cases</a></li>
<li><a href="https://www.icliniq.com/tool">Tools</a></li>
<li><a href="/faq/index" target="_blank">FAQ</a></li>
<li><a href="/app">Get iCliniq App</a></li>
</div>
<div class="col-md-4 col-sm-4 col-xs-4 sub-nav">
<li><a href="about-us">About Us</a></li>
<li><a href="/press">Press</a></li>
<li><a href="/contact/contact-icliniq">Contact</a></li>
<li><a href="https://icliniqsupport.freshdesk.com/support/tickets/new">Support</a></li>
<li><a rel="noreferrer" href="https://help.icliniq.com" target="_blank">Help</a></li>
</div>
<div class="clear-fix"></div>
<div class="col-md-12 col-sm-12 col-xs-12 sup-port">
<div class="col-md-4 col-sm-4 col-xs-6 p-0">
<span style="float: left;"><img width="56px" height="54px" class="full" src="https://assets.icliniq.com/v2/img/24-7.png" title="24/7 support" alt="24/7 support"></span>
<p style="float: left; padding-top: 5px; padding-left: 10px">24/7 <br> SUPPORT</p>
</div>
<div class="col-md-4 col-sm-4 col-xs-6 pr-0">
<span>Email</span>
<p style="word-break: break-word;">icliniq@icliniq.com</p>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 pr-0 pt-2">
<span>Phone</span>
<p>
+91-99-432-70000
<br>+1 (844) 432-0202 <small>(Toll free for US & Canada)</small>
</p>
</div>
</div>
</ul>
</li>
<div class="clear-fix"></div>
<li><a href="#contact" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-search"></i></a></li>
</ul>
</div>
</div>
<div class="navbar-header hidden-xs">

<div class="navbar-brand">
<a href="https://www.icliniq.com/" alt="online Doctor" title="online Doctor">
<img class="logo" src="https://assets.icliniq.com/v2/assets/images/iCliniq-logo/ic-white-logo.svg" title="online Doctor" alt="online Doctor">
<img class="logo-alt" src="https://assets.icliniq.com/v2/assets/images/iCliniq-logo/ic-white-logo.svg" title="online Doctor" alt="online Doctor">
</a>
</div>


<div class="nav-collapse">
<span></span>
</div>

</div>

<ul class="main-nav nav navbar-nav navbar-right hidden-xs">
<li><a href="/">Login </a></li>
<li style="padding:0; margin:0"><a href="#">/</a></li>
<li style="margin:0;"><a href="user-register">Signup</a></li>
</ul>
<ul class="main-nav nav navbar-nav navbar-left hidden-xs">
<li><a href="https://www.icliniq.com/ask-a-doctor-online">Consult Doctor</a></li>
<li>
<a href="https://www.icliniq.com/search/online-doctors-directory" class="hidden-sm">Choose a Doctor</a>
</li>
<li><a href="/en/lab-tests-at-home" class="hidden-sm">Book a Lab Test</a></li>
<li class="has-dropdown">
<a class="gradient-text" href="#">More <img width="24px" height="24px" class="popular-fire" src="https://assets.icliniq.com/v2/img/fire-popular.png" alt="Popular"></a>
<ul class="dropdown com-div">
<div class="col-md-5 col-sm-5 sub-nav">
<li><a href="https://www.icliniq.com/ask-a-doctor-online">Ask a Doctor Online</a></li>
<li><a href="/ask-a-doctor-online/icq100">Chat with a Doctor</a></li>
<li><a href="/phone-a-doctor">Phone a Doctor</a></li>
<li><a href="/video-chat-with-doctor">Video Consultation</a></li>
<li>
<a href="https://www.icliniq.com/search/online-doctors-directory">Choose a Doctor</a>
</li>
<li><a href="/en/lab-tests-at-home">Book a Lab Test</a></li>
<li><a href="/mri-ct-scan-tests">MRI/CT Scan</a></li>
<li><a href="/symptom-checker?utm_source=icliniq+header&utm_medium=banner&utm_campaign=sym201221" title="Diagnose your symptoms using iCliniq Symptom Checker">Symptom Checker</a></li>
<li><a href="/deals-offers" title="Deals & Offer">Deals & Offer</a></li>
</div>
<div class="col-md-3 col-sm-3 sub-nav">
<li><a href="/articles">Articles</a></li>
<li><a href="/qa">Medical Q&A</a></li>
<li><a href="/discuss-case">Medical cases</a></li>
 <li><a href="https://www.icliniq.com/tool">Tools</a></li>
<li><a href="/faq/index" target="_blank">FAQ</a></li>
<li><a href="/app">Get iCliniq App</a></li>
</div>
<div class="col-md-3 col-sm-3 sub-nav">
<li><a href="https://www.icliniq.com/p/aboutus">About Us</a></li>
<li><a href="https://www.icliniq.com/p/terms">Terms</a></li>
<li><a href="https://www.icliniq.com/p/privacy">Privacy</a> </li>
<li><a href="https://www.icliniq.com/p/advertisement-policy">Ads Policy</a></li>
<li><a href="https://www.icliniq.com/contact/contact-icliniq">Contact</a></li>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 sup-port">
<div class="col-md-3 col-sm-3 p-0">
<span style="float: left;"><img width="56px" height="54px" src="https://assets.icliniq.com/v2/img/24-7.png" title="24/7 support" alt="24/7 support"></span>
<p style="float: left; padding-top: 5px; padding-left: 10px">24/7 <br> SUPPORT</p>
</div>
<div class="col-md-6 col-sm-6">
<span>Phone</span>
<p>
+91-99-432-70000
<br>+1 (844) 432-0202 <small>(Toll free for US & Canada)</small>
</p>
</div>
<div class="col-md-3 col-sm-3">
<span>Email</span>
<p style="word-break: break-word;">icliniq@icliniq.com</p>
</div>
</div>
</ul>
</li>
<li class="middle-nav"><a href="#contact" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-search"></i></a></li>
</ul>

</div>
</nav>


<script type="text/javascript">
		$(document).ready(function(){
			$("#exampleModal").on('shown.bs.modal', function(){
				$(this).find('input[type="text"]').focus();
			});
		});

		/*$(function(){

	 });*/
	 $(document).ready(function(){
		$('#nav-icon3').click(function(){
			$(this).toggleClass('open');
		});
	});
	</script>
</header>

<div class="container home-container height-viweport">
<style>
    .home-container {
        width: 100% !important;
        padding-right: unset !important;
        padding-left: unset !important;
        margin-right: unset !important;
        margin-left: unset !important;
        padding-bottom: 79px;
    }
    .breadcrumb {
        background-color: #3063e9;
        border-radius: 0px;
        color: #fff;
        border-top: 1px solid #5d88f9;
        font-size: 15px;
        margin-bottom: 0;
    }
    .breadcrumb a {
        color: #fff;
    }
    .breadcrumb span:last-child {
        color: #ffffffa3;
    }
    .p-2px {
        padding: 2px;
    }
    .container-padd {
        padding: 0 50px;
    }
    .home-container {
        padding-top: 64px;
    }
    body{
        /* background: #9053c7;
        background: -webkit-linear-gradient(-135deg, #c850c0, #4158d0);
        background: -o-linear-gradient(-135deg, #c850c0, #4158d0);
        background: -moz-linear-gradient(-135deg, #c850c0, #4158d0);
        background: linear-gradient(-135deg, #c850c0, #4158d0); */
        background:  url('https://assets.icliniq.com/v2/img/bg.png');
        background-size: cover;

    }
    #nav.nav-alt-transparent{
        background: #2a53e7;
    }
    .wrap-login100{
        z-index: 0!important;
    }
    .input100{
        font-family: 'lato' !important;
        font-weight: 700;
    }
    .txt1{
        font-family: 'lato' !important;
        font-weight: 700;
    }
    .txt2{
        font-family: 'lato' !important;
        font-weight: 700;
    }
    .login100-form-btn{
        font-family: 'lato'!important;
        font-weight: 700;
    }
    .pass-lock-alert{
        width: 760px;
        background: #fff;
        border-radius: 10px;
        margin: 0 auto;
        padding: 10px;
        text-align: center;
        font-size: 20px;
        border: 3px solid red;
        color: red;
        font-weight: 700;
        display: flex;
        justify-content: space-between;
        align-items: center;
        overflow: hidden;
    }
    .pass-lock-alert i{
        font-size: 17px;
        cursor: pointer;
    }
    .height-viweport{
		min-height: 100vh;
	}
    @media (max-width: 991px) {
        .home-container {
            padding-bottom: 79px;
        }
    }
    @media (max-width: 767px) {
        .home-container {
            padding-top: 85px;
        }
    }
</style>
<div class="clearfix padding-header"></div>
<div class="breadcrumb">
<span><a href="/en/">iCliniq</a></span>
<span class="p-2px">/</span>
<span>Login</span>
</div>
<div class="container-fluid pb-5 height-viweport">
<h1 class="text-center" style="color: #fff;">
Login to iCliniq </h1>
<link rel="stylesheet" type="text/css" href="https://assets.icliniq.com/v2/css/util-login.css">
<link rel="stylesheet" type="text/css" href="https://assets.icliniq.com/v2/css/main-login.css">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<script src="https://assets.icliniq.com/v2/assets/js/crypto/cryptojs-aes.min.js"></script>
<script src="https://assets.icliniq.com/v2/assets/js/crypto/cryptojs-aes-format.js"></script>
<style>
	ul.login-ul {
	  display: flex;
	}

	ul.login-ul li {
	  list-style: none;
	}

	ul.login-ul li a {
	  width: 50px;
	  height: 50px;
	  background-color: #fff;
	  text-align: center;
	  line-height: 45px;
	  font-size: 25px;
	  margin: 0 10px;
	  display: block;
	  border-radius: 50%;
	  position: relative;
	  overflow: hidden;
	  border: 3px solid #fff;
	  z-index: 1;
	}

	ul.login-ul li a .icon {
	  position: relative;
	  color: #262626;
	  transition: .5s;
	  z-index: 3;
	}

	ul.login-ul li a:hover .icon {
	  color: #fff;
	  transform: rotateY(360deg);
	}

	ul.login-ul li a:before {
	  content: "";
	  position: absolute;
	  top: 100%;
	  left: 0;
	  width: 100%;
	  height: 100%;
	  background: #f00;
	  transition: .5s;
	  z-index: 2;
	}

	ul.login-ul li a:hover:before {
	  top: 0;
	}

	ul.login-ul li:nth-child(1) a:before{
	  background: #3b5999;
	}

	ul.login-ul li:nth-child(2) a:before{
	  background: #55acee;
	}

	ul.login-ul li:nth-child(3) a:before {
	  background: #0077b5;
	}

	ul.login-ul li:nth-child(4) a:before {
	  background: #dd4b39;
	}
	.wrap-login100 {
	    padding: 33px 90px !important;
	}
	.symbol-input100-eye{
		font-size: 15px;
		display: -webkit-box;
		display: -webkit-flex;
		display: -moz-box;
		display: -ms-flexbox;
		display: flex;
		justify-content: flex-end;
		align-items: center;
		position: absolute;
		border-radius: 25px;
		bottom: 0;
		right: 0;
		height: 100%;
		padding-left: 35px;
		padding-right: 18px;
		color: #666666;
		-webkit-transition: all 0.4s;
		-o-transition: all 0.4s;
		-moz-transition: all 0.4s;
		transition: all 0.4s;
	}
	.symbol-input100-eye .field-icon{
		float: right;
	}
	.icon-input-padding{
		padding: 0 60px 0 68px!important;
	}
	.toggle-password{
		text-decoration: underline;
		cursor: pointer;
	}
	@media (max-width: 576px) {
		.wrap-login100 {
		    padding: 33px 15px !important;
		}
	}
</style>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<div class="login100-pic">
<img src="https://assets.icliniq.com/v2/assets/images/iCliniq-logo/iCliniq_q.svg" alt="logo login">
</div>

<form class="login100-form validate-form" name="signin_Form" id="idFrmLogin" method="post" action="/users/signinSubmit" role="form" autocomplete="off">
<input type="hidden" name="csr3" value="63f0831b37656" />
<div class="row text-center">
<ul class="login-ul" style="display: none;">

</ul>
</div>
<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
<input type="text" name="username" class="input100" placeholder="User ID or E-mail" required="true" id="username" /> <span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-envelope" aria-hidden="true"></i>
</span>
</div>
<div class="wrap-input100 validate-input" data-validate="Password is required">
<input type="password" name="pwd" id="rpassword" class="input100 icon-input-padding" placeholder="Password" required="true" /> <span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
<span class="symbol-input100-eye">
<span toggle="#rpassword" class="field-icon toggle-password">Show</span>
</span>
</div>
<div class="container-login100-form-btn">
<button type="submit" class="login100-form-btn">
Login </button>
</div>
<div class="text-center p-t-12">
<span class='txt1'> Forgot </span> <a class='txt2' href='/users/forgetpass'> Password? </a> </div>
<div class="text-center p-t-16">
<a class="txt2" href="/users/userSignup">
Create your Account <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
</a>
</div>
</form>
</div>
</div>
</div>

<script>
	// $('.js-tilt').tilt({
	// 	scale: 1.1
	// })
	$(".toggle-password").click(function() {
		var tp_text = $(this).text();
		tp_text = (tp_text == 'Show') ? 'Hide' : 'Show';
		$(this).text(tp_text);
		var input = $($(this).attr("toggle"));
		if (input.attr("type") == "password") {
			input.attr("type", "text");
		} else {
			input.attr("type", "password");
		}
	});

	$( "#idFrmLogin" ).submit(function( event ) {

		// To remove the alphanumeric text whilw we show the password
		var input = $('#rpassword');
		if (input.attr("type") == "text") {
			input.attr("type", "password");
		}

	  var v = $('#rpassword').val();
      var p_key = 'i!lTiL9o)0je%4gh7kFgal';
      if(v != ''){
      	var the_value = CryptoJSAesJson.encrypt(v, p_key);
      	$('#rpassword').val(the_value);
      }

	  return true;
	});
</script></div> &nbsp;<br /><br />
</div>
<style>
	.disclaimerDiv {
		padding: 0 !important;
	}
	@media (max-width: 767px) {
		.disclaimerDiv {
			padding: 0 15px !important;
		}
	}
	#emailOtpVerifyModal .modal-content{
        border-radius: 20px;
    }
	.modal-dialog{
		transform: none !important;
	}
    .name-email-modal{
        font-size: 30px;
    }
    .welcome-msg-heading{
        font-size: 20px;
    }
    #emailOtpVerifyModal .modal-body{
        padding: 30px;
    }
    .health-good-hands{
        font-size: 18px;
    }
    #emailOtpVerifyModal .modal-dialog{
        max-width: 600px;
    }
    .note-email-verify{
        background: #FFF9EE;
        padding: 10px;
    }
    .note-email-verify-heading{
        color: #AC8744;
    }
    .mx-w-400 {
        max-width: 400px;
        margin: auto;
    }
    .primary-theme-color{
        color: #1341a3;
    }
    .border-line-email {
        border-bottom: 2px solid #ECEFF6;
    }
    .heart-clr{
        color: #2d7abf;
    }
    .btn-query-submit{
		display: flex;
		align-items: center;
		justify-content: center;
		/* margin: 40px 0; */
		cursor: pointer;
        width: 100%;
        background-color: #1341a3;
        color: #fff;
        font-weight: 500;
        font-size: 23px;
        padding: 0.8rem 2rem;
        transition: 0.5s;
        border: 1px solid #1341a3;
        border-radius: 10px;
    }
    .btn-query-submit:hover{
        background-color: #0e2d6f;
        color: #fff;
        transition: 0.5s;
    }
    .login-pop-up-link{
        display: inline-flex;
        font-weight: 700;
        cursor: pointer;
        text-decoration: underline;
        color: #1341A3;
    }
    .form-group.input-material .form-control,.form-control.input100,.form-select{
        background-color: #ECEFF6;
        border: none;
        border-radius: 10px;
        padding: 0.75rem;
    }
    .form-group.input-material .form-control:focus,.form-control.input100:focus,.form-select:focus{
        background-color: #fff;
    }
    .form-group.input-material .input-group-text{
        /*border-left: none;*/
        border: none;
        background-color: #eceff6;
        font-size: 0.85rem;
    }
    .form-group.input-material .form-control#signup_pwd,.form-group.input-material #pwd{
        border-right: none;
    }
    .form-group.input-material .signup_pwd_show,.form-group.input-material .login_pwd{
        color: #212227;
        text-decoration: underline;
        cursor: pointer;
    }
    .form-horizontal label{
        font-size: 16px;
        margin-bottom: 10px;
        /* font-family: 'montserrat'; */
    }
    .form-horizontal label.custom-control-label{
        font-size: 16px;
        margin-bottom: 10px;
        font-family: 'nunito sans';
    }
    @media screen and (max-width: 992px) {
        .btn-query-submit{
            font-size: 16px;
            padding: 0.8rem;
        }
        .action-button-Back{
            padding: 0.75rem 0rem;
        }
        .login-signup-padding{
            padding-top: 0;
        }
        .font-20{
            font-size: 16px;
        }
        .heading-main{
            font-size: 26px
        }
        .already-have-account{
            margin-top: 1rem;
            padding-top: 1rem;
            font-size: 18px;
        }
        .xs-pb-5 {
            padding-bottom: 3rem;
        }
        .border-xs-line{
            border-bottom: 2px solid #ECEFF6;
        }
        .padding-login-modal{
            padding: 30px;
        }
        #emailOtpVerifyModal .modal-body {
            padding: 30px 15px;
        }
        .name-email-modal {
            font-size: 18px;
        }
        .health-good-hands {
            font-size: 16px;
        }
    }

	/* Chrome, Safari, Edge, Opera */
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
	-webkit-appearance: none;
	margin: 0;
	}

	/* Firefox */
	input[type=number] {
	-moz-appearance: textfield;
	}
</style>
<style>
		.footer {
			width: 100%;
			margin: auto;
		}
		footer {
			width: 100%;
		    position: relative;
		    line-height: 2.4rem;
		    -webkit-flex: 1;
		    flex: 1;
		    padding: 35px 0 35px;
		    z-index: 0;
			background-color: #002157;
			color: #fff
		}
		footer:after {
		    content: "";
		    position: absolute;
		    z-index: -1;
		    top: 0;
		    bottom: 0;
		    left: 0;
		    right: 0;
			background: url('https://assets.icliniq.com/v2/img/iq-trans-bg.png') top 0 left 0/320px auto,url('https://assets.icliniq.com/v2/img/iq-trans-bg.png') top 80px left 160px/320px auto;
			opacity: .05;
		}
		.home-container{
			position: relative;
		}
		#sfooter {
		    color: #fff;
		    background: #2a53e6;
		    position: fixed;
		    bottom: 0;
		    left: 0;
		    right: 0;
		    height: 55px;
		    font-size: 13px;
		}
		#sfooter a {
		    font-size: 13px!important;
		    border-radius: 5px;
		    color: #fff;
		}
		#sfooter a:hover{
			color: #fff;
		}
		.sfooter-btn {
		    margin: 8px 0!important;
		}
		.tweet-hover{
			color: #2aa3ef;
		}
		.linkedin {
		    background: #1178b3;
		}
		.insta {
		    background: #e8715c;
		}
		.ul-list a.tweets-class:hover i{
			color: #fff;
			-webkit-transition: all .4s ease;
		    -o-transition: all .4s ease;
		    transition: all .4s ease;
		}
		.ul-list a{
			line-height: 35px;
    		/* padding: 10px; */
		}
		.footer .ul-list li a>sub{
			bottom: 6px;
		    color: #ebee23;
		    font-weight: 700;
		    left: 0px;
		    background: #3d00f9;
		    padding: 2px;
		    border-radius: 5px;
		}
		.corona-virus{
			color: #fff;
			background: #333;
			position: fixed;
			opacity: 0.9;
			bottom: 54px;
			left: 0;
			right: 0;
			height: 25px;
			font-size:16px;
			padding: 0 20px;
		}
		.covid-ebook input:focus{
			border: 1px solid #ccc !important;
			border-color: #ccc !important;
		}
		.modal-body.search-width{
			width: 75%!important;
		}
		.app-store{
			width: 100%;
		}
		.dropdown-language .dropdown-menu{
			top: 25px;
		}
		.dropdown-language .btn-language{
			background: #00173d;
			border: 2px solid #164979;
		}
		.dropdown-language .btn-language:focus,.dropdown-language .btn-language:hover{
			color: #fff;
		}
		.footer-first .logo-img{
			background-color: #fff;
			padding: 5px;
			border-radius: 5px;
			max-height: 55px!important;
		}
		.spec-list-link{
			display: inline-block;
			color: #ccc;
			line-height: 30px;
			/* padding:10px; */
		}
		@media (max-width: 767px) {
			ul.ul-list{
				padding-left: 0;
			}
			.main-search input{
				font-size: 20px!important;
			}
			.modal-body.search-width{
				width: 100%!important;
			}
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

<footer>
<div class="footer">
<div class="col-md-2 col-sm-3 col-xs-12 footer-first">
<img src="https://assets.icliniq.com/v2/assets/images/iCliniq-logo/ic-white-logo.svg" alt="logo" title="logo" class="img-responsive logo-img">
</div>
<div class="col-md-3 col-sm-4 col-xs-6 mb-2">
<ul class="ul-list">
<li><a href="https://www.icliniq.com/ask-a-doctor-online">Ask a Doctor Online</a></li>
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
<li><a href="/discuss-case">Medical Cases</a></li>
<li><a href="/medical-team" title="iCliniq content moderation team">Medical Review Team</a></li>
<li><a href="/symptom-checker?utm_source=icliniq+header&utm_medium=banner&utm_campaign=sym201221" title="Diagnose your symptoms using iCliniq Symptom Checker">Symptom Checker</a></li>
<li><a href="/deals-offers" title="Deals %1 Offers">Deals & Offers</a></li>
</ul>
</div>
<div class="col-md-2 col-sm-3 col-xs-6 mb-2">
<ul class="ul-list">
<li><a href="https://www.icliniq.com/tool">Tools</a></li>
<li><a href="/faq/index" target="_blank">FAQ</a></li>
<li><a href="blog">Blogs</a></li>
<li><a href="/p/careers">Careers</a></li>
<li><a href="https://www.icliniq.com/p/aboutus">About Us</a></li>
<li><a href="https://www.icliniq.com/p/terms">Terms</a></li>
<li><a href="https://www.icliniq.com/p/privacy">Privacy</a> </li>
<li><a href="https://www.icliniq.com/p/advertisement-policy">Ads Policy</a></li>
 <li><a href="/press">Press</a></li>
<li><a href="https://www.icliniq.com/contact/contact-icliniq">Contact</a></li>
<li><a href="https://icliniqsupport.freshdesk.com/support/tickets/new">Support</a></li>
<li><a rel="noreferrer" href="https://help.icliniq.com" target="_blank">Help</a></li>
</ul>
</div>
<div class="clear-fix hidden-lg hidden-md hidden-sm"></div>
<div class="col-md-2 col-sm-3 col-xs-6 mb-2">
<ul class="ul-list">
<li><a href="/app">Get iCliniq App</a></li>
<li><a href="/get-api">Get API</a></li>
<li><a href="/embeddable-widget-for-affiliates">Get Widget</a></li>
<li><a class="tweets-class" href="/p/testimonial-tweets"><i class="fa fa-twitter tweet-hover" aria-hidden="true"></i> Testimonial Tweets</a></li>
</ul>
</div>
<div class="col-md-2 col-sm-3 col-xs-6 mb-2">
<ul class="ul-list">
<li><a href="https://www.icliniq.com/employer">For Employers</a></li>
<li><a href="/telegram/index">For Telegram</a></li>
<li><a href="/apps/slack">For Slack Teams</a></li>
<li><a href="/apps/msteam">For MS Team</a></li>
<li><a href="/ask-a-doctor-online/icq100/stories/">Success Stories</a></li>
<li><a href="/ask-a-doctor-online/icq100">#icliniq100hrs</a></li>
</ul>
</div>

<div class="clear-fix"></div>
<div class="no-class pt-2">
<div class="row">
<div class="col-lg-12 col-md-12 ">
<div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
<p style="text-transform: uppercase;">specialties we cover</p>
<div class="pb-1" style="color: #5c7fb8">
<a class="spec-list-link" href="/qa/specialities/obstetrician-and-gynaecologist">Obstetrics and Gynecology</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/dermatologist">Dermatology</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/internal-medicine-physician">Internal Medicine</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/sexologist">Sexology</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/psychiatrist">Psychiatry</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/general-medicine-physician">General Medicine</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/ENT-Otolaryngologist">Otolaryngology (E.N.T)</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/medical-gastroenterologist">Medical Gastroenterology</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/eye-care-ophthalmologist">Ophthalmology (Eye Care)</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/dentist">Dentistry</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/cardiologist">Cardiology</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/paediatrician">Pediatrics</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/urologist">Urology</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/orthopaedician-and-traumatologist">Orthopedics And Traumatology</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/family-physician">Family Physician</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/pulmonologist">Pulmonologists</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/HIV-AIDS-specialist">HIV/AIDS Specialist</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/endocrinologist">Endocrinology</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/general-practitioner">General Practitioner</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/nephrologist">Nephrology</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/infectious-diseases-specialist">Infectious Diseases</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/diabetologist">Diabetology</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/neurologist">Neurology</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/allergy-specialist">Allergy Specialist</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/rheumatologist">Rheumatology</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities/cosmetologist">Cosmetology</a>&nbsp;&nbsp;&nbsp;
<a class="spec-list-link" href="/qa/specialities"><b>More...</b></a>
</div>
&nbsp;<br />
</div>
<div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
<div class="f-right app-store">
<div class="store-icon text-center">
<p style="margin-top: 20px;margin-bottom: 15px;font-size: 18px;color: #ff6633;font-weight: 700;text-transform: uppercase;">Get iCliniq App</p>
<span style="padding-right: 5px"><a href="https://play.google.com/store/apps/details?id=com.orane.icliniq" rel="noopener" target="_blank"><img width="118px" height="38px" src="https://assets.icliniq.com/v2/img/google-play.png" alt="google play" title="google play"></a></span>
<span><a href="https://itunes.apple.com/in/app/icliniq-ask-a-doctor/id1247883470?mt=8" rel="noopener" target="_blank"><img width="108px" height="38px" src="https://assets.icliniq.com/v2/img/apple-store.png" alt="apple store" title="apple store"></a></span>
</div>
</div>
</div>
<div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
<p style="color:#ccc;"><small><b>Disclaimer:</b> No content published on this website is intended to be a substitute for professional medical diagnosis, advice or treatment by a trained physician. Seek the advice from your physician or other qualified health-care providers with questions you may have regarding your symptoms and medical condition for a complete medical diagnosis. Do not delay or disregard seeking professional medical advice because of something you have read on this website. Read our <a href="https://www.icliniq.com/p/editorial-policy">Editorial Process</a> to know how we create content for health articles and queries. &nbsp;<br /><br /><br /></small></p>
</div>
</div>
</div>
<div class="col-md-6 col-xs-12 cc-logo">
<p style="text-transform: uppercase;">payments accepted</p>
<p>
<img width="50px" height="34px" class="cc" src="https://assets.icliniq.com/v2/img/amex.png" title="Amex card" alt="Amex card" />
<img width="50px" height="34px" class="cc" src="https://assets.icliniq.com/v2/img/bank.png" title="Bank transfer" alt="Bank transfer" />
<img width="50px" height="34px" class="cc" src="https://assets.icliniq.com/v2/img/mastro.png" title="Mastro" alt="Mastro" />
<img width="50px" height="34px" class="cc" src="https://assets.icliniq.com/v2/img/master.png" title="Master" alt="Master" />
<img width="50px" height="34px" class="cc" src="https://assets.icliniq.com/v2/img/visa.png" title="Visa card" alt="Visa card" />
<img width="50px" height="34px" class="cc" src="https://assets.icliniq.com/v2/img/paypal.png" title="Paypal" alt="Paypal" />
<img width="50px" height="34px" class="cc" src="https://assets.icliniq.com/v2/img/discover.png" title="Discover card" alt="Discover card" />
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp; <br>
<a href="https://www.dmca.com/Protection/Status.aspx?ID=1a454a14-0c96-4301-85e3-4d008299e65e" title="DMCA.com Protection Status" class="dmca-badge" rel="nofollow noopener noreferrer" target="_blank"> <img src="https://images.dmca.com/Badges/DMCA_logo-grn-btn120w.png?ID=1a454a14-0c96-4301-85e3-4d008299e65e" alt="DMCA.com Protection Status" style="margin:10px 0;" /></a>

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
&nbsp;&nbsp;
<a href="#?" onclick="popUrl('https://seal.godaddy.com/verifySeal?sealID=c68QDgRKyjCOKwvDCjhsC68v3tZpTS3TdSn7s5WxVnmwmSKuMEamN5nzB');"><img class="img-responsive img-thumbnail" alt="godaddy ssl seal" title="godaddy ssl seal" style="margin: 10px 0;" src="https://assets.icliniq.com/images/boot/godaddy_seal.gif" /></a>
</p>
&nbsp;<br /><br /><br />
</div>
<div class="col-md-6 col-xs-12">
<p style="text-transform: uppercase;">Follow iCliniq</p>
<div class="social linkedin"><a href="https://www.linkedin.com/company/icliniq/" rel="nofollow noopener noreferrer" target="_blank" title="follow iCliniq on linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div>
<div class="social insta"><a href="https://www.instagram.com/icliniq/" rel="nofollow noopener noreferrer" target="_blank" title="follow iCliniq on insta"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
<div class="social twitter"><a href="https://www.twitter.com/icliniq" rel="nofollow noopener noreferrer" target="_blank" title="follow iCliniq on Twitter"><i class="fa fa-twitter"></i></a></div>
<div class="social facebook"><a href="https://www.facebook.com/icliniq/" rel="nofollow noopener noreferrer" target="_blank" title="follow iCliniq on Facebook"><i class="fa fa-facebook"></i></a></div>
<div class="social youtube"><a href="https://www.youtube.com/icliniq" rel="nofollow noopener noreferrer" target="_blank" title="follow iCliniq on YouTube"><i class="fa fa-youtube"></i></a></div>
<div class="social pinterest"><a href="https://pinterest.com/icliniq/" rel="nofollow noopener noreferrer" target="_blank" title="follow iCliniq on Pinterest"><i class="fa fa-pinterest"></i></a></div>
</div>
<div class="clear-fix"></div>
<p class="text-center copy">
Copyright © 2023, iCliniq - All Rights Reserved
<br /><small>
Visit other versions in <a href="https://www.icliniq.com/en_US/" style="color:#ccc;" title="iCliniq America">US</a>, <a href="https://www.icliniq.com/en_GB/" title="iCliniq UK" style="color:#ccc;">UK</a>, <a href="https://www.icliniq.com/en_AU/" title="iCliniq Australia" style="color:#ccc;">Australia</a>, <a href="https://www.icliniq.com/en_IN/" style="color:#ccc;" title="iCliniq India">India</a>, <a href="https://www.icliniq.com/en_PH/" style="color:#ccc;" title="iCliniq Philippines">Philippines</a> and <a href="https://www.icliniq.com/en/" style="color:#ccc;" title="iCliniq Home">Home</a>
</small>
<br /><small>version 8.31-7-prod</small>
&nbsp;<br /><br />
</p>
</div>
</div>
</footer>




<script type="text/javascript" src="https://assets.icliniq.com/v2/js/main.js"></script>
<script>
	  	wow = new WOW({}).init();
	</script>
<div class="modal fade main-search" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document" style="width: 100%;">
<div class="modal-content">
<div class="modal-header" style="margin-bottom: 50px; margin-left: 50px;">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true"> <img width="50px" height="50px" src="https://assets.icliniq.com/v2/img/close.png"></span>
</button>
</div>
<div class="modal-body search-width">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<form id="frmGlobalSearch" autocomplete="off" action="/home/search"><input type="text" name="q" placeholder="Enter a search term..."></form>
<div class="mt-2 enter-search" onclick="document.getElementById('frmGlobalSearch').submit();">
<p><span>Press</span>
<span class="enter">Enter<br><img width="23px" height="13px" src="https://assets.icliniq.com/v2/img/enter.png"></span>
<span>to Search</span></p>
</div>
</div>
</div>
</div>
</div>
</div>



	function loginFormSubmit() {
		var emailcheck = $("#email_id").val();
		if(emailcheck != ''){
			var isValidUsr = true;
			$('#loginSignupForm').submit();
			return true;
		}else{
			$('#loginSignupForm').submit();
			return true;
		}
	}
	function changeDiv($idVal) {
		if($idVal == 1) {
			$("#changeEmail").show();
			$(".skipBtn").show();
			$(".otpBtn").hide();
			$("#verifyOTP").hide();
			$("#vpin").val("");
			$("#email_id").prop('required',true);
		}else {
			$("#changeEmail").hide();
			$("#verifyOTP").show();
			$(".skipBtn").hide();
			$(".otpBtn").show();

		}
	}

	// console.clear()
 </script>
</body>
@endsection

@section('script')
<script>
	/*Hide nave bar more dropdown while touch outside of the dropdown in touch devices */
	/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
	More informations:
	https://osvaldas.info/drop-down-navigation-responsive-and-touch-friendly
	*/
	;(function( $, window, document, undefined )
	{
		$.fn.doubleTapToGo = function( params )
		{
			if( !( 'ontouchstart' in window ) &&
				!navigator.msMaxTouchPoints &&
				!navigator.userAgent.toLowerCase().match( /windows phone os 7/i ) ) return false;
			this.each( function()
			{
				var curItem = false;
				$( this ).on( 'click', function( e )
				{
					var item = $( this );
					if( item[ 0 ] != curItem[ 0 ] )
					{
						e.preventDefault();
						curItem = item;
					}
				});
				$( document ).on( 'click touchstart MSPointerDown', function( e )
				{
					var resetItem = true,
						parents	  = $( e.target ).parents();
					for( var i = 0; i < parents.length; i++ )
						if( parents[ i ] == curItem[ 0 ] )
							resetItem = false;
					if( resetItem )
						curItem = false;
				});
			});
			return this;
		};
	})( jQuery, window, document );
	$( '#nav li:has(ul)' ).doubleTapToGo();
	/*
	VIEWPORT BUG FIX
	iOS viewport scaling bug fix, by @mathias, @cheeaun and @jdalton
	*/
	;(function(e){function o(){s.content="width=device-width,minimum-scale="+i[0]+",maximum-scale="+i[1];e.removeEventListener(n,o,true)}var t="addEventListener",n="gesturestart",r="querySelectorAll",i=[1,1],s=r in e?e[r]("meta[name=viewport]"):[];if((s=s[s.length-1])&&t in e){o();i=[.25,1.6];e[t](n,o,true)}})(document);

	  try{
	    $('.divDocRow').hover(
		  function(){ $(this).addClass('hover'); },
		  function(){ $(this).removeClass('hover')}
	    )
	  }catch(e){;}

	  try{
	    $('[data-toggle="popoverimg_cust"]').popover({
		  html: true,
		  title: 'Sample Question &  Answer',
		  trigger: 'hover',
		  'placement': 'right',
		  'width':700,
		  template: '<div class="popover popover-medium"><div class="arrow"></div><div class="popover-inner"><h4 class="popover-title"></h4><div class="popover-content"><p></p></div></div></div>'
	    });

	    var img_ob = '<img src="https://assets.icliniq.com/images/qa-answer-ob-gyac.jpg" />';
	    $('[data-toggle="popoverimg_ob"]').popover({
		  title: 'Sample Question &  Answer',
		  trigger: 'hover',
		  'placement': 'right',
		  'content':img_ob,
		  'width':700,
		  'html': true,
		  container: 'body',
		  template: '<div class="popover popover-medium"><div class="arrow"></div><div class="popover-inner"><h4 class="popover-title"></h4><div class="popover-content"><p></p></div></div></div>'
	    });

	  }catch(e){;}

	  try{
		$('[data-toggle="popover"]').popover({
		  trigger: 'hover',
		  'placement': 'top',
		  container: 'body',
		  template: '<div class="popover"><div class="arrow"></div><div class="popover-inner"><h4 class="popover-title"></h4><div class="popover-content"><p></p></div></div></div>'
		});

		var img = '<img class="img-responsive" width="100%" src="https://assets.icliniq.com/images/https://assets.icliniq.com/images/jio-ask-sample.png" />';
		$('[data-toggle="popoverimg"]').popover({
		  title: 'Sample Question &  Answer',
		  trigger: 'hover',
		  'placement': 'right',
		  'content':img,
		  'width':700,
		  'html': true,
		  container: 'body',
		  template: '<div class="popover popover-medium media-left"><div class="arrow"></div><div class="popover-inner"><h4 class="popover-title"></h4><div class="popover-content"><p></p></div></div></div>'
		});
	  }catch(e){;}
	  $('.dropdown-language').hover(
		function(){ $(this).addClass('open') },
		function(){ $(this).removeClass('open') }
	)
</script>
<script>
	function loginFormSubmit() {
		var emailcheck = $("#email_id").val();
		if(emailcheck != ''){
			var isValidUsr = true;
			$('#loginSignupForm').submit();
			return true;
		}else{
			$('#loginSignupForm').submit();
			return true;
		}
	}
	function changeDiv($idVal) {
		if($idVal == 1) {
			$("#changeEmail").show();
			$(".skipBtn").show();
			$(".otpBtn").hide();
			$("#verifyOTP").hide();
			$("#vpin").val("");
			$("#email_id").prop('required',true);
		}else {
			$("#changeEmail").hide();
			$("#verifyOTP").show();
			$(".skipBtn").hide();
			$(".otpBtn").show();

		}
	}

	// console.clear()
 </script>
@endsection
