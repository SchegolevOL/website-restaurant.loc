@extends('front.layouts.layout')
@section('nav-bar-content')
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{__('front.content.register.main_title')}}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('front.content.register.home')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route('login')}}">{{__('front.content.register.login')}}</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{__('front.content.register.register')}}</li>
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
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">{{__('front.content.register.title_1')}}</h5>
                <h1 class="mb-5">{{__('front.content.register.title_2')}}</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">

                    @include('components.contact')
                    @include('components.messages')
                </div>

                <div class="col-12">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <form action="{{route('register.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">

                                <div class="col-12">
                                    <div class="form-floating">
                                        <input name="name" type="text" class="form-control" id="subject"
                                               placeholder="{{__('front.content.register.name')}}">
                                        <label for="subject">{{__('front.content.register.name')}}</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input name="email" type="email" class="form-control" id="subject"
                                               placeholder="{{__('front.content.register.email')}}">
                                        <label for="subject">{{__('front.content.register.email')}}</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input name="password" type="password" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">{{__('front.content.register.password')}}</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input name="password_confirmation" type="password" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">{{__('front.content.register.password_confirmation')}}Password confirmation</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input name="image" type="file" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Image</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">{{__('front.content.register.button')}}</button>
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
