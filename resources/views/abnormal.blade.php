<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
    <title>Abnormal Condition Warning</title>
    <!-- Custom styles for this template -->
    <link href="{{asset('/css/starter-template.css')}}" rel="stylesheet">
</head>

<body>

    <header class="row">
        @include('includes.header')
    </header>

    <div class="col-lg-8 mx-auto p-3 py-md-5">
        
        <main>
            <h1>Abnormal Measurements Were Detected</h1>
            <p>
                Carewear has detected an irregularity in the phisiological data of the
                senior citizen under your care. Abnormal temperature and heart rate values
                have been detected from the latest measurement. Please take caution of the
                abnormalities in their temperature and heart rate.
            </p><br>

            <div class="card mb-4 rounded-3 shadow-sm border-danger">
                <div class="card-body text-dark">
                    <p class="card-title blockquote">Last measurement was taken at {{ $abrtime }}</p>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 mb-2 text-center">
                <div class="col">
                    @if($abrtemp < 35)
                    <div class="card mb-4 rounded-3 shadow-sm border-danger">
                        <div class="card-header py-3 bg-danger border-danger">
                            <h4 class="my-0 fw-normal text-white">Low Body Temperature</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title">{{ $abrtemp }}&#8451;</h1>
                        </div>
                    </div>
                    @elseif($abrtemp >= 39.0)
                    <div class="card mb-4 rounded-3 shadow-sm border-danger">
                        <div class="card-header py-3 bg-danger border-danger">
                            <h4 class="my-0 fw-normal text-white">High Body Temperature</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title">{{ $abrtemp }}&#8451;</h1>
                        </div>
                    </div>
                    @else
                    <div class="card mb-4 rounded-3 shadow-sm border-secondary">
                        <div class="card-header py-3 bg-secondary border-secondary">
                            <h4 class="my-0 fw-normal text-white">Normal Body Temperature</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title">{{ $abrtemp }}&#8451;</h1>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="col">
                    @if($abrecg < 60)
                    <div class="card mb-4 rounded-3 shadow-sm border-danger">
                        <div class="card-header py-3 bg-danger border-danger">
                            <h4 class="my-0 fw-normal text-white">Low Heart Rate</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">{{ $abrecg }}<small class="text-muted fw-light">bpm</small></h1>
                        </div>
                    </div>
                    @elseif($abrecg > 100)
                    <div class="card mb-4 rounded-3 shadow-sm border-danger">
                        <div class="card-header py-3 bg-danger border-danger">
                            <h4 class="my-0 fw-normal text-white">High Heart Rate</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">{{ $abrecg }}<small class="text-muted fw-light">bpm</small></h1>
                        </div>
                    </div>
                    @else
                    <div class="card mb-4 rounded-3 shadow-sm border-secondary">
                        <div class="card-header py-3 bg-secondary border-secondary">
                            <h4 class="my-0 fw-normal text-white">Normal Heart Rate</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">{{ $abrecg }}<small class="text-muted fw-light">bpm</small></h1>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <div class="row g-5">
                <div class="col-md-6">
                    <h2>Probable Causes of high and low body temperatures</h2><br>
                    <p>
                            A fever is a temporary increase in your body temperature, often due to an illness. Having a fever 
                        is a sign that something out of the ordinary is going on in your body. For an adult, a fever may 
                        be uncomfortable, but usually isn't a cause for concern unless it reaches 39.4 C or higher.
                        <br><br>
                        Hypothermia is a medical emergency that occurs when your body loses heat faster than it can produce 
                        heat, causing a dangerously low body temperature. Normal body temperature is around 37 C. 
                        Hypothermia occurs as your body temperature falls below 35 C.
                    </p><br>
                    <ul class="icon-list">
                        <li><a class="text-decoration-none" href="https://www.mayoclinic.org/diseases-conditions/fever/symptoms-causes/syc-20352759">
                            More information about fevers (Mayo Clinic)</a></li>
                        <li><a class="text-decoration-none" href="https://www.mayoclinic.org/diseases-conditions/hypothermia/symptoms-causes/syc-20352682">
                            More information about hypothermia (Mayo Clinic)</a></li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h2>Probable Causes of high and low heart rates</h2><br>
                    <p>
                        When your heart rate is too fast, it’s called tachycardia. For adults, a fast heart rate is defined 
                        as above 100 bpm.
                        <br><br>
                        When your heart rate is too slow, it’s referred to as bradycardia. Bradycardia is typically defined 
                        as a heart rate less than 60 bpm.
                    </p><br>
                    <ul class="icon-list">
                        <li><a class="text-decoration-none" href="https://www.healthline.com/health/dangerous-heart-rate#dangerous-heart-rate">
                            More information about Bradycardia and Tachycardia (Healthline)</a></li>
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
