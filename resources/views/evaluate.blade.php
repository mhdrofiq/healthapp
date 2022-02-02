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
            <p class="text-white" style="text-align: center;">Below is the Health Evaluation of <b>Miss Elinor Glover</b></p>
            <hr class="text-white"><br>

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
                        <li>patient's most recent body temperatures are within normal range.</li>
                        <li>patient's most recent heart rates are within normal range.</li>
                        <li>In person monitoring is deemed unnecessary for the current time.</li>
                        <li>Carewear has detected a rise in temperature over the last 3 readings</li>
                    </ul>
                </div>
            </div>

            <div class="container emp-profile">
                <table class="table table-striped table-sm">
                    <h3>List Of Recent Data:</h3>
                    <br>
                    <thead>
                        
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Temperature</th>
                            <th scope="col">Heart Rate</th>
                            <th scope="col">Summary</th>
                        </tr>
                        <tr>
                            <td>10/10/21</td>
                            <td>10:00</td>
                            <td>36</td>
                            <td>74</td>
                            <td style="color: green;">
                                Normal 
                            </td>
                        </tr>
                        <tr>
                            <td>10/10/21</td>
                            <td>10:30</td>
                            <td>34</td>
                            <td>60</td>
                            <td style="color:blue">
                                Abnormal(low)
                            </td>
                        </tr>
                        <tr>
                            <td>10/10/21</td>
                            <td>11:00</td>
                            <td>36</td>
                            <td>77</td>
                            <td style="color: green;">Normal</td>
                        </tr>
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