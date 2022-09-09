<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo2.png') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <title>404-error</title>
</head>

<body class="bg-white">
    <!-- Page Content -->
    <div>
        <div class="container d-flex flex-column">
            <div class="row">
                <div class="offset-xl-1 col-xl-2 col-lg-12 col-md-12 col-12">
                    <div class="mt-4">
                        <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/logo1.png') }}"
                                                              alt=""/></a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center g-0 py-lg-10 py-10">
                <!-- Docs -->
                <div class="offset-xl-1 col-xl-4 col-lg-6 col-md-12 col-12 text-center text-lg-start">
                    <h1 class="display-1 mb-3">404</h1>

                    <p class="mb-5 lead">Oops! Sorry, we could not find the page you were looking for. If you think this
                        is a problem with us, please <a href="#" class="btn-link">Contact us</a></p>
                    <a href="/" class="btn btn-primary me-2">Back to Dashboard</a>
                </div>
                <!-- img -->
                <div class="offset-xl-1 col-xl-6 col-lg-6 col-md-12 col-12 mt-8 mt-lg-0">
                    <img src="{{ asset('assets/images/error404-01.svg') }}" alt="" class="w-100"/>
                </div>
            </div>
        </div>
    </div>

    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
</body>

</html>