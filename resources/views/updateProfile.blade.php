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
                                <h2>Edit Profile</h2> <br>
                                <img src="https://i.ibb.co/XDvNnq4/IU-Photos-107-of-599-Last-fm.webp" alt="" style="border-radius: 50%;"> </br> </br> </br>
                                <a style="text-decoration: none;" href="changePassword">
                                    <h5>Change Password</h5>
                                </a> <br> <br> <br> <br>
                                <a style="text-decoration: none;" type="button" href="profile" class="profile-edit-btn">Back</a>
                            </div>
                        </div>
                        <!-- edit form column -->
                        <div class="col-md-6">
                            <h4>Personal info</h4> </br>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Full Name:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="name" type="text" value="{{ Auth::user()->name }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Email:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="email" type="email" value="{{ Auth::user()->email }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label" for="gender">Gender:</label>
                                <div class="col-lg-8">
                                    <select class="form-control" name="gender" required>
                                        @if((Auth::user()->gender) == 'm')
                                        <option value="m" style="color: grey" selected>Male</option>
                                        <option value="f" style="color: grey;">Female</option>
                                        @else((Auth::user()->gender) == 'f')
                                        <option value="f" style="color: grey;" selected>Female</option>
                                        <option value="m" style="color: grey">Male</option>
                                        @endif
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Birthday:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="birthdate" type="date" value="{{ Auth::user()->birthdate }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Age:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="age" type="text" value="{{ Auth::user()->age }}" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Phone:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="phone" type="text" value="{{ Auth::user()->phone }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Address: </label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="address" type="text" value="{{ Auth::user()->address }}" required>
                                </div> </br>
                            </div>
                        </div>
                        <!-- Submit form column -->
                        <div class="col-md-2">
                            <button type="submit" class="profile-edit-btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>