@extends('admin.layouts.layout')
@section('header')
    @include('admin.layouts.parts.header')
@endsection
@section('navigation')
    @include('admin.layouts.parts.sidebar')
@endsection
@section('content')
    <div class="card-body table-responsive p-0">
        <table class="table table-head-fixed text-nowrap">
            <thead>
            <tr>
                <th>#</th>
                <th>Date time</th>

                <th>Title</th>
                <th>Content</th>
                <th>Button</th>
            </tr>
            </thead>
            <tbody>
            @php $i =1; @endphp

            @foreach($testimonials as $testimonial)
                <tr class="@if($testimonial->status == 0) bg-gradient-info @endif">
                    <td>{{$i++}}</td>
                    <td>{{$testimonial->created_at}}</td>


                    <td>{{$testimonial->title}}</td>
                    <td>{{$testimonial->content}}</td>


                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm float-left  " href="{{route('testimonials.show',['testimonial'=>$testimonial->slug])}}">
                            <i class="fas fa-folder">
                            </i>
                            Confirmation
                        </a>

                        <form
                            action="{{ route('testimonials.destroy', ['testimonial' => $testimonial->slug]) }}"
                            method="post" class="float-left">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Confirm the deletion')">
                                <i
                                    class="fas fa-trash-alt"></i>Delete
                            </button>
                        </form>


                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <div class="col-md-12">{{$testimonials->links()}}</div>
    </div>
@endsection
@section('footer')
    @include('admin.layouts.parts.footer')
@endsection
@section('scripts')

@endsection

