@extends('layouts.main')
@section('content')
@section('title', 'Edit user')
<h3 class="text-center fw-bold">Edit user</h3>
<form method="POST" action="/user/update/{{ $user->id }}" enctype="multipart/form-data">
    @csrf
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Fullname" name="fullname"
            value="{{ $user->fullname }}">
        <label for="floatingInput">Fullname</label>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Avatar</label>
        <input class="form-control" type="file" id="formFile" name="avatar" accept=".png, .jpg, .jpeg, .webp">
    </div>
    <button type="submit" class="btn btn-success d-block mx-auto edit_confirm" data-toggle="tooltip"
        title='Save'>Save</button>
</form>
<script script type="text/javascript">
    $('.edit_confirm').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure ?',
            text: 'Are you sure to update this user ?',
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
