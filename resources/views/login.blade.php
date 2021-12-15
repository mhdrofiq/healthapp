<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Login</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{asset('/css/signin.css')}}" rel="stylesheet">

</head>

<body class="text-center">
    <main class="form-signin">
        <!--dont forget to add method and action to form tag-->
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
        @endif,m 
        <form method="post" action="{{ route('login') }}" class="needs-validation" novalidate>
            @csrf
            <img class="mb-4" src="/img/logo.png" alt="" width="400px">
            <h1 class="h3 mb-3 fw-normal">Please Sign In</h1>

            <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput" class="form-label" val>Email address</label>
                <div class="invalid-feedback">
                    Please input your email
                </div>
            </div>
            
            <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword" class="form-label">Password</label>
                <div class="invalid-feedback">
                    Please input valid password
                </div>
            </div>
            <input type="checkbox" onclick="myFunction()"> Show Password 
            <script>
                function myFunction() {
                    var x = document.getElementById("floatingPassword");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                }
            </script>
            <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            </div>
            <a><button class="w-100 btn btn-lg btn-primary" name="submit" id="submit" type="submit" value="submit">Sign in</button></a>
            <div>
            <br>
            <label>
                Don't have account? 
                <a href="register">Register</a>.
            </label><br>
            <label>
                <a href="">Forgot Password?</a>
            </label>
            </div>
            <p class="mt-5 mb-3 text-muted">&copy; CareWear 2021</p>

            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
            })()
            </script>
        </form>
    </main>
</body>
</html>