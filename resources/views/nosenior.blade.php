<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
    <title>No senior found</title>
    <!-- Custom styles for this template -->
    <link href="{{asset('/css/starter-template.css')}}" rel="stylesheet">
</head>

<body>

    <header class="row">
        @include('includes.header')
    </header>

    <div class="col-lg-8 mx-auto p-3 py-md-5">
        
        <main>
            <h1>There are no senior citizens under your care.</h1>
            <p>
                Carewear is unable to display a list of senior citizens. Please contact an admin to update any changes  
                regarding the senior citizens under your care. If you are currently monitoring a senior and you are 
                seeing this page, please contact an admin to check if the seniors under your care have been assigned
                correctly.
            </p><br>

        </main>

        <footer class="pt-5 my-5 text-muted border-top">
            Created by the CareWear team &middot; &copy; 2021
        </footer>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
