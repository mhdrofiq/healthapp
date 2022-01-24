<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
    <title>Home</title>
    <!-- Custom styles for this template -->
    <link href="{{asset('/css/starter-template.css')}}" rel="stylesheet">
</head>

<body>

    <header class="row">
        @include('includes.header')
    </header>

    <div class="col-lg-8 mx-auto p-3 py-md-5">
        
        <main>

            <img class="mb-4" src="/img/logo.png" alt="" width="400px">
            <br><br><h1>Welcome to CareWear</h1>
            <p class="fs-5 col-md-8">
                Carewear is a health monitoring tool that allows for quick and easy access to 
                an eldery's real time phisiological measurements from our wearable devices to a 
                caretaker.
            </p>
            
        </main>

        

        <footer class="pt-5 my-5 text-muted border-top">
            Created by the CareWear team &middot; &copy; 2021
        </footer>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
