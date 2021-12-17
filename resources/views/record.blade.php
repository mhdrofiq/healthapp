<!doctype html>
<html lang="en">

<head>
    @include('includes.head')
    <title>Data Record</title>
    <!-- Custom styles for this template -->
    <link href="{{asset('/css/data-record.css')}}" rel="stylesheet">
</head>

<body>

    <header class="row">
        @include('includes.header')
    </header>

    <div class="col-lg-8 mx-auto p-3 py-md-5">

        <main>
            <h1>Your Data Record</h1>
            <p>Labore in enim cupidatat ullamco do ea est dolore culpa laboris Lorem
                tempor mollit. In est laboris laboris deserunt ullamco ea cillum deserunt
                tempor. Culpa exercitation consectetur et est minim reprehenderit proident.
                Mollit occaecat deserunt minim commodo laboris aliqua aliqua occaecat anim
                ipsum magna irure enim.</p>
            <hr><br>

            <div class="container emp-profile">
                <h2>Current Location</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.3407600806077!2d103.63638621551283!3d1.559362461299001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da7154a58c424b%3A0x8c133d77584b5ff8!2sUniversiti%20Teknologi%20Malaysia!5e0!3m2!1sen!2smy!4v1639055488487!5m2!1sen!2smy" width=95% height="450" style="border: 0; display: block; margin: 0 auto;" allowfullscreen="" loading="lazy">

                </iframe>
            </div><br>

            <div class="container emp-profile">
                <h2>Temperature Record</h2>
                <p>Consequat quis ad sint mollit non nulla nulla commodo cillum id magna.
                    Tempor esse non reprehenderit officia in exercitation labore dolore
                    mollit. Amet et elit commodo eu dolore do mollit do et aliqua.</p>
                <div>
                    <canvas id="tempschart" width="800" height="200"></canvas>
                </div>
            </div><br>

            <div class="container emp-profile">
                <h2>Heart Rate Record</h2>
                <p style="text-align: center;">Monitored <b><?php echo $seniorName ?></b> Heart Rate Record.</p>
                <div>
                    <canvas id="heartChart" width="800" height="200"></canvas>
                </div>
            </div><br>

            <div class="container emp-profile">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Temperature</th>
                            <th scope="col">Heart Rate</th>
                        </tr>
                        <tr>
                            <td>10/10/21</td>
                            <td>10:00</td>
                            <td>35</td>
                            <td>74</td>
                        </tr>
                        <tr>
                            <td>10/10/21</td>
                            <td>10:30</td>
                            <td>34</td>
                            <td>75</td>
                        </tr>
                        <tr>
                            <td>10/10/21</td>
                            <td>11:00</td>
                            <td>36</td>
                            <td>77</td>
                        </tr>
                        <tr>
                            <td>10/10/21</td>
                            <td>11:30</td>
                            <td>36</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>10/10/21</td>
                            <td>12:00</td>
                            <td>35</td>
                            <td>73</td>
                        </tr>
                        <tr>
                            <td>10/10/21</td>
                            <td>12:30</td>
                            <td>34</td>
                            <td>74</td>
                        </tr>
                        <tr>
                            <td>10/10/21</td>
                            <td>01:00</td>
                            <td>33</td>
                            <td>76</td>
                        </tr>
                        <tr>
                            <td>10/10/21</td>
                            <td>01:30</td>
                            <td>35</td>
                            <td>75</td>
                        </tr>
                        <tr>
                            <td>10/10/21</td>
                            <td>02:00</td>
                            <td>36</td>
                            <td>75</td>
                        </tr>
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
                    backgroundColor: "rgba(0,0,255,1.0)",
                    borderColor: "rgba(0,0,255,0.1)",
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