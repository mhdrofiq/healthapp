<?
    $hostname = "localhost";
    $username = "root";
    $email = "";
    $database = "healthapp";

    $conn = mysqli_connect($hostname, $username, $email, $database);
    if(!$conn)
	    echo('Error: ' . mysqli_connect_error($conn));
    session_start();
?>

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
    <?php
$sql="SELECT * FROM users where id=$register_id";
$result=mysqli_query($con,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
    ?>
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
                
                <div class="col-md-6">
                    <div class="profile-head">
                        <h4>
                        <?php echo $rows['name']; ?>
                        </h4>
                        <h5>
                            Senior Citizen
                        </h5>
                        <br>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label><b>Name  :</b></label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $rows['name']; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label><b>Email  :</b></label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $rows['email']; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label><b>Gender :</b></label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $rows['gender']; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label><b>Birthday :</b></label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $rows['birthdate']; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label><b>Age   :</b></label>
                            </div>
                            <div class="col-md-6">
                                <p>20</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label><b>Phone  :</b></label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $rows['phone']; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label><b>Address :</b></label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $rows['address']; ?></p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                   <a style="text-decoration: none;" href="updateProfile" class="profile-edit-btn" name="btnAddMore">Edit profile </a>
                </div>
            </div>
            
        </form>
    </div>

    <?php 
// close while loop 
}
?>
    <script src="../assets/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>