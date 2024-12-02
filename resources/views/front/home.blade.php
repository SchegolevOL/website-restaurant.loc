@extends('front.layouts.layout')

@section('nav-bar-content')
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">{{__('front.content.home.title_1')}}<br>{{__('front.content.home.title_2')}}</h1>
                    <p class="text-white animated slideInLeft mb-4 pb-2">{{__('front.content.home.description')}}</p>
                    <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">{{__('front.content.home.button')}}</a>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="/public/Front/img/hero.png" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
