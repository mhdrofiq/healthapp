<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <link rel="stylesheet" href="css/register.css"/>
</head>
<body>
    <?php

    if (isset($_REQUEST['username'])){
        $username = stripcslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con,$username);
        $email = stripcslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $password = stripcslashes($_REQUEST['password']);
        $password = mysqli_real_escape-string($con,$password);
        $birthday = stripcslashes($_REQUEST['birthday']);
        $birthday = mysqli_real_escape_string($con,$birthday);
        $address = stripcslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($con,$address);
        $query = "INSET into 'user' (username, password, email, birthday, address)
        VALUES ('$username', '".md5($password)."', '$email', '$birthday', '$address')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
        <h3>You are registered successfully</h3>
        <br/>Click here to <a href='login.php'>Login</a></div>";
    }
}else{
    ?>
    <div class="col-lg-8 mx-auto p-3 py-md-5">
    <div class="form">
        <h1> Registration </h1>
        <form name="registration" action="" method="post">
        <input type="text" name="username" placeholder="Username" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <input type="text" name="birthday" placeholder="Birthday" required />
        <input type="text" name="address" placeholder="Address" required /> <br>
        <label for="cars">Status:</label>
  <select name="status" id="status">
    <option value="senior">Senior Citizen</option>
    <option value="care">Care Tarker</option>
  </select><br>
        <input type="submit" name="submit" value="Register" />
    </form>
    </div>
</div>
    <?php  }?>
</body>
</html>
