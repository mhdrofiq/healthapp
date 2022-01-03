<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
    <title>Template</title>
    <!-- Custom styles for this template -->
    
</head>

<body>

    <header class="row">
        @include('includes.header')
    </header>

    <div class="col-lg-8 mx-auto p-3 py-md-5">
        
        <main>
            <h1>testing eloquent relationships</h1><br>
            <p>
                {{--this is how you call attributes of a model--}}
                {{ auth()->user()->senior->first()->senior_name }}
                <br>
                {{--this is how you get sensor data from an authenticated user--}}
                {{ auth()->user()->senior->first()->device->sensor_data->first()->temperature }}
            </p>
        </main>

        <footer class="pt-5 my-5 text-muted border-top">
            Created by the CareWare team &middot; &copy; 2021
        </footer>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


