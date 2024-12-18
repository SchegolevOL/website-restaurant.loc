@extends('admin.layouts.layout')
@section('header')
    @include('admin.layouts.parts.header')
@endsection
@section('navigation')
    @include('admin.layouts.parts.sidebar')
@endsection
@section('content')
    <div class="container mt-5">

        <div class="container">
            @include('components.messages')
            <form action="{{route('bookings.update', ['booking'=>$booking->slug])}}" method="post">
                @csrf
                @method('put')
                <div class="card-body">

                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control" placeholder="Enter name" value="{{$booking->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter email" value="{{$booking->email}}">
                    </div>
                    <div class="form-group">
                        <label>Special request</label>
                        <textarea name="special_request" class="form-control" rows="5"
                                  placeholder="Enter Special request">{{$booking->special_request}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Number of persons</label>
                        <input name="number_of_persons" type="text" class="form-control"
                               placeholder="Enter number of persons" value="{{$booking->number_of_persons}}">
                    </div>

                    <div class="form-group">
                        <label>Date and time:</label>
                        <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                            <input value="{{$booking->getDateTime($booking->date_time)}}" name="date_time" type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime">
                            <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>




        </div>

        {{--For search--}}
        <div class="row">
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" id="searchInput" class="form-control" placeholder="Search booking">
                    <div class="input-group-append">
                        <button id="searchButton" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="btn-group mb-3" role="group" aria-label="Calendar Actions">
                    <button id="exportButton" class="btn btn-success">Export Calendar</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div id="calendar" style="width: 100%"></div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('admin.layouts.parts.footer')
@endsection
@section('scripts')

    @include('admin.layouts.parts.date-scripts')
    @include('admin.layouts.parts.calendar-script')
@endsection

