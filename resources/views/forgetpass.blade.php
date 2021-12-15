<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForgetPassword</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
    <link href="{{asset('/css/signin.css')}}" rel="stylesheet">
</head>
<body>
<form method="post" action="login.blade.php">
            <img class="mb-4" src="/img/logo.png" alt="" width="400px">
            <h1 class="h3 mb-3 fw-normal">Forgot Password</h1>

            <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="floatingPasswordNew" placeholder="Password">
            <label for="floatingPassword">New Password</label>
            </div>
            
            <a href="forgetpass.blade.php"><button class="w-100 btn btn-lg btn-primary" name="submit" id="submit" type="submit">Sign in</button></a>
            <div>
            <br>
            <label>
                <a href="">Login</a>
            </label>
            </div>
            <p class="mt-5 mb-3 text-muted">&copy; CareWear 2021</p>
        </form>
</body>
</html>