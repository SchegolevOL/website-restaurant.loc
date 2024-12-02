@extends('front.layouts.layout')
@section('nav-bar-content')
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{__('front.content.services.main_title')}}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">{{__('front.content.services.home')}}</a></li>
                    <li class="breadcrumb-item"><a href="#">{{__('front.content.services.about')}}</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{__('front.content.services.services')}}</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection
@section('content')

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">{{__('front.content.services.title_1')}}</h5>
                <h1 class="mb-5">{{__('front.content.services.title_2')}}</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h5>{{__('front.content.services.service_1.title')}}</h5>
                            <p>{{__('front.content.services.service_1.description')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                            <h5>{{__('front.content.services.service_2.title')}}</h5>
                            <p>{{__('front.content.services.service_2.description')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                            <h5>{{__('front.content.services.service_3.title')}}</h5>
                            <p>{{__('front.content.services.service_3.description')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h5>{{__('front.content.services.service_4.title')}}</h5>
                            <p>{{__('front.content.services.service_4.description')}}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
