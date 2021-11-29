
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
    <img style="margin-left: 40%;" class="mb-4" src="/img/logo.png" alt="" width="300px">
    <div class="container emp-profile">
        <form method="post">

            <div class="row">

                <div class="col-md-4">

                    <div class="profile-img">
                        <h2>My Profile</h2>
                        <br>

                        <img style="border-radius: 50%;" src="https://i.ibb.co/XDvNnq4/IU-Photos-107-of-599-Last-fm.webp" alt="" />
                        <br><br><br><br>
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file" />
                        </div>

                    </div>
                </div>
                @foreach ($users as $user)
                <div class="col-md-6">
                    <div class="profile-head">
                        <h4>{{ $users->name }}</h4>


                <div class="col-md-6">
                    <div class="profile-head">
                        <h4>
                            Danita Chalondra Grizelle
                        </h4>
                        <h5>
                            Senior Citizen
                        </h5>
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <label><b>Name :</b></label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $users->name }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label><b>Email :</b></label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $users->email }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label><b>Gender :</b></label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $users->gender }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label><b>Birthday :</b></label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $users->birthdate }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label><b>Age :</b></label>
                            </div>
                            <div class="col-md-6">
                                <p>20</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label><b>Phone :</b></label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $users->phone }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label><b>Address :</b></label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $users->address }}</p>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
                <div class="col-md-2">
                    <a style="text-decoration: none;" href="updateProfile" class="profile-edit-btn" name="btnAddMore">Edit profile </a>
                </div>
            </div>

        </form>
    </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>