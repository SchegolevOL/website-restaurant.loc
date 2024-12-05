@extends('front.layouts.layout')
@section('nav-bar-content')
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{__('front.content.testimonial.main_title')}}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('front.content.testimonial.home')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route('about')}}">{{__('front.content.testimonial.about')}}</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{__('front.content.testimonial.testimonial')}}</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection
@section('content')

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">{{__('front.content.testimonial.title_1')}}</h5>
                <h1 class="mb-5">{{__('front.content.testimonial.title_2')}}</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @foreach($testimonials as $testimonial)
                    @include('components.card-message')
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
