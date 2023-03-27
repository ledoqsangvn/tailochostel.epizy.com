<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha256-wLz3iY/cO4e6vKZ4zRmo4+9XDpMcgKOvv/zEU3OMlRo=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.3.0/css/all.min.css"
        integrity="sha256-/4UQcSmErDzPCMAiuOiWPVVsNN2s3ZY/NsmXNcj0IFc=" crossorigin="anonymous">
    <style>
        * {
            -moz-user-select: none;
            -webkit-user-select: none;
            user-select: none;
            -webkit-user-drag: none;
            font-family: Arial;
        }

        body::before {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #04243c;
        }
    </style>
</head>

<body class="h-100 d-flex align-items-center justify-content-center p-3 position-relative" style="z-index: 1;">
    <div class="text-center p-3 rounded-3 shadow bg-light text-dark">
        <span class="d-flex align-items-center justify-content-center h3 mb-3 fw-bold"><img src="/assets/img/logo.svg"
                class="me-2" width="56px;" height="auto">Tai Loc
            Hostel</span>
        <div class="display-1"><i class="fa-solid fa-triangle-exclamation text-danger"></i></div>
        <h4 class="fw-bold text-danger">@yield('code')</h4>
        <h4 class="mb-3 fw-bold">@yield('message')</h4>
        <a type="button" class="btn btn-primary d-block mx-auto mb-3" href="/"><i class="fa-solid fa-home me-2"></i>Go
            to
            homepage</a>
        <div class="px-5">&copy; 2023 <b>Tai Loc Hostel</b>. All rights reserved.</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha256-lSABj6XYH05NydBq+1dvkMu6uiCc/MbLYOFGRkf3iQs=" crossorigin="anonymous"></script>
</body>

</html>
