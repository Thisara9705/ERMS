<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ERMS Application</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100 bg-dark">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html">ERMS Application</a>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5" >
            <div class="container px-5" style="height: 100%">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">Employees Relationship Management System</h1>
                            <p class="lead fw-normal text-white-50 mb-4">
                                Build morale, connect team members, and identify pain points within the organization.
                            </p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                            <a href="{{ url('/admin-dashboard') }}" class="btn btn-outline-light btn-lg px-4" >Home</a>
                                        @else
                                            <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg px-4">Admin Log In</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg px-4">User Log In</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{ asset('images/landing_page_img.png') }}" alt="Landing page image" /></div>
                </div>
            </div>
        </header>
    </main>

    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; ERMS-Application 2022</div></div>
                <div class="col-auto">
                    <a class="link-light small" href="#">Privacy</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#">Terms</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#">Contact</a>
                </div>
            </div>
        </div>
    </footer>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
