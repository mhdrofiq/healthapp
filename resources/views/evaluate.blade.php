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
            <p class="text-white" style="text-align: center;">Below is Health Evaluation of <b>Miss Elinor Glover</b></p>
            <hr class="text-white"><br>
           
            

            <div style="background-color: green; color:black; border-radius: 10px; height: 70px; font-size: 15px; text-align:center">
                             Status Message
                    <div style="font-size: 30px;">All Good !</div>
            </div>
                <br>
                <div style="background-color: white; border-radius:10px;">
                <ul style="color: black; font-size:20px; height:150px">
                <li>Labore in enim cupidatat ullamco do ea est dolore culpa laboris Lorem tempor mollit.</li>
                     <li>In est laboris laboris deserunt ullamco ea cillum deserunt tempor. </li>
                     <li>Culpa exercitation consectetur et est minim reprehenderit proident.</li>
               <li> Mollit occaecat deserunt minim commodo laboris aliqua aliqua occaecat anim ipsum magna irure enim.</li>
</ul>
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
                        <tr>
                            <td>10/10/21</td>
                            <td>11:30</td>
                            <td>36</td>
                            <td>80</td>
                            <td style="color: green;">Normal</td>
                        </tr>
                        <tr>
                            <td>10/10/21</td>
                            <td>12:00</td>
                            <td>38</td>
                            <td>120</td>
                            <td style="color: red;">Abnormal</td>
                        </tr>
                        
                    </thead>

                </table>
                
            </div>
            <br>
           
        </main>

        <footer class="pt-5 my-5 text-muted border-top">
            Created by the CareWare team &middot; &copy; 2021
        </footer>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>