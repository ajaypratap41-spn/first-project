<?php
include('include/header.php');
?>
			<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="img/water3.jpg" media="(min-width: 992px)"/><img class="img--bg" src="img/water3.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span>Charity</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
										<h1 class="promo-primary__title"><span>Clean</span> <span>Water</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- donation start-->
				<section class="section donation"><img class="donation__bg" src="img/donation_img.png" alt="img"/>
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="donation-item">
									<div class="donation-item__img"><img class="img--bg" src="img/water3.jpg" alt="img"/></div>
									<div class="donation-item__body">
										<div class="row">
											<div class="col-12">
												<h5 class="donation-item__title">Clean Water</h5>
											</div>
										</div>
										<div class="row align-items-end">
											<div class="col-lg-7">
												<div class="progress-bar">
													<div class="progress-bar__inner" style="width: 42%;">
														<div class="progress-bar__value">42%</div>
													</div>
												</div>
											</div>
											<div class="col-lg-5">
												<div class="donation-item__details-holder">
													<div class="donation-item__details-item"><span>Goal: </span><span>220 000$</span></div>
													<div class="donation-item__details-item"><span>Pledged: </span><span>95 200$</span></div>
												</div>
											</div>
										</div>
										<form class="form donation-form" action="javascript:void(0);">
											<div class="row align-items-baseline margin-bottom">
												<div class="col-lg-5 col-xl-6">
													<label class="form__label"><span class="form__icon">$</span>
														<input class="form__field form__input-number" type="number"/>
													</label>
												</div>
												<div class="col-lg-7 col-xl-6 text-lg-right">
													<label class="form__radio-label"><span class="form__label-text">$100.00</span>
														<input class="form__input-radio" type="radio" name="value-select" value="100" checked="checked"/><span class="form__radio-mask form__radio-mask"></span>
													</label>
													<label class="form__radio-label"><span class="form__label-text">$200.00</span>
														<input class="form__input-radio" type="radio" name="value-select" value="200"/><span class="form__radio-mask form__radio-mask"></span>
													</label>
													<label class="form__radio-label"><span class="form__label-text">$500.00</span>
														<input class="form__input-radio" type="radio" name="value-select" value="500"/><span class="form__radio-mask form__radio-mask"></span>
													</label>
													<label class="form__radio-label"><span class="form__label-text">$1000.00</span>
														<input class="form__input-radio" type="radio" name="value-select" value="1000"/><span class="form__radio-mask form__radio-mask"></span>
													</label>
												</div>
											</div>
											<div class="row margin-bottom">
												<div class="col-12">
													<h6 class="form__title">Payment Method</h6>
												</div>
												<div class="col-12">
													<label class="form__radio-label"><img class="form__label-img" src="img/paypal.png" alt="paypal"/>
														<input class="form__input-radio" type="radio" name="method-select" value="paypal" checked="checked"/><span class="form__radio-mask form__radio-mask"></span>
													</label>
													<label class="form__radio-label"><img class="form__label-img" src="img/klarna.png" alt="klarna"/>
														<input class="form__input-radio" type="radio" name="method-select" value="klarna"/><span class="form__radio-mask form__radio-mask"></span>
													</label>
													<label class="form__radio-label"><img class="form__label-img" src="img/visa.png" alt="visa"/>
														<input class="form__input-radio" type="radio" name="method-select" value="visa"/><span class="form__radio-mask form__radio-mask"></span>
													</label>
												</div>
											</div>
											<div class="row">
												<div class="col-12">
													<h6 class="form__title">Personal Info</h6>
												</div>
												<div class="col-lg-4 margin-30">
													<input class="form__field" type="text" name="first-name" placeholder="First Name"/>
												</div>
												<div class="col-lg-4 margin-30">
													<input class="form__field" type="text" name="last-name" placeholder="Last Name"/>
												</div>
												<div class="col-lg-4 margin-30">
													<input class="form__field" type="email" name="email" placeholder="Email"/>
												</div>
												<div class="col-lg-4">
													<button class="form__submit" type="submit">+ Donate</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- donation end-->
				<section class="section">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<!-- cause details tabs start-->
								<div class="tabs horizontal-tabs cause-details-tabs">
									<ul class="horizontal-tabs__header">
										<li><a href="#horizontal-tabs__item-1"><span>Description </span></a></li>
										<li><a href="#horizontal-tabs__item-2"><span>Donors</span></a></li>
										<li><a href="#horizontal-tabs__item-3"><span>Video</span></a></li>
										<li><a href="#horizontal-tabs__item-4"><span>Gallery</span></a></li>
									</ul>
									<div class="horizontal-tabs__content">
										<div class="horizontal-tabs__item" id="horizontal-tabs__item-1">
											<p><strong>Clean Water More than 800 children under age 5 die every day from diarrhea caused by contaminated water, poor sanitation, and unsafe hygiene. But we believe the global water and sanitation crisis can be solved within our lifetimes. That’s why we’re focused on ensuring clean water, sanitation, and hygiene (WASH) for every person in every community we work in, including the most vulnerable populations in the hardest-to-reach places. This work is more important now than ever, since clean water is essential for handwashing and disinfection to prevent the spread of diseases like COVID-19.</strong></p>
											<p>Globally, 844 million people lack access to clean water, which means that more than 1 of every 10 people on the planet are affected by the global water crisis. Learn more as we break this topic down — in photos and videos.</p>
											<p>African lungfish silverside, Red salmon rockfish grunion, garpike zebra danio king-of-the-salmon banjo catfish. Sea chub demoiselle whalefish zebra lionfish mud cat pelican eel. Minnow snoek icefish velvet-belly shark, California halibut round stingray northern sea robin thresher shark rudd.</p>
											<h6 class="tabs__title">Access</h6>
											<p>New evaluation finds social accountability led to system strengthening in Bangladesh Social accountability supported system strengthening by providing a platform for citizen-state engagement and “overcoming inertia” on the part of citizens and bureaucrats, an independent evaluation has found.  Improved government accountability and services resulted....</p>
											<h6 class="tabs__title">Behaviour change</h6>
											<p>This project uses SABC interventions to engage Sheohar communities with respect to embracing healthy behaviours around water, sanitation, and hygiene — behaviours such as handwashing with soap at key moments, using household latrines, and the safe storage and handling of water.</p>
											<h6 class="tabs__title">Capital</h6>
											<p>In a region where the majority of the population consists of subsistence farmers, access to capital and the development of markets systems is crucial. In response to this, the Sheohar 2 project’s C component focuses specifically on people’s livelihoods, access to credit, and the provision of WASH-related products and services.</p>
										</div>
										<div class="horizontal-tabs__item" id="horizontal-tabs__item-2">
											<div class="row offset-30">
												<div class="col-md-6 col-xl-4">
													<!-- item start-->
													<div class="donor-item">
														<div class="row align-items-center">
															<div class="col-lg-7">
																<div class="donor-item__info">
																	<div class="donor-item__img"><img class="img--bg" src="img/face_1.jpg" alt="face"/></div>
																	<div class="donor-item__description">
																		<div class="donor-item__name">Chris Patt</div>
																		<div class="donor-item__date">23 Jan'19</div>
																	</div>
																</div>
															</div>
															<div class="col-lg-5">
																<h5 class="donor-item__value">$ 200.00</h5>
															</div>
														</div>
													</div>
													<!-- item end-->
												</div>
												<div class="col-md-6 col-xl-4">
													<!-- item start-->
													<div class="donor-item">
														<div class="row align-items-center">
															<div class="col-lg-7">
																<div class="donor-item__info">
																	<div class="donor-item__img"><img class="img--bg" src="img/face_2.jpg" alt="face"/></div>
																	<div class="donor-item__description">
																		<div class="donor-item__name">Ched Bonq</div>
																		<div class="donor-item__date">23 Jan'19</div>
																	</div>
																</div>
															</div>
															<div class="col-lg-5">
																<h5 class="donor-item__value">$ 500.00</h5>
															</div>
														</div>
													</div>
													<!-- item end-->
												</div>
												<div class="col-md-6 col-xl-4">
													<!-- item start-->
													<div class="donor-item">
														<div class="row align-items-center">
															<div class="col-lg-7">
																<div class="donor-item__info">
																	<div class="donor-item__img"><img class="img--bg" src="img/face_3.jpg" alt="face"/></div>
																	<div class="donor-item__description">
																		<div class="donor-item__name">Lisa Tactics</div>
																		<div class="donor-item__date">23 Jan'19</div>
																	</div>
																</div>
															</div>
															<div class="col-lg-5">
																<h5 class="donor-item__value">$ 300.00</h5>
															</div>
														</div>
													</div>
													<!-- item end-->
												</div>
												<div class="col-md-6 col-xl-4">
													<!-- item start-->
													<div class="donor-item">
														<div class="row align-items-center">
															<div class="col-lg-7">
																<div class="donor-item__info">
																	<div class="donor-item__img"><img class="img--bg" src="img/face_4.jpg" alt="face"/></div>
																	<div class="donor-item__description">
																		<div class="donor-item__name">Mike Bloom</div>
																		<div class="donor-item__date">23 Jan'19</div>
																	</div>
																</div>
															</div>
															<div class="col-lg-5">
																<h5 class="donor-item__value">$ 1000.00</h5>
															</div>
														</div>
													</div>
													<!-- item end-->
												</div>
												<div class="col-md-6 col-xl-4">
													<!-- item start-->
													<div class="donor-item">
														<div class="row align-items-center">
															<div class="col-lg-7">
																<div class="donor-item__info">
																	<div class="donor-item__img"><img class="img--bg" src="img/face_5.jpg" alt="face"/></div>
																	<div class="donor-item__description">
																		<div class="donor-item__name">Taya Marsh</div>
																		<div class="donor-item__date">23 Jan'19</div>
																	</div>
																</div>
															</div>
															<div class="col-lg-5">
																<h5 class="donor-item__value">$ 100.00</h5>
															</div>
														</div>
													</div>
													<!-- item end-->
												</div>
												<div class="col-md-6 col-xl-4">
													<!-- item start-->
													<div class="donor-item">
														<div class="row align-items-center">
															<div class="col-lg-7">
																<div class="donor-item__info">
																	<div class="donor-item__img"><img class="img--bg" src="img/face_6.jpg" alt="face"/></div>
																	<div class="donor-item__description">
																		<div class="donor-item__name">Ion Malanik</div>
																		<div class="donor-item__date">23 Jan'19</div>
																	</div>
																</div>
															</div>
															<div class="col-lg-5">
																<h5 class="donor-item__value">$ 400.00</h5>
															</div>
														</div>
													</div>
													<!-- item end-->
												</div>
											</div>
										</div>
										<div class="horizontal-tabs__item" id="horizontal-tabs__item-3">
											<div class="video-frame"><img class="img--bg" src="img/video_frame-2.jpg" alt="frame"/><a class="video-trigger video-frame__trigger" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><span class="video-frame__icon"><i class="fa fa-play" aria-hidden="true"></i></span><span class="video-frame__text">Watch our video</span></a></div>
										</div>
										<div class="horizontal-tabs__item" id="horizontal-tabs__item-4">
											<div class="gallery-simple">
												<div class="row offset-30">
													<div class="col-12 col-sm-6 col-lg-4 col-xl-3"><a class="gallery-simple__item" href="img/ig_1.jpg" data-fancybox="simple-gallery"><img class="img--bg" src="img/ig_1.jpg" alt="img"/></a></div>
													<div class="col-12 col-sm-6 col-lg-4 col-xl-3"><a class="gallery-simple__item" href="img/ig_2.jpg" data-fancybox="simple-gallery"><img class="img--bg" src="img/ig_2.jpg" alt="img"/></a></div>
													<div class="col-12 col-sm-6 col-lg-4 col-xl-3"><a class="gallery-simple__item" href="img/ig_3.jpg" data-fancybox="simple-gallery"><img class="img--bg" src="img/ig_3.jpg" alt="img"/></a></div>
													<div class="col-12 col-sm-6 col-lg-4 col-xl-3"><a class="gallery-simple__item" href="img/ig_4.jpg" data-fancybox="simple-gallery"><img class="img--bg" src="img/ig_4.jpg" alt="img"/></a></div>
													<div class="col-12 col-sm-6 col-lg-4 col-xl-3"><a class="gallery-simple__item" href="img/ig_5.jpg" data-fancybox="simple-gallery"><img class="img--bg" src="img/ig_5.jpg" alt="img"/></a></div>
													<div class="col-12 col-sm-6 col-lg-4 col-xl-3"><a class="gallery-simple__item" href="img/ig_6.jpg" data-fancybox="simple-gallery"><img class="img--bg" src="img/ig_6.jpg" alt="img"/></a></div>
													<div class="col-12 col-sm-6 col-lg-4 col-xl-3"><a class="gallery-simple__item" href="img/ig_7.jpg" data-fancybox="simple-gallery"><img class="img--bg" src="img/ig_7.jpg" alt="img"/></a></div>
													<div class="col-12 col-sm-6 col-lg-4 col-xl-3"><a class="gallery-simple__item" href="img/ig_8.jpg" data-fancybox="simple-gallery"><img class="img--bg" src="img/ig_8.jpg" alt="img"/></a></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- cause details tabs end-->
							</div>
						</div>
					</div>
				</section>
				<!-- causes start-->
				<section class="section causes causes--style-2"><img class="causes__bg" src="img/causes_img-2.png" alt="img"/>
					<div class="container">
						<div class="row align-items-end margin-bottom">
							<div class="col-md-6 col-xl-5">
								<div class="heading heading--primary no-margin-bottom"><span class="heading__pre-title">What we Do</span>
									<h2 class="heading__title no-margin-bottom"><span>Helpo</span> <span>Causes</span></h2>
								</div>
							</div>
							<div class="col-md-6 col-xl-6 offset-xl-1 d-flex justify-content-md-end">
								<!-- slider nav start-->
								<div class="slider__nav causes-slider__nav">
									<div class="slider__arrows">
										<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
										</div>
										<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
										</div>
									</div>
								</div>
								<!-- slider nav end-->
							</div>
						</div>
					</div>
					<div class="causes-holder offset-margin">
						<div class="causes-holder__wrapper">
							<div class="causes-slider offset-margin">
								<div class="causes-slider__item">
									<div class="causes-item causes-item--primary">
										<div class="causes-item__body">
											<div class="causes-item__top">
												<h6 class="causes-item__title"> <a href="cause-details.html">Water Delivery in Africa</a></h6>
												<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>
											</div>
											<div class="causes-item__img">
												<div class="causes-item__badge" style="background-color: #49C2DF">Water Delivery</div><img class="img--bg" src="img/causes_1.jpg" alt="img"/>
											</div>
											<div class="causes-item__lower">
												<div class="progress-bar">
													<div class="progress-bar__inner" style="width: 78%;">
														<div class="progress-bar__value">78%</div>
													</div>
												</div>
												<div class="causes-item__details-holder">
													<div class="causes-item__details-item"><span>Goal: </span><span>25 000$</span></div>
													<div class="causes-item__details-item text-right"><span>Pledged: </span><span>20 350$</span></div>
												</div>
											</div>
										</div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
									</div>
								</div>
								<div class="causes-slider__item">
									<div class="causes-item causes-item--primary">
										<div class="causes-item__body">
											<div class="causes-item__top">
												<h6 class="causes-item__title"> <a href="cause-details.html">Health in other Countries</a></h6>
												<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>
											</div>
											<div class="causes-item__img">
												<div class="causes-item__badge" style="background-color: #F36F8F">Medicine</div><img class="img--bg" src="img/causes_2.jpg" alt="img"/>
											</div>
											<div class="causes-item__lower">
												<div class="progress-bar">
													<div class="progress-bar__inner" style="width: 23%;">
														<div class="progress-bar__value">23%</div>
													</div>
												</div>
												<div class="causes-item__details-holder">
													<div class="causes-item__details-item"><span>Goal: </span><span>14 000$</span></div>
													<div class="causes-item__details-item text-right"><span>Pledged: </span><span>6 098$</span></div>
												</div>
											</div>
										</div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
									</div>
								</div>
								<div class="causes-slider__item">
									<div class="causes-item causes-item--primary">
										<div class="causes-item__body">
											<div class="causes-item__top">
												<h6 class="causes-item__title"> <a href="cause-details.html">We Build and Create</a></h6>
												<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>
											</div>
											<div class="causes-item__img">
												<div class="causes-item__badge" style="background-color: #2EC774">Education</div><img class="img--bg" src="img/causes_3.jpg" alt="img"/>
											</div>
											<div class="causes-item__lower">
												<div class="progress-bar">
													<div class="progress-bar__inner" style="width: 51%;">
														<div class="progress-bar__value">51%</div>
													</div>
												</div>
												<div class="causes-item__details-holder">
													<div class="causes-item__details-item"><span>Goal: </span><span>150 000$</span></div>
													<div class="causes-item__details-item text-right"><span>Pledged: </span><span>76 500$</span></div>
												</div>
											</div>
										</div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
									</div>
								</div>
								<div class="causes-slider__item">
									<div class="causes-item causes-item--primary">
										<div class="causes-item__body">
											<div class="causes-item__top">
												<h6 class="causes-item__title"> <a href="cause-details.html">Clean Water</a></h6>
												<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>
											</div>
											<div class="causes-item__img">
												<div class="causes-item__badge" style="background-color: #F8AC3A">Food</div><img class="img--bg" src="img/causes_4.jpg" alt="img"/>
											</div>
											<div class="causes-item__lower">
												<div class="progress-bar">
													<div class="progress-bar__inner" style="width: 50%;">
														<div class="progress-bar__value">50%</div>
													</div>
												</div>
												<div class="causes-item__details-holder">
													<div class="causes-item__details-item"><span>Goal: </span><span>50 000$</span></div>
													<div class="causes-item__details-item text-right"><span>Pledged: </span><span>25 000$</span></div>
												</div>
											</div>
										</div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- causes end-->
			</main>
<?php
include('include/footer.php');
?>