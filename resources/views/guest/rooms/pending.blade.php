@extends('layouts.main')
@section('content')
@section('title', 'Manage room')
<h3 class="text-center mb-3 fw-bold">Manage pending rooms</h3>
<table class="table table-hover w-100" id="roomTable">
    <thead class="table-dark">
        <tr>
            <th scope="col">No.</th>
            <th scope="col">{!! __('Floor') !!}</th>
            <th scope="col">{!! __('Room number') !!}</th>
            <th scope="col">{!! __('Price') !!}</th>
            <th scope="col">Room image</th>
            <th scope="col">State</th>
            @auth
            <th scope="col">Rental name</th>
            <th scope="col">Phone number</th>
            @endauth
            <th scope="col">View</th>
            @auth
            <th scope="col">Confirm</th>
            @endauth
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pendings as $pending)
        <tr>
            <th scope="row">{{ $pending->id }}</th>
            <td>{{ $pending->roomFloor }}</td>
            <td>{{ $pending->roomNo }}</td>
            <td>{{ $pending->roomPrice }}</td>
            <td class="text-center">
                <img class="lozad" src="/assets/img/img.svg" data-src="/assets/img/rooms/{{ $pending->roomImg }}"
                    width="auto" height="128px" alt="Room {{ $pending->roomNo }} image">
            </td>
            <td class="text-primary">Pending</td>
            @auth
            <td>{{ $pending->rentalName}}</td>
            <td>{{ $pending->phoneNumber }}</td>
            @endauth
            <td><a href="/rooms/view/{{ $pending->id }}" class="btn btn-success"><i
                        class="fa-solid fa-eye me-2"></i>View</a></td>
            @auth
            <td>
                <form method="POST" action="/pending/confirm/{{ $pending->id }}">
                    @csrf
                    <input name="_method" type="hidden" value="GET">
                    <a type="submit" class="btn btn-primary room_confirm" data-toggle="tooltip"><i
                            class="fa-solid fa-check me-2"></i>Confirm</a>
                </form>
            </td>
            @endauth
            <td>
                <form method="POST" action="/pending/delete/{{ $pending->id }}">
                    @csrf
                    <input name="_method" type="hidden" value="GET">
                    <a type="submit" class="btn btn-danger show_delete" data-toggle="tooltip"><i
                            class="fa-solid fa-trash me-2"></i>Delete</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script script type="text/javascript">
    $('.room_confirm').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure ?',
            text: 'Are you sure to confirm this room ?',
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
<script>
    $(function() {
        $('#roomTable').DataTable({
            dom: "<'row'<'col-sm-12'B>>" +
                "<'row my-2'<'col-sm-12 col-md-6 mb-2'l><'col-sm-12 col-md-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row my-2'<'col-sm-12 col-md-6'i><'col-sm-12 col-md-6'p>>",
            "responsive": true,
            "lengthChange": true,
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });
</script>
@endsection
