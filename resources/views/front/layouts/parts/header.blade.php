
<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{route('home')}}"
                   class="nav-item nav-link @php if($title=='home')echo'active' @endphp">{{__('front.header.home')}}</a>
                <a href="{{route('about')}}"
                   class="nav-item nav-link @php if($title=='about')echo'active' @endphp">{{__('front.header.about')}}</a>
                <a href="{{route('service')}}"
                   class="nav-item nav-link @php if($title=='service')echo'active' @endphp">{{__('front.header.services')}}</a>
                <a href="{{route('menu')}}"
                   class="nav-item nav-link @php if($title=='menu')echo'active' @endphp">{{__('front.header.menu')}}</a>
                <div class="nav-item dropdown">
                    <a href="#"
                       class="nav-link dropdown-toggle @php if($title=='team'||$title=='booking'||$title=='testimonial')echo'active' @endphp"
                       data-bs-toggle="dropdown">{{__('front.header.pages')}}</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('booking')}}" class="dropdown-item">{{__('front.header.booking')}}</a>
                        <a href="{{route('team')}}" class="dropdown-item">{{__('front.header.team')}}</a>
                        <a href="{{route('testimonial')}}" class="dropdown-item">{{__('front.header.testimonial')}}</a>
                    </div>
                </div>
                <a href="{{route('contact')}}"
                   class="nav-item nav-link @php if($title=='contact')echo'active' @endphp">{{__('front.header.contact')}}</a>

                @guest()

                    <div class="nav-item dropdown">
                        <a href="#"
                           class="nav-link dropdown-toggle "
                           data-bs-toggle="dropdown">{{__('front.header.log')}}</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{route('register.create')}}" class="dropdown-item">{{__('front.header.register')}}</a>
                            <a href="{{route('register.loginForm')}}" class="dropdown-item">{{__('front.header.login')}}</a>

                        </div>
                    </div>


                @endguest
                @auth()
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle"
                           data-bs-toggle="dropdown">{{auth()->user()->name}}</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{route('profile')}}" class="dropdown-item">{{__('front.header.profile')}}</a>
                            @if(auth()->user()->is_admin)
                                <a href="{{route('chiefs.index')}}"
                                   class="dropdown-item">{{__('front.header.panel')}}</a>
                            @endif
                            <a href="{{route('register.logout')}}"
                               class="dropdown-item">{{__('front.header.logout')}}</a>

                        </div>
                    </div>

                @endauth
            </div>




            <div class="nav-item dropdown">
                <a href="#"
                   class="nav-link dropdown-toggle "
                   data-bs-toggle="dropdown">{{__(app()->getLocale())}}</a>
                <div class="dropdown-menu m-0">
                    @foreach(App\Helpers\Langs::LOCALE as $locale)
                    <a href="{{route('setLocale', $locale)}}" class="dropdown-item">{{$locale}}</a>
                    @endforeach
                </div>
            </div>

            <a href="" class="btn btn-primary py-2 px-4">{{__('front.header.button')}}</a>


        </div>


    </nav>
    @yield('nav-bar-content')

</div>
<!-- Navbar & Hero End -->
