@extends('layouts.main')
@section('content')
@section('title', 'View rooms')
@auth
<a href="/rooms/all" type="button" class="btn btn-dark mb-3"><i class="fa-solid fa-chevron-left me-2"></i>Back</a>
@endauth
@guest
<a href="/rooms/available" type="button" class="btn btn-dark mb-3"><i class="fa-solid fa-chevron-left me-2"></i>Back</a>
@endguest
<div class="row row-cols-1 row-cols-lg-2 g-3">
    <div class="col" id="lightGallery">
        <img src="/assets/img/rooms/{{ $room->roomImg }}" class="card-img-top img-fluid" id="img-gallery"
            alt="Room image" title="Click to view image">
    </div>
    <div class="col text-center text-lg-start">
        <h5>{!! __('Room number') !!}: <b>{{ $room->roomNo }}</b></h5>
        <div>{!! __('Floor') !!}: <b>{{ $room->roomFloor }}</b></div>
        <div class="mb-3">{!! __('Price') !!}: <b>
                <?php echo number_format("$room->roomPrice", 0); ?>
            </b> VND</div>
        <div class="h5 fw-bold">{!! __('Description') !!}:</div>
        <div class="mb-3">{!! $room->roomDescription !!}</div>
        @if ($room->state == 'available')
        <form method="POST" action="/rooms/modify/rent/{{ $room->id }}">
            @csrf
            <input name="_method" type="hidden" value="GET">
            <a type="submit" class="btn btn-success show_confirm" data-toggle="tooltip">{!! __('Rent') !!}</a>
        </form>
        @elseif ($room->state == 'rented')
        <button class="btn btn-danger disabled">{!! __('Rented') !!}</button>
        <div class="mt-3">
            @if ($room->state == 'rented')
            {!! __('Rented at') !!}:
            <b>{{ $room->updated_at }}</b>
            @endif
        </div>
        @endif
    </div>
</div>
<script script type="text/javascript">
    $('.show_confirm').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure ?',
            text: 'Are you sure to rent this room ?',
            icon: 'question',
            showCancelButton: true,
            scrollbarPadding: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
</script>
<script>
    lightGallery(document.getElementById('lightGallery'), {
        plugins: [lgZoom, lgRotate, lgFullscreen],
        selector: '#img-gallery',
        hideScrollbar: true,
        getCaptionFromTitleOrAlt:false,
    });
</script>
@endsection
