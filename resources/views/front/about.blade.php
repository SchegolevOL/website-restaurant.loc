@extends('front.layouts.layout')
@section('nav-bar-content')
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{__('front.content.about.main_title')}}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">{{__('front.content.about.home')}}</a></li>
                    <li class="breadcrumb-item"><a href="#">{{__('front.content.about.menu')}}</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">{{__('front.content.about.about')}}</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection
@section('content')

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                 src="/public/Front/img/about-1.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                 src="/public/Front/img/about-2.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                 src="/public/Front/img/about-3.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                 src="/public/Front/img/about-4.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">{{__('front.content.about.main_title')}}</h5>
                    <h1 class="mb-4">{{__('front.content.about.title_1')}}<i class="fa fa-utensils text-primary me-2"></i>{{__('front.content.about.title_2')}}</h1>
                    <p class="mb-4">{{__('front.content.about.description_1')}}</p>
                    <p class="mb-4">{{__('front.content.about.description_2')}}</p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                <div class="ps-4">
                                    <p class="mb-0">{{__('front.content.about.years')}}</p>
                                    <h6 class="text-uppercase mb-0">{{__('front.content.about.experience')}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                                <div class="ps-4">
                                    <p class="mb-0">{{__('front.content.about.popular')}}</p>
                                    <h6 class="text-uppercase mb-0">{{__('front.content.about.master_chefs')}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">{{__('front.content.about.button')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl pt-5 pb-3">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">{{__('front.content.about.team_members')}}</h5>
                <h1 class="mb-5">{{__('front.content.about.our_master_chef')}}</h1>
            </div>
            <div class="row g-4">
                @php $time = 0.3 @endphp
                @foreach($chiefs as $chief)
                    @include('components.card-team')
                    @php $time +=0.2 @endphp
                @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection
