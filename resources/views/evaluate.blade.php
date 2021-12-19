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
        <h1 class="text-white"><b>{{ Auth::user()->senior->senior_name }}'s Health Evaluation</b></h1>
        
        <p class="text-white">Labore in enim cupidatat ullamco do ea est dolore culpa laboris Lorem 
                tempor mollit. In est laboris laboris deserunt ullamco ea cillum deserunt 
                tempor. Culpa exercitation consectetur et est minim reprehenderit proident. 
                Mollit occaecat deserunt minim commodo laboris aliqua aliqua occaecat anim 
                ipsum magna irure enim.</p>
                <br>
        <div class="container emp-profile">
                <table class="table table-striped table-sm">
                    <h2><b>Temperature Evaluation</b></h2>
                    <br>
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Temperature</th>
                        <th scope="col">Summary</th>
                    </tr>
                    <tr>
                        <td>10/10/21</td>
                        <td>10:00</td>
                        <td>35</td>
                        <td>Normal Temperature</td>
                    </tr>
                    <tr>
                        <td>10/10/21</td>
                        <td>10:30</td>
                        <td>34</td>
                        <td>Low Temperature</td>
                    </tr>
                    <tr>
                        <td>10/10/21</td>
                        <td>11:00</td>
                        <td>36</td>
                        <td>Normal Temperature</td>
                    </tr>
                    <tr>
                        <td>10/10/21</td>
                        <td>11:30</td>
                        <td>36</td>
                        <td>Normal Temperature</td>
                    </tr>
                    <tr>
                        <td>10/10/21</td>
                        <td>12:00</td>
                        <td>35</td>
                        <td>Normal Temperature</td>
                    </tr>
                    <tr>
                        <td>10/10/21</td>
                        <td>12:30</td>
                        <td>37</td>
                        <td>High Temperature</td>
                    </tr>
                    <tr>
                        <td>10/10/21</td>
                        <td>01:00</td>
                        <td>33</td>
                        <td>Low Temperature</td>
                    </tr>
                    <tr>
                        <td>10/10/21</td>
                        <td>01:30</td>
                        <td>35</td>
                        <td>Normal Temperature</td>
                    </tr>
                    <tr>
                        <td>10/10/21</td>
                        <td>02:00</td>
                        <td>38</td>
                        <td>High Temperature</td>
                    </tr>
                </thead>
                    
                </table>
                <b>Note:</b><br>
                        32-34 = Low Temperature <br>
                        35-36 = Normal Temperature <br>
                        37-38 = High Temperature<br>
        </div>
        <br>
                <div class="container emp-profile">
                <table class="table table-striped table-sm">
                <h2><b>Heart Rate Evaluation</b></h2>
                <br>
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Heart Rate</th>
                        <th scope="col">Summary</th>
                    </tr>
                    <tr>
                        <td>10/10/21</td>
                        <td>10:00</td>
                        <td>74</td>
                        <td>Normal Heart Rate</td>
                    </tr>
                    <tr>
                        <td>10/10/21</td>
                        <td>10:30</td>
                        <td>75</td>
                        <td>Normal Heart Rate</td>
                    </tr>
                    <tr>
                        <td>10/10/21</td>
                        <td>11:00</td>
                        <td>100</td>
                        <td>High Heart Rate</td>
                    </tr>
                    <tr>
                        <td>10/10/21</td>
                        <td>11:30</td>
                        <td>60</td>
                        <td>Low Heart Rate</td>
                    </tr>
                    <tr>
                        <td>10/10/21</td>
                        <td>12:00</td>
                        <td>58</td>
                        <td>Low Heart Rate</td>
                    </tr>
                    <tr>
                        <td>10/10/21</td>
                        <td>12:30</td>
                        <td>105</td>
                        <td>High Heart Rate</td>
                    </tr>
                    <tr>
                        <td>10/10/21</td>
                        <td>01:00</td>
                        <td>76</td>
                        <td>Normal Heart Rate</td>
                    </tr>
                    <tr>
                        <td>10/10/21</td>
                        <td>01:30</td>
                        <td>110</td>
                        <td>High Heart Rate</td>
                    </tr>
                    <tr>
                        <td>10/10/21</td>
                        <td>02:00</td>
                        <td>75</td>
                        <td>Normal Heart Rate</td>
                    </tr>
                </thead>
                </table>
                <b>Note:</b><br>
                        55-70 = Low Heart Rate <br>
                        71-99 = Normal Heart Rate <br>
                        100-170 = High Heart Rate<br>
                </div>
        </main>

        <footer class="pt-5 my-5 text-muted border-top">
            Created by the CareWare team &middot; &copy; 2021
        </footer>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
