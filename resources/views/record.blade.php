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
            <h1 class="text-white">Your Data Record</h1>
            <p class="text-white">Labore in enim cupidatat ullamco do ea est dolore culpa laboris Lorem 
                tempor mollit. In est laboris laboris deserunt ullamco ea cillum deserunt 
                tempor. Culpa exercitation consectetur et est minim reprehenderit proident. 
                Mollit occaecat deserunt minim commodo laboris aliqua aliqua occaecat anim 
                ipsum magna irure enim.</p>
            <hr class="text-white"><br>
            
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
                <p>Consequat quis ad sint mollit non nulla nulla commodo cillum id magna. 
                    Tempor esse non reprehenderit officia in exercitation labore dolore 
                    mollit. Amet et elit commodo eu dolore do mollit do et aliqua.</p>
                <div>
                    <canvas id="heartchart" width="800" height="200"></canvas>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script src="recordscript.js"></script>
</body>
</html>
