

<div class="testimonial-item bg-transparent border rounded p-4 " style="height: 250px">
    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
    <p style="height: 100px">{{$testimonial->content}}</p>
    <div class="d-flex align-items-center">
        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{\App\Helpers\Functions::getUserById($testimonial, $users)->getImage()}}" style="width: 50px; height: 50px;">
        <div class="ps-3">
            <h5 class="mb-1">{{\App\Helpers\Functions::getUserById($testimonial, $users)->name}}</h5>
            <small>{{$testimonial->title}}</small>
        </div>
    </div>
</div>
