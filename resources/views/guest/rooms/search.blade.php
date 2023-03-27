@extends('layouts.main')
@section('content')
@section('title', __('Search'))
@if (is_null($search))
<div class="d-flex justify-content-center">
    <div class="d-inline-flex alert alert-danger text-center justify-content-center" role="alert">
        <span class="h4 mb-0"><i class="fa-solid fa-triangle-exclamation"></i> Please enter keyword to search !</span>
    </div>
</div>
@else
<h3 class="mb-3 text-center">({{ $count }}) result(s) matches keyword: <b>{{ $search }}</b></h3>
@if ($results->isNotEmpty())
<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-4">
    @foreach ($results as $result)
    <div class="col d-flex align-items-stretch">
        <div class="card" id="roomCard">
            <a href="/rooms/view/{{ $result->id }}" class="img-zoom">
                <img src="/assets/img/img.svg" data-src="/assets/img/rooms/{{ $result->roomImg }}"
                    class="card-img-top lozad" width="auto" height="256px" alt="Room image">
            </a>
            <div class="card-body">
                <a href="/rooms/view/{{ $result->id }}">
                    <h5 class="card-title">{!! __('Room number') !!}: <b>{{ $result->roomNo }}</b></h5>
                </a>
                <div class="card-text">{!! __('Floor') !!}: <b>{{ $result->roomFloor }}</b></div>
                <div class="card-text">{!! __('Price') !!}: <b>
                        <?php echo number_format("$result->roomPrice", 0); ?>
                    </b> VND</div>
                <div class="card-text mb-3">
                    @if ($result->state == 'rented')
                    {!! __('Rented at') !!}:
                    <b>{{ $result->updated_at }}</b>
                    @endif
                </div>
                <div class="d-flex justify-content-center">
                    <div class="btn-group" role="group" aria-label="Modify button">
                        @if ($result->state == 'available')
                        <a type="button" href="/rooms/modify/rent/{{$result->id}}" class="btn btn-success">{!!
                            __('Rent')
                            !!}</a>
                        @elseif ($result->state == 'rented')
                        <button class="btn btn-danger disabled">{!! __('Rented') !!}</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@else
<div class="h4 text-center">No result, please try again !</div>
@endif
@endif
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
