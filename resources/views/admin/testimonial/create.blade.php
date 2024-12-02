


@extends('admin.layouts.layout')
@section('header')
    @include('admin.layouts.parts.header')
@endsection
@section('navigation')
    @include('admin.layouts.parts.sidebar')
@endsection
@section('content')
    <div class="container">
        @include('components.messages')
        <form action="{{route('testimonials.store')}}" method="post">
            @csrf

            <div class="card-body">

                <div class="form-group">
                    <label>Title</label>
                    <input name="title" type="text" class="form-control" placeholder="Enter designation">
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea name="cont" class="form-control" rows="5"
                              placeholder="Enter Description"></textarea>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>

    </div>
@endsection
@section('footer')
    @include('admin.layouts.parts.footer')
@endsection

