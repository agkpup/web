@extends('information.layouts')
@section('information')
Contact Area
==============================-->
    <div class="space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-area pe-xl-4 mb-30">
                        <h2 class="sec-title">Revitalize Your Wardrobe Revive Your Day.</h2>
                        <p class="">Our standard turnaround time typically insert estimated time here However, we also offer
                            express
                            services for faster turnaround times if needed.</p>
                    </div>
                    <div class="row gy-4 justify-content-center">
                        <div class="col-md-6">
                            <div class="contact-info text-center">
                                <div class="contact-info_icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="contact-info_title">Mobile Number</h6>
                                    <span class="contact-info_text">
                                        <a href="tel:+9190562 23996">+91 90562 23996</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info text-center">
                                <div class="contact-info_icon">
                                    <i class="fa-light fa-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="contact-info_title">Email Address</h6>
                                    <span class="contact-info_text">
                                        <a href="mailto:connect@catchytat.com">connect@catchytat.com</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="mt-35">Follow The Social Media:</h5>
                    <div class="th-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.behance.net/"><i class="fa-brands fa-behance"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">

                    <form action="{{ route('contact.store') }}" method="POST" class="contact-form input-smoke ajax-contact">
                        @csrf
                        <h2 class="sec-title mb-30">Get In Touch</h2>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="subject" id="subject" class="form-select nice-select">
                                    <option value="" disabled selected hidden>Select Service</option>
                                    <option value="Dry Cleaning">Dry Cleaning</option>
                                    <option value="Wash & Fold">Wash & Fold</option>
                                    <option value="Ironing/Pressing">Ironing/Pressing</option>
                                    <option value="Garments Transformed">Garments Transformed</option>
                                    <option value="Household Textile Care">Household Textile Care</option>
                                    <option value="Household Textile Care">Household Textile Care</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                <i class="fal fa-pencil"></i>
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn btn-fw th-radius">Send Message</button>
                            </div>
                        </div>
                        <div class="row">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--==============================
Map Area
==============================-->
    <div class="">
        <div class="contact-map style2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
@endsection
