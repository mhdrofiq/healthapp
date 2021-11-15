<!doctype html>
<html lang="en">

<head>
    @include('includes.head')
    <title>Profile</title>
    <!-- Custom styles for this template -->
    <link href="{{asset('/css/profile.css')}}" rel="stylesheet">
</head>

<body>

    <header class="row">
        @include('includes.header')
    </header>
    <section class="section about-section gray-bg" id="about">
        <div class="col-lg-8 mx-auto p-3 py-md-5">

            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color">Name</h3>
                            <h6 class="theme-color lead"><b>Senior Citizen/CareTaker</b></h6>
                            <p>A bit description of the user that has been inputted.</p>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Birthday</label>
                                        <p>4th april 1998</p>
                                    </div>
                                    <div class="media">
                                        <label>Age</label>
                                        <p>22 Yr</p>
                                    </div>
                                    <div class="media">
                                        <label>Address</label>
                                        <p>California, USA</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>E-mail</label>
                                        <p>info@domain.com</p>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <p>820-885-3321</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt=""> <br> <br>
                            <p><a href="" class="change">Change Picture</a></p>
                        </div>
                    </div>
                </div>
            </div>


            <footer class="pt-5 my-5 text-muted border-top">
                Created by the CareWare team &middot; &copy; 2021
            </footer>
        </div>
    </section>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>