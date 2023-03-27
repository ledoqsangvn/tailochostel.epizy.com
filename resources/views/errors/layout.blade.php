<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <script src="/assets/js/jquery.min.js"></script>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/all.min.css">
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
        <span class="d-flex align-items-center justify-content-center h3 mb-3 fw-bold"><img src="/assets/img/logo.svg" class="me-2"
                width="56px;" height="auto">Tai Loc
            Hostel</span>
        <div class="display-1"><i class="fa-solid fa-triangle-exclamation text-danger"></i></div>
        <h4 class="fw-bold text-danger">@yield('code')</h4>
        <h4 class="mb-3 fw-bold">@yield('message')</h4>
        <a type="button" class="btn btn-primary d-block mx-auto mb-3" href="/"><i class="fa-solid fa-home me-2"></i>Go
            to
            homepage</a>
        <div class="px-5">&copy; 2023 <b>Tai Loc Hostel</b>. All rights reserved.</div>
    </div>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
