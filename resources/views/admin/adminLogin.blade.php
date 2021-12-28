<!doctype html>
<html lang="en">
    <head>
        @include('includes.head')
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }
            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="{{asset('/css/signin.css')}}" rel="stylesheet">
    </head>

    <body class="text-center">
        
    <main class="form-signin">
        <form method="post" action="/adminLogin">
            @csrf
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <h1 class="h3 mb-3 fw-normal">Carewear Admin Login</h1>
            <div class="form-floating">
                <input name="username" type="text" class="form-control" id="floatingInput" placeholder="johndoe" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            @error('errormsg')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
    </main>

    </body>
</html>
