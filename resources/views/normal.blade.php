<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
    <title>Abnormal Condition Warning</title>
    <!-- Custom styles for this template -->
    <link href="{{asset('/css/starter-template.css')}}" rel="stylesheet">
</head>

<body>

    <header class="row">
        @include('includes.header')
    </header>

    <div class="col-lg-8 mx-auto p-3 py-md-5">
        
        <main>
            <h1>There are no abnormalities in {{ $senior->senior_name }}'s data</h1>
            <p>
                Carewear has not detected any irregularities in 
                {{ $senior->senior_name }}'s
                phisiological measurements using our device in recent times. For further
                information about 
                {{ $senior->senior_name }}'s 
                current condition, please visit the 
                <a class="text-decoration-none" href="evaluate">evaluate condition</a> 
                page. To view a complete record of 
                {{ $senior->senior_name }}'s 
                data CareWear has measured, please visit the
                <a class="text-decoration-none" href="record">data record</a>
                page.
            </p><br>

        </main>

        <footer class="pt-5 my-5 text-muted border-top">
            Created by the CareWear team &middot; &copy; 2021
        </footer>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
