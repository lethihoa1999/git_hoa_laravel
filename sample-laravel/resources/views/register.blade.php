<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="{{ Route('validates') }}" method="post">
                                @csrf     
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user" name="mail_address" id="email" placeholder="Email" value="{{ old('mail_address') }}">
                                    <span style="color: red">@error('mail_address'){{ $message }} @enderror</span>
                                </div>
                                <div class="form-group row mb-2">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <span style="color: red">@error('password'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="confirm-password" name="confirm_password" placeholder="Confirm password">
                                        <span style="color: red">@error('confirm_password'){{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
                                    <span style="color: red">@error('name'){{ $message }} @enderror</span>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user" name="address" id="address" placeholder="Address" value="{{ old('address') }}">
                                    <span style="color: red">@error('address'){{ $message }} @enderror</span>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user" name="phone" id="phone" placeholder="phone" value="{{ old('phone') }}">
                                    <span style="color: red">@error('phone'){{ $message }} @enderror</span>
                                </div>
                                <button type="submit" name="btnRegister" class="btn btn-primary btn-user btn-block">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/twbs/bootstrap/assets/js/vendor/jquery-slim.min.js"></script>
    <script src="../vendor/twbs/bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html> 
