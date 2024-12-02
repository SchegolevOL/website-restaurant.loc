


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
        <form action="{{route('menus.store')}}" method="post" enctype="multipart/form-data" id="form1" runat="server">
            @csrf

            <div class="card-body">

                <div class="form-group">
                    <label>Title</label>
                    <input name="title" type="text" class="form-control" placeholder="Enter title">
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="5"
                              placeholder="Enter Description"></textarea>
                </div>

                <div class="form-group">
                    <label>Price </label>
                    <input name="price" type="text" class="form-control" placeholder="Enter price">
                </div>


                <!-- Select multiple-->
                <div class="form-group">
                    <label>Select Multiple</label>
                    <select name="types[]" multiple="" class="form-control">
                        @foreach($types as $type)
                            <option value="{{$type->id}}" data-select2-id="{{$type->id}}">{{$type->title}}</option>

                        @endforeach
                    </select>
                </div>
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">

                                <label for="exampleInputFile">Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="image" type="file" class="custom-file-input" id="imgInp">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col">
                            <img id="blah" src="/public/Front/img/add_photo-1024.webp" alt="your image"  class="img-thumbnail w-25">
                        </div>

                    </div>
                </div>



            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>

    </div>
@endsection
@section('footer')
    @include('admin.layouts.parts.footer')
@endsection
@section('scripts')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function() {
            readURL(this);
        });
    </script>


@endsection
