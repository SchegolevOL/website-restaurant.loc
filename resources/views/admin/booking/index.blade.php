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

                <th>Name</th>
                <th>Number of persons</th>
                <th>Special request</th>
                <th>Button</th>
            </tr>
            </thead>
            <tbody>
            @php $i =1; @endphp

            @foreach($bookings as $booking)
                <tr class="@if($booking->status == 0) bg-gradient-info @endif">
                    <td>{{$i++}}</td>
                    <td>{{$booking->date_time}}</td>


                    <td>{{$booking->name}}</td>
                    <td>{{$booking->number_of_persons}}</td>
                    <td>{{$booking->special_request}}</td>

                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm float-left  " href="{{route('bookings.show',['booking'=>$booking->slug])}}">
                            <i class="fas fa-folder">
                            </i>
                            Confirmation
                        </a>
                        <a class="btn btn-info btn-sm float-left" href="{{route('bookings.edit',['booking'=>$booking->slug])}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <form
                            action="{{ route('bookings.destroy', ['booking' => $booking->slug]) }}"
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
        <div class="col-md-12">{{$bookings->links()}}</div>
    </div>
@endsection
@section('footer')
    @include('admin.layouts.parts.footer')
@endsection
@section('scripts')

@endsection
