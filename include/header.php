<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="description"/>
		<meta name="keywords" content="keywords"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<link rel="shortcut icon" href="img/favicon.ico"/>
		<title>Helpo HTML Template</title>
		<!-- styles-->
		<link rel="stylesheet" href="css/styles.min.css"/>
			
		<!-- web-font loader-->
		<script>
			WebFontConfig = {

				google: {

					families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],

				}

			}

			function font() {

				var wf = document.createElement('script')

				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
				wf.type = 'text/javascript'
				wf.async = 'true'

				var s = document.getElementsByTagName('script')[0]

				s.parentNode.insertBefore(wf, s)

			}

			font()
		</script>
	</head>
	<body>
		<div class="page-wrapper">
			<!-- aside dropdown start-->
			<div class="aside-dropdown">
				<div class="aside-dropdown__inner"><span class="aside-dropdown__close">
					<svg class="icon">
						<use xlink:href="#close"></use>
					</svg></span>
				<div class="aside-dropdown__item d-lg-none d-block">
					<ul class="aside-menu">
						<li class="aside-menu__item aside-menu__item--has-child aside-menu__item--active"><a class="aside-menu__link" href="index"><span>Home</span></a>
							<!-- sub menu start-->
							
							<!-- sub menu end-->
						</li>
						<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="about"><span>About</span></a>
							<!-- sub menu start-->
							
							<!-- sub menu end-->
						</li>
						<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="blogs"><span>Blogs</span></a>
							<!-- sub menu start-->
							
						</li>
						<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="gallery"><span>Gallery</span></a>
							
						</li>
						<li class="aside-menu__item"><a class="aside-menu__link" href="contacts"><span>Contacts</span></a></li>
						
					</ul>
				</div>
				<div class="aside-dropdown__item">
					<!-- aside menu start-->
					<ul class="aside-menu">
						<li class="aside-menu__item"><a class="aside-menu__link" href="term and condition">Term and condition</a></li>
						<li class="aside-menu__item"><a class="aside-menu__link" href="privacy">Privacy policy</a></li>
						<li class="aside-menu__item"><a class="aside-menu__link" href="faq">faQ</a></li>
						
						
					</ul>
					<!-- aside menu end-->
					<div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:support@helpo.org">support@helpo.org</a></div>
					<div class="aside-inner"><span class="aside-inner__title">Phone numbers</span><a class="aside-inner__link" href="tel:+180012345678">+ 1800 - 123 456 78</a><a class="aside-inner__link" href="tel:+18009756511">+ 1800 - 975 65 11</a></div>
					<ul class="aside-socials">
						<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="aside-dropdown__item"><a class="button button--squared" href="donate"><span>Donate</span></a></div>
				</div>
			</div>
			<!-- aside dropdown end-->
			<!-- header start-->
			<header class="header header--front">
				<div class="container-fluid">
					<div class="row no-gutters justify-content-between">
						<div class="col-auto d-flex align-items-center">
							<div class="dropdown-trigger d-none d-sm-block">
								<div class="dropdown-trigger__item"></div>
							</div>
							<div class="header-logo"><a class="header-logo__link" href="index"><img class="header-logo__img logo--light" src="img/logo_white.png" alt="logo"/><img class="header-logo__img logo--dark" src="img/logo_dark.png" alt="logo"/></a></div>
						</div>
						<div class="col-auto">
							<!-- main menu start-->
							<nav>
								<ul class="main-menu">
									<li class="main-menu__item"><a class="main-menu__link" href="index"><span>Home</span></a>	
									</li>
									
									<li class="main-menu__item"><a class="main-menu__link" href="about"><span>About</span></a>	
									</li>
									
									<li class="main-menu__item"><a class="main-menu__link" href="blogs"><span>Blogs</span></a>	
									</li>
									
									<li class="main-menu__item"><a class="main-menu__link" href="gallery"><span>Gallery</span></a>	
									</li>
									
									<li class="main-menu__item"><a class="main-menu__link" href="contacts"><span>Contacts</span></a></li>
									
									<li class="main-menu__item"><a class="main-menu__link" href="events"><span>Events</span></a></li>
									
								</ul>
							</nav>
							<!-- main menu end-->
						</div>
						<div class="col-auto d-flex align-items-center">
							<!-- lang select start-->
							<ul class="lang-select">
								<li class="lang-select__item lang-select__item--active"><span>En</span>
									<ul class="lang-select__sub-list">
										<li><a href="#">French</a></li>
										<li><a href="#">Spanish</a></li>
										<li><a href="#">Deutsch</a></li>
										<li><a href="#">Russian</a></li>
									</ul>
								</li>
							</ul>
							<!-- lang select end-->
							<div class="dropdown-trigger d-block d-sm-none">
								<div class="dropdown-trigger__item"></div>
							</div><a class="button button--squared" href="donate"><span>Donate</span></a>
						</div>
					</div>
				</div>
			</header>
			<!-- header end-->
