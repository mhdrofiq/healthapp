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
    <img style="margin-left: 40%;" class="mb-4" src="/img/logo.png" alt="" width="300px">
    <section class="section about-section gray-bg" id="about">
        <div class="col-lg-8 mx-auto p-3 py-md-5">
            <div class="container emp-profile">
                <form class="form-horizontal" role="form" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $id = Auth::user()->id }}">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-4">
                            <div class="profile-img">
                            <br> <br> <br> <br> <br> <br> <br> <br>
                                <a style="text-decoration: none;" type="button" href="updateProfile" class="profile-edit-btn">Back</a>
                            </div>
                        </div>
                        <!-- edit form column -->
                        <div class="col-md-6">
                            <h4>Change Password</h4> </br>

                            <div class="form-group">
                                <label>Old Password:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="oldPassword" type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>New Password:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="newPassword" type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Confirm New Password:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="confirmNewPassword" type="text" required>
                                </div>
                            </div>
                        </div>
                        <!-- Submit form column -->
                        <div class="col-md-2">
                            <button type="submit" class="profile-edit-btn" href="editProfile">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>