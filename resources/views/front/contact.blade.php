@extends('front.layouts.layout')
@section('nav-bar-content')
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{__('front.content.contact.main_title')}}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('front.content.contact.home')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route('about')}}">{{__('front.content.contact.about')}}</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{__('front.content.contact.contact')}}</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection
@section('content')

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">{{__('front.content.contact.title_1')}}</h5>
                <h1 class="mb-5">{{__('front.content.contact.title_2')}}</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    @include('components.contact')
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="{{__('front.content.contact.form.your_name')}}">
                                        <label for="name">{{__('front.content.contact.form.your_name')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="{{__('front.content.contact.form.your_email')}}">
                                        <label for="email">{{__('front.content.contact.form.your_email')}}</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="{{__('front.content.contact.form.subject')}}">
                                        <label for="subject">{{__('front.content.contact.form.subject')}}</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="{{__('front.content.contact.form.message')}}" id="message" style="height: 150px"></textarea>
                                        <label for="message">{{__('front.content.contact.form.message')}}</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">{{__('front.content.contact.form.button')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
