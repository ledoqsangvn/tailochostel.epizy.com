@extends('layouts.main')
@section('content')
@section('title', 'Room')
<h3 class="mb-2 fw-bold">{{ $heading }} ({{ $count }})</h3>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="btn-group mb-3" role="group" aria-label="Room state" id="roomState">
            <a type="button" class="btn btn-warning" href="/rooms/all">All rooms ({{ $countAll }})</a>
            <a type="button" class="btn btn-danger" href="/rooms/rented">Rented rooms ({{ $countRented }})</a>
            <a type="button" class="btn btn-success" href="/rooms/available">Available rooms
                ({{ $countAvailable }})</a>
        </div>
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
                        <h5 class="card-title">Room number: <b>{{ $room->roomNo }}</b></h5>
                    </a>
                    <div class="card-text">Floor: <b>{{ $room->roomFloor }}</b></div>
                    <div class="card-text">Price: <b>
                            <?php echo number_format("$room->roomPrice", 0); ?>
                        </b> VND</div>
                    <div class="card-text mb-3">
                        @if ($room->state == 'rented')
                            Rented at:
                            <b>{{ $room->updated_at }}</b>
                        @endif
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="btn-group" role="group" aria-label="Modify button">
                            @if ($room->state == 'available')
                                <form method="POST" action="/rooms/modify/rent/{{ $room->id }}">
                                    @csrf
                                    <input name="_method" type="hidden" value="GET">
                                    <a type="submit" class="btn btn-success show_confirm" data-toggle="tooltip"
                                        title='Rent'>Rent</a>
                                </form>
                            @elseif ($room->state == 'rented')
                                <button class="btn btn-danger disabled">Rented</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="mt-3 d-flex justify-content-center">
    {{ $rooms->links() }}
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
@endsection
