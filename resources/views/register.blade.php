<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css"/>
    
    <center><img class="mb-4" src="/img/logo.png" alt="" width="300px"></center>

<div class="container"> 
            <form class="form-horizontal needs-validation" role="form" method="POST" action="/register" novalidate>
                @csrf
                <h2 style="font: size 5px;"> Registration Form</h2>
                <div class="form-group">
                    <label for="fullName" class="col-sm-3 control-label">Full Name</label>
                    <div class= "col-sm-9" >
                        <input type="text" id="fullName" name="name" required placeholder="Full Name" class="form-control" autofocus>
                        <div class ="invalid-feedback">
                        This field cannot be empty!
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" required placeholder="@example.com" class="form-control" name= "email">
                        <div class="invalid-feedback">
                    Please input your email !
                </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" name="password" required placeholder="Password" class="form-control">
                        <div class="invalid-feedback">
                        Please input your password !
                    </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="cpassword" required placeholder="Password" class="form-control">
                        <div class="invalid-feedback">
                        Please confirm your password
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" name="birthdate" required class="form-control">
                        <div class="invalid-feedback">
                        Fill your birthdate!
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" id="phoneNumber" name="phone" required placeholder="Phone number" class="form-control">
                        <div class="invalid-feedback">
                        Please enter your Phone number !
                    </div>
                </div>
                <div class="form-group">
                    <label for="Address" class="col-sm-3 control-label">Address </label>
                    <div class="col-sm-9">
                        <input type="text" id="address" name="address" required placeholder="Please write your correct address" class="form-control">
                        <div class="invalid-feedback">
                        Please enter your Address !
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">Gender </label>
                    <select id="gender" class="form-control" name="gender">
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                    </select>
                </div>

                <center>
                    <a href="/" class="btn btn-primary btn-block" style="background-color:grey;">Cancel </a>
                    <button type="submit" class="btn btn-primary btn-block" onclick="Validate()">Register</button> 
                </center>
                <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
            })()
            </script>

            </form> <!-- /form -->

</div><!-- ./container -->