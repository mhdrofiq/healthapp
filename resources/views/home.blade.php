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
            <p class="fs-5 col-md-8">Consequat quis ad sint mollit non nulla nulla commodo 
                cillum id magna. Tempor esse non reprehenderit officia in exercitation labore 
                dolore mollit. Amet et elit commodo eu dolore do mollit do et aliqua.</p>

            <div class="mb-5">
                <a href="../examples/" class="btn btn-primary btn-lg px-4">call to action</a>
            </div>

            <hr class="col-3 col-md-2 mb-5">

            <div class="row g-5">
                <div class="col-md-6">
                    <h2>About CareWear</h2>
                    <p>Consequat quis ad sint mollit non nulla nulla commodo cillum id magna. 
                        Tempor esse non reprehenderit officia in exercitation labore dolore 
                        mollit. Amet et elit commodo eu dolore do mollit do et aliqua.</p>
                    <ul class="icon-list">
                        <li><a href="...">Link to somewhere</a></li>
                        <li><a href="...">Link to somewhere</a></li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h2>About Our Product</h2>
                    <p>Consequat quis ad sint mollit non nulla nulla commodo cillum id magna. 
                        Tempor esse non reprehenderit officia in exercitation labore dolore 
                        mollit. Amet et elit commodo eu dolore do mollit do et aliqua.</p>
                    <ul class="icon-list">
                        <li><a href="...">Link to somewhere</a></li>
                        <li><a href="...">Link to somewhere</a></li>
                        <li><a href="...">Link to somewhere</a></li>
                        <li><a href="...">Link to somewhere</a></li>
                    </ul>
                </div>
            </div>
        </main>
        <footer class="pt-5 my-5 text-muted border-top">
            Created by the CareWear team &middot; &copy; 2021
        </footer>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
