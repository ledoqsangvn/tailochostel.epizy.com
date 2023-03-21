@extends('layouts.main')
@section('content')
@section('title', __('Home'))
@if (session('notify') == 'Logout success')
    <script>
        Swal.fire({
            title: 'Logout success',
            icon: 'success',
            timer: 2000,
            scrollbarPadding: false,
            showConfirmButton: false,
            allowOutsideClick: false,
        })
    </script>
@endif
@auth
    <div class="d-flex justify-content-center mb-3">
        <a href="/rooms/modify/add" class="btn btn-success"><i class="fa-solid fa-plus me-2"></i>Add</a>
    </div>
@endauth
<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
    <div class="col">
        <h3 class="mb-3 fw-bold">{!! __('Available rooms') !!} ({{ $countAvailable }})</span>
        </h3>
    </div>
    <div class="col">
        <a type="button" class="btn btn-success mb-3" href="/rooms/available">{!! __('View all available rooms') !!} <i
                class="fa-solid fa-chevron-right"></i></a>
    </div>
</div>
<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-4">
    @foreach ($rooms as $room)
        <div class="col d-flex align-items-stretch">
            <div class="card shadow" id="roomCard">
                <a href="/rooms/view/{{ $room->id }}" class="img-zoom">
                    <img src="/assets/img/img.svg" data-src="/assets/img/rooms/{{ $room->roomImg }}"
                        class="card-img-top lazy" width="auto" height="256px" alt="Room image">
                </a>
                <div class="card-body">
                    <a href="/rooms/view/{{ $room->id }}">
                        <h5 class="card-title">{!! __('Room number') !!}: <b>{{ $room->roomNo }}</b></h5>
                    </a>
                    <div class="card-text">{!! __('Floor') !!}: <b>{{ $room->roomFloor }}</b></div>
                    <div class="card-text mb-3">{!! __('Price') !!}: <b><?php echo number_format("$room->roomPrice", 0); ?></b> VND</div>
                    <div class="d-flex justify-content-center">
                        <div class="btn-group" role="group" aria-label="Modify button">
                            <form method="POST" action="/rooms/modify/rent/{{ $room->id }}">
                                @csrf
                                <input name="_method" type="hidden" value="GET">
                                <a type="submit" class="btn btn-success show_confirm"
                                    data-toggle="tooltip">{!! __('Rent') !!}</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
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
<script script type="text/javascript">
    $('.show_delete').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure ?',
            text: 'Are you sure to delete this room ?',
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
@endsection
