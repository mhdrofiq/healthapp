<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
    <title>No evaluation</title>
    <!-- Custom styles for this template -->
    <link href="{{asset('/css/starter-template.css')}}" rel="stylesheet">
</head>

<body>

    <header class="row">
        @include('includes.header')
    </header>

    <div class="col-lg-8 mx-auto p-3 py-md-5">
        
        <main>
            <h1>{{ $senior->senior_name }} is not wearing a carewear device.</h1>
            <p>
                Carewear is unable to display data evaluations. Please arrange for this senior citizen to wear a device to 
                begin recording their body temperature and heart rate data. Contact an admin to arrange an assignment 
                of an available device to this senior citizen.
            </p><br>

        </main>

        <footer class="pt-5 my-5 text-muted border-top">
            Created by the CareWear team &middot; &copy; 2021
        </footer>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
