@extends('application.layouts.app')
@section('content')
		<!-- Header Section Start -->
		<header id="top-navbar" class="top-navbar"> 
			<div class="container">
				<div class="top-navbar_full">
					<div class="back-btn d-flex align-items-center">
						<a href="javascript: history.go(-1)"><img src="assets/images/forget-password-screen/back-btn.svg" alt="back-btn-img"> </a>
					</div>
					<div class="top-navbar-title d-flex align-items-center">
						<p>Rate This Product</p>
					</div>
				</div>
			</div>
			<div class="navbar-boder"></div>
		</header>
		<!-- Header Section End -->
		<!-- Product Rate Section Start -->
		<section id="product-rate-page">
			<div class="container">
				<div class="product-rate-top">
					<div class="product-rate-page-full mt-24">
						<h1 class="d-none">Product-Rate</h1>
						<h2 class="d-none">Prodcut Details</h2>
						<div class="review1-first">
							<img src="assets/images/review/review-1.png" alt="review-img">
						</div>
						<div class="review1-second">
							<div class="rev-txt1-sec">
								<p class="rev-txt1">Chairs</p>
							</div>
							<h3 class="rev-txt2">Wing Chair</h3>
							<h4 class="rev-txt3">$100</h4>
						</div>
					</div>
					<div class="review-border mt-24"></div>
				</div>
				<div class="product-rate-middle">
					<div class="product-rateing mt-24">
						<p class="rate-txt1">How would you rate this product</p>
						<div class="product-rate-sec mt-24">
							<div class="star-rating">
								<input id="star-5" type="radio" name="rating" value="star-5" >
								<label for="star-5" title="5 stars" >
									<i class="active fa fa-star"></i>
								</label>
								<input id="star-4" type="radio" name="rating" value="star-4">
								<label for="star-4" title="4 stars">
									<i class="active fa fa-star"></i>
								</label>
								<input id="star-3" type="radio" name="rating" value="star-3">
								<label for="star-3" title="3 stars">
									<i class="active fa fa-star"></i>
								</label>
								<input id="star-2" type="radio" name="rating" value="star-2">
								<label for="star-2" title="2 stars">
									<i class="active fa fa-star"></i>
								</label>
								<input id="star-1" type="radio" name="rating" value="star-1" checked>
								<label for="star-1" title="1 star">
									<i class="active fa fa-star"></i>
								</label>
							</div>
						</div>
						<h3 class="rate-txt2 mt-24">Good Enough!</h3>
						<p class="rate-txt3 mt-16">Do you want to add suggestions to sellers and buyers? Give advice to all of us!</p>
						<div class="product-rate-commentsec mt-24">
							<div class="product-comment">
								<form>
									<textarea rows="4"  placeholder="Write a comment..." class="product-textarea"></textarea >
								</form>
								<div class="comment-bottom-btn">
									<div class="input-group add-image-sec"> 
										<label for="image-label" class="add-image">Add Image</label>
										<input type="file" id="image-label" accept="image/*">
									</div>
									<div class="input-group add-video-sec"> 
										<label for="video-label" class="add-image">Add Video</label>
										<input type="file" id="video-label"  accept="video/mp4">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="product-submit mt-24">
					<a href="review.html">Submit</a>	
				</div>
			</div>
		</section>
		<!-- Product Rate Section End -->
@endsection