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

        
        <div class="col-lg-8 mx-auto p-3 py-md-5">
        <h2 class="light-color">My Profile</h2>
        <section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color">Muhammad Junayd</h3>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Birthday</label>
                                        <p>4th april 1998</p>
                                    </div>
                                    <div class="media">
                                        <label>Age</label>
                                        <p>22 Year</p>
                                    </div>
                                    
                                    <div class="media">
                                        <label>Address</label>
                                        <p>Padang, West Sumatra</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>E-mail</label>
                                        <p>mhdjunayd@gmail.com</p>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <p>081245896378</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img class="picture" src="https://i.ibb.co/YRFpKHx/16-168770-user-iconset-no-profile-picture-icon-circle-clipart-removebg-preview.png" title="" alt="">
                            
                        </div>
                        <h4 style="margin-left: 35%;">Senior Citizen</h4>
                        <button class="button" type="button" onclick="color()">Edit Profile</button>
                    </div>
                </div>
            </div>
        </section>
        </div>

        <footer class="pt-5 my-5 text-muted border-top">
            Created by the CareWare team &middot; &copy; 2021
        </footer>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
