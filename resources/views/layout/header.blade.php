<html>
<head>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">BUKU APP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item active float-right">
                        <a class="nav-link" style="cursor: pointer;" data-toggle="modal" data-target="#LoginModal">Login <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
    </nav>
    <div class="modal" tabindex="-1" role="dialog" id="LoginModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="{{ route('login') }}" method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="email" name="email" class="form-control" />
                    <label class="form-label" for="form2Example1">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control" />
                    <label class="form-label" for="form2Example2">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                    </div>

                    <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

            </form>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Login</button>
            </div>
            </div>
        </div>
    </div>

 