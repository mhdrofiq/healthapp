<!doctype html>
<html lang="en">

<head>
    @include('includes.head')
    <title>Health Evaluation</title>
    <!-- Custom styles for this template -->
    <link href="{{asset('/css/data-record.css')}}" rel="stylesheet">

</head>

<body style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);">

    <header class="row">
        @include('includes.header')
    </header>

    <div class="col-lg-8 mx-auto p-3 py-md-5">

        <main>
        <h1 class="text-white" style="text-align: center;">Health Evaluation</h1><br>
            <p class="text-white" style="text-align: center;">Below is the Health Evaluation of <b>{{ $senior->senior_name }}</b></p>
            <hr class="text-white"><br>

            @if ($statusflag == true)
                <div class="card text-white text-center bg-success mb-3">
                    <div class="card-body">
                        <h4 class="card-title">All Good!</h4>
                        <p class="card-text">
                            All measurements are within normal ranges. This senior citizen is healthy.
                        </p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <ul style="color: black;">
                            <li>{{ $senior->senior_name }}'s most recent body temperatures are within normal range.</li>
                            <li>{{ $senior->senior_name }}'s most recent heart rates are within normal range.</li>
                            <li>In person monitoring is deemed unnecessary for the current time.</li>
                        </ul>
                    </div>
                </div>
            @elseif ($statusflag == false)
                <div class="card text-white text-center bg-danger mb-3">
                    <div class="card-body">
                        <h4 class="card-title">Warning. This senior citizen is not well.</h4>
                        <p class="card-text">
                            The most recent measurements are out of the expected range. View notifications for more info.
                        </p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <ul style="color: black;">
                            @if ($tempflag == false)
                            <li>{{ $senior->senior_name }}'s recent body temperatures are out of the normal range.</li>
                            @else
                            <li>{{ $senior->senior_name }}'s most recent body temperatures are within normal range.</li>
                            @endif
                            @if ($heartflag == false)
                            <li>{{ $senior->senior_name }}'s most recent heart rates are out of the normal range.</li>
                            @else
                            <li>{{ $senior->senior_name }}'s most recent heart rates are within normal range.</li>
                            @endif
                            <li>In person monitoring is necessary for the current time.</li>
                        </ul>
                    </div>
                </div>
            @endif
            

            

            <div class="container emp-profile">
                <table class="table table-striped table-sm">
                    <h3>Recently Measured Data</h3>
                    <br>
                    <thead>
                        <tr>
                            <th scope="col">Time</th>
                            <th scope="col">Temperature</th>
                            <th scope="col"></th>
                            <th scope="col">Heart Rate</th>
                            <th scope="col"></th>
                        </tr>
                        @foreach ($records as $record)
                        <tr>
                            <td>{{ $record['recordtime'] }}</td>
                            <td>{{ $record['temperature'] }}</td>
                            @if (($record['temperature'] < 35))
                            <td class="text-danger">Low temperature</td>
                            @elseif ($record['temperature'] >= 39.0)
                            <td class="text-danger">High temperature</td>
                            @else
                            <td class="text-success">Normal temperature</td>
                            @endif
                            <td>{{ $record['ecg'] }}</td>
                            @if ($record['ecg'] < 60)
                            <td class="text-danger">Low heart rate</td>
                            @elseif ($record['ecg'] > 100)
                            <td class="text-danger">High heart rate</td>
                            @else
                            <td class="text-success">Normal heart rate</td>
                            @endif
                        </tr>
                        @endforeach
                    </thead>
                </table>   
            </div>
            <br>
           
        </main>

        <footer class="pt-5 my-5 text-white border-top">
            Created by the CareWare team &middot; &copy; 2021
        </footer>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>