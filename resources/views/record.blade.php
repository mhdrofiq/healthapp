<!doctype html>
<html lang="en">

<head>
    @include('includes.head')
    <title>Data Record</title>
    <!-- Custom styles for this template -->
    <link href="{{asset('/css/data-record.css')}}" rel="stylesheet">
    <link href="{{asset('/css/profile.css')}}" rel="stylesheet">
</head>

<body>

    <header class="row">
        @include('includes.header')
    </header>
    <style>
        .information {
            margin-left: 35%;
        }
    </style>


    <div class="col-lg-8 mx-auto p-3 py-md-5">

        <main>
            <h1 class="text-white" style="text-align: center;">Data Record</h1><br>
            <p class="text-white" style="text-align: center;">Below is data record of <b>{{ $senior->senior_name }}</b></p>
            <hr class="text-white"><br>

            <div class="container emp-profile">
                <h2>Temperature Record</h2>
                <p>Consequat quis ad sint mollit non nulla nulla commodo cillum id magna.
                    Tempor esse non reprehenderit officia in exercitation labore dolore
                    mollit. Amet et elit commodo eu dolore do mollit do et aliqua.</p>
                <div>
                    <canvas id="tempChart" width="800" height="200"></canvas>
                </div>
            </div><br>

            <div class="container emp-profile">
                <h2>Heart Rate Record</h2>
                <p style="text-align: center;">Monitored <b>{{ $senior->senior_name }}</b> Heart Rate Record.</p>
                <div>
                    <canvas id="heartChart" width="800" height="200"></canvas>
                </div>
            </div><br>

            <div class="container emp-profile">
                <h2>List of all recorded measurements</h2>
                <p style="text-align: center;"><b>{{ $senior->senior_name }}</b>'s temperature and heart rate records</p>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Time</th>
                            <th scope="col">Temperature</th>
                            <th scope="col">Heart Rate</th>
                        </tr>
                        @foreach ($records as $record)
                        <tr>
                            <td>{{$record['recordtime']}}</td>
                            <td>{{$record['temperature']}}</td>
                            <td>{{$record['ecg']}}</td>
                        </tr>
                        @endforeach
                    </thead>
                </table>
            </div>
        </main>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="recordscript.js"></script>


    <script>
        var xValues = <?= $xValues ?>;
        var yValues = <?= $yValues ?>;

        new Chart("heartChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    fill: false,
                    backgroundColor: "rgba(190, 37, 37,1.0)",
                    borderColor: "rgba(190, 37, 37, 0.1)",
                    pointRadius: 5,
                    pointHoverRadius: 7,
                    data: yValues,
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Heart rate (bpm)'
                        }
                    }],
                    xAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Time recorded',
                        }
                    }]
                }
            }
        });
    </script>
</body>

</html>