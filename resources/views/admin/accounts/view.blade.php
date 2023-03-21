@extends('layouts.main')
@section('content')
@section('title', 'View profile')
<div class="d-flex justify-content-center">
    <div class="card shadow">
        <div class="card-header">
            <h3 class="fw-bold text-center mb-3">View profile</h3>
        </div>
        <div class="card-body">
            <div class="text-center">
                <div id="lightGallery">
                    <img src="/assets/img/img.svg" data-src="/assets/img/avatar/{{ $user->avatar }}"
                        class="card-img-top mb-3 d-block mx-auto lazy" style="width:50%;height:auto;" alt="Avatar"
                        id="img-gallery">
                </div>
                <div class="card-text">Username: <b>{{ $user->username }}</b></div>
                <div class="card-text">Fullname: <b>{{ $user->fullname }}</b></div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="/user/edit/{{ $user->id }}" class="btn btn-warning mt-3"><i
                        class="fa-solid fa-user-pen me-2"></i>Edit profile</a>
            </div>
        </div>
    </div>
</div>
<script>
    lightGallery(document.getElementById('lightGallery'), {
        plugins: [lgZoom, lgRotate, lgFullscreen],
        selector: '#img-gallery',
        speed: 500,
        hideScrollbar: true,
    });
</script>
@endsection
