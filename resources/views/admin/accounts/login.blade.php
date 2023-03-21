@extends('layouts.main')
@section('title', 'Login')
@section('content')
    <form method="POST" action="/login">
        @csrf
        <img class="d-block mx-auto mb-3" src="/assets/img/logo.svg" alt="Logo" width="56px" height="auto">
        <h3 class="fw-bold text-center mb-2">{!! __('Log in') !!}</h3>
        @if (count($errors) > 0)
            <div class="d-flex justify-content-center">
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $err)
                        <div><i class="fa-solid fa-triangle-exclamation me-2"></i>{{ $err }}</div>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingUsername" placeholder="Username" name="username">
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
        </div>
        <button class="d-block mx-auto btn btn-success" type="submit">{!! __('Log in') !!}</button>
        <div class="text-center mt-3">&copy; 2023 <b>{!! __('Tai Loc Hostel') !!}</b>. All rights reserved.</div>
    </form>
    @if (session('notify') == 'Login failed')
        <script>
            Swal.fire({
                title: 'Login failed',
                icon: 'error',
                scrollbarPadding: false,
                allowOutsideClick: false,
            })
        </script>
    @endif
@endsection
