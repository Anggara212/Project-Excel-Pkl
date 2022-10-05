<!doctype html>
<html lang="en">

<head>
    <title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../assets 2/css/style.css">

    {{-- <style>
        .img
        {
            background-image: url(/assests 2/images/bg-1.jpg)
        }
    </style> --}}

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    {{-- <h2 class="heading-section">Login #05</h2> --}}
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        {{-- <div class="img" src="../assets 2/images/bg-1.jpg" ></div> --}}
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Register</h3>
                                </div>
                              
                            </div>
                            <form class="user" method="POST" action="{{route('registeruser')}}" >
                                <div class="form-group">
									@csrf
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        aria-describedby="emailHelp" placeholder="Enter Your name..." name="name">
                                </div>
								<div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password" name="password">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        {{-- <a href="#">Forgot Password</a> --}}
                                    </div>
                                </div>
                            </form>
                            {{-- <div class="text-center">
                                <a class="small" href="{{route("register")}}">Create an Account!</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../assets 2/js/jquery.min.js"></script>
    <script src="../assets 2/js/popper.js"></script>
    <script src="../assets 2/js/bootstrap.min.js"></script>
    <script src="../assets 2/js/main.js"></script>

</body>

</html>
