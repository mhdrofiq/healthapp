<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css"/>
    
    <center><img class="mb-4" src="/img/logo.png" alt="" width="300px"></center>

<div class="container">
            <form class="form-horizontal" role="form">
                <h2 style="font: size 5px;"> Registration Form</h2>
                <div class="form-group">
                    <label for="fullName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="fullName" placeholder="Full Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="@example.com" class="form-control" name= "email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" id="phoneNumber" placeholder="Phone number" class="form-control">
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
                <div class="form-group">
                        <label for="Address" class="col-sm-3 control-label">Address </label>
                    <div class="col-sm-9">
                        <input type="text" id="address" placeholder="Please write your correct address" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3"  >Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio"style="background-color:blue;" id="femaleRadio" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" value="Male">Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <center>
                 <div class="form-group">
                 <label for="option" class="col-sm-3 control-label">Register As </label>
                 <select class="select form-control-lg">

                    
                    <option value="2">Senior Citizen</option>
                    <option value="3">Care Taker</option>

                </div>
            
              </div>
                    
                  </select>

                </div>
                <button type="Cancel" class="btn btn-primary btn-block" style=background-color:grey;>Cancel</button>
                <button type="submit" class="btn btn-primary btn-block">Register</button> </center>
            </form> <!-- /form -->
        </div> <!-- ./container -->