<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
    <title>Template</title>
    <!-- Custom styles for this template -->
    
</head>

<body>

    <div class="col-lg-8 mx-auto p-3 py-md-5">
        
        <main>
            <h1>This is an empty page for testing code</h1><br>
            @foreach($records as $record)
            <p>
                Time: {{ $record['recordtime'] }}<br>
                Temperature: {{ $record['temperature'] }}<br>
                Heartrate: {{ $record['ecg'] }}
            </p><br>
            @endforeach
        </main>

        <footer class="pt-5 my-5 text-muted border-top">
            Created by the CareWare team &middot; &copy; 2021
        </footer>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


