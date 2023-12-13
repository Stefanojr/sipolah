<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="/bootstrap-5.3.2-dist/css/bootstrap.css" rel="stylesheet">
</head>

<body>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />

    <style>
        #intro {
            background-image: url(https://1.bp.blogspot.com/-ubOj37WUgec/Xn3wWTfU9lI/AAAAAAAAAow/GCHJ8RX1ZeUyPGDm6whiU2Ex-5B9UdMUgCLcBGAsYHQ/w1200-h630-p-k-no-nu/sampah.jpg);
            height: 100vh;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #intro {
                margin-top: -58.59px;
            }
        }
        .form-inline {
      text-align: center;
      text-size-adjust: inherit
    }

    .form-label {
      display: inline-block;
    }




        .navbar .nav-link {
            color: #fff !important;
        }
    </style>
</head>

<body>
    <!--Main Navigation-->
    <header>


        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand nav-link" target="_blank" href="/">
                    <strong>SIPOLAH</strong>
                </a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register" rel="nofollow" target="_blank">Account</a>
                        </li>

                    </ul>


                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Background image -->
        <div id="intro" class="bg-image shadow-2-strong">
            <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-md-8">
                            @if (session('flash_berhasil'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('flash_berhasil') }}</strong> Silahkan Lanjut Login
                                {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> --}}
                                    {{-- <span aria-hidden="true">&times;</span> --}}
                                </button>
                            </div>
                            @endif

                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong> Silahkan Lanjut Login
                                {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> --}}
                                    {{-- <span aria-hidden="true">&times;</span> --}}
                                </button>
                            </div>
                            @endif

                            @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </div>
                            @endif

                            <form class="bg-white rounded shadow-5-strong p-5" action="{{ route('postlogin') }}"
                                method="POST">

                                @csrf
                                <div class="form-inline mb-4">
                                    <label class="form-label" for="formLabel2" ><strong><i class="fas fa-sign-in-alt"></i>  Form Login</strong> </label>
                                </div>
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form1Example1">Email address</label>
                                    <input type="email" id="form1Example1" class="form-control" name="email" />

                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form1Example2">Password</label>
                                    <input type="password" id="form1Example2" class="form-control" name="password" />

                                </div>

                                <!-- 2 column grid layout for inline styling -->
                                <div class="row mb-4">
                                    <div class="col d-flex justify-content-center">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form1Example3"
                                                checked />
                                            <label class="form-check-label" for="form1Example3">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col text-center">
                                        <!-- Simple link -->
                                        <a href="/register">Create Account</a>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </header>
    <!--Main Navigation-->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:
        <a class="text-dark" href="/home">sipolah.com</a>
    </div>
    <!-- Copyright -->
    </footer>
    <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
<script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>
</body>

</html>
