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
            <h1>Empty template page</h1><br>
            <ul>
                @foreach ($temps as $temp)
                <li>{{ $temp->temperature }} -> {{ $temp->user->name }}</li>
                @endforeach
            </ul>
        </main>

        <footer class="pt-5 my-5 text-muted border-top">
            Created by the CareWare team &middot; &copy; 2021
        </footer>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
