<!doctype html>
<html lang="en">

<head>
    @include('includes.head')
    <title>Profile</title>
    <!-- Custom styles for this template -->
    <link href="{{asset('/css/updateProfile.css')}}" rel="stylesheet">
</head>

<body>

    <header class="row">
        @include('includes.header')
    </header>
    <section class="section about-section gray-bg" id="about">
        <div class="col-lg-8 mx-auto p-3 py-md-5">
            <div class="container emp-profile">
                <form class="form-horizontal" role="form" action="profile">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-4">
                            <div class="profile-img">
                                <h2>Edit Profile</h2> <br>
                                <img src="https://i.ibb.co/XDvNnq4/IU-Photos-107-of-599-Last-fm.webp" alt="" style="border-radius: 50%;"> </br> </br> </br>
                                <h5>Senior Citizen</h5>
                            </div>
                        </div>
                        <!-- edit form column -->
                        <div class="col-md-6">
                            <h4>Personal info</h4> </br>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Full Name:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="Danita Chalondra Grizell">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Email:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="email" value="danitagrizelle19@gmail.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Gender:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="Female">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Birthday:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="date" value="19/11/2001">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Age:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="20">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Phone:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="123 456 7890">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Address: </label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="Los Angeles">
                                </div> </br>
                            </div>
                        </div>
                        <!-- Submit form column -->
                        <div class="col-md-2">
                            <input type="submit" class="profile-edit-btn">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>