@extends('front.layouts.layout')
@section('nav-bar-content')
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{__('front.content.team.main_title')}}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('front.content.team.home')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route('about')}}">{{__('front.content.team.about')}}</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{__('front.content.team.team')}}</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection
@section('content')
    <!-- Team Start -->
    <div class="container-xxl pt-5 pb-3">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">{{__('front.content.team.title_1')}}</h5>
                <h1 class="mb-5">{{__('front.content.team.title_2')}}</h1>
            </div>
            <div class="row g-4">
                @php $time = 0.1 @endphp
                @foreach($chiefs as $chief)
                    @include('components.card-team')
                    @php $time +=0.2 @endphp
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection
