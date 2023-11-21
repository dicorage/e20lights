@extends('layouts.main')
@section('main')
<div class="page-banner contact-banner">
    <div class="banner-content">
        <span class="subtitle">For all your number decor needs, reach out to Party Numbers Decor. Let us make your event shine!</span>
        <h2 class="title">LET’S TALK!</h2>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6">

            <div class="kt-contact-form margin-top-60">
                <div id="message-box-conact"></div>
                <h3 class="title">Contact us today for inquiries, reservations, and to discuss your event requirements.</h3>
                <p>
                    <input id="name" type="text" placeholder="Your name">
                </p>
                <p>
                    <input id="email" type="text" placeholder="Your Email">
                </p>
                <p>
                    <textarea id="content" placeholder="Your message!"></textarea>
                </p>
                <button id='btn-send-contact' class="button">SEND MESSAGE</button>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="margin-top-60">
                <img src="/assets/images/b/46.jpg" alt="">
                <h6 class="margin-top-20">GIVE US A CALL</h6>
                <p class="roboto">Want to speak with a sales representative? Drop us a line and we’d be happy to answer any questions!</p>
                <p style="font-size: 18px; color: #222; font-weight: bold;"><i class="fa fa-phone"></i> (+800) 6868 2268</p>
            </div>
        </div>
    </div>
</div>
    <div class="margin-top-60 margin-bottom-30">
        <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <div class="element-icon style2">
                            <div class="icon"><i class="flaticon flaticon-origami28"></i></div>
                            <div class="content">
                                <h4 class="title">Quality Assurance</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="element-icon style2">
                            <div class="icon"><i class="flaticon flaticon-curvearrows9"></i></div>
                            <div class="content">
                                <h4 class="title">Affordable Pricing</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="element-icon style2">
                            <div class="icon"><i class="flaticon flaticon-headphones54"></i></div>
                            <div class="content">
                                <h4 class="title">Professional Service</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="element-icon style2">
                            <div class="icon"><i class="flaticon flaticon-headphones54"></i></div>
                            <div class="content">
                                <h4 class="title">Customer Satisfaction</h4>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection