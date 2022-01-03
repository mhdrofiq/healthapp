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
            <h1>Detected Abnormalities</h1>
            <p>
                Carewear has detected an irregularity in the phisiological data of the
                senior citizen under your care. Abnormal temperature and heart rate values
                have been detected from the latest measurement. Please take caution of the
                abnormalities in their temperature and heart rate.
            </p><br>

            <div class="card mb-4 rounded-3 shadow-sm border-danger">
                <div class="card-body text-dark">
                    <p class="card-title blockquote">Last measurement was taken at 03 Jun 19:30 MYT</p>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 mb-2 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-danger">
                      <div class="card-header py-3 bg-danger border-danger">
                        <h4 class="my-0 fw-normal text-white">Temperature</h4>
                      </div>
                      <div class="card-body">
                        <h1 class="card-title">{{ $abrtemp }}&#8451;</h1>
                      </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-danger">
                        <div class="card-header py-3 bg-danger border-danger">
                            <h4 class="my-0 fw-normal text-white">Heart Rate</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">180<small class="text-muted fw-light">bpm</small></h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-md-6">
                    <h2>Common Causes</h2>
                    <p>Consequat quis ad sint mollit non nulla nulla commodo cillum id magna. 
                        Tempor esse non reprehenderit officia in exercitation labore dolore 
                        mollit. Amet et elit commodo eu dolore do mollit do et aliqua.</p>
                    <ul class="icon-list">
                        <li><a class="text-decoration-none" href="https://en.wikipedia.org/wiki/Fever">More information about fevers</a></li>
                        <li><a class="text-decoration-none" href="https://www.who.int/news-room/fact-sheets/detail/climate-change-heat-and-health">More information about heatstroke</a></li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h2>Common Causes</h2>
                    <p>Consequat quis ad sint mollit non nulla nulla commodo cillum id magna. 
                        Tempor esse non reprehenderit officia in exercitation labore dolore 
                        mollit. Amet et elit commodo eu dolore do mollit do et aliqua.</p>
                    <ul class="icon-list">
                        <li><a class="text-decoration-none" href="https://www.healthline.com/health/dangerous-heart-rate#what-is-a-dangerous-rate">More information about tachycardia</a></li>
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
