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

                <div class="row">
                    <!-- left column -->
                    <div class="col-md-4">
                        <h2>Edit Profile</h2>
                        <div class="text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="avatar img-circle img-thumbnail" alt="avatar" style="border-radius: 50%;"> </br> </br>
                            <h5>Senior Citizen</h5>
                        </div>
                    </div>

                    <!-- edit form column -->
                    <div class="col-md-6 personal-info">
                        <h3>Personal info</h3>

                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Full Name:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Email:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Gender:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Birthday:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Age:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Phone:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Address:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="">
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Submit form column -->
                    <div class="col-md-2">
                        <input type="submit">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>