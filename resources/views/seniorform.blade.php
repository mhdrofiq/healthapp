<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css"/>
    
    <center><img class="mb-4" src="/img/logo.png" alt="" width="300px"></center>

<div class="container">
            <form class="form-horizontal" role="form" method="POST" action="/addsenior">
                @csrf
                
                {{--senior citizen information--}}

                <div class="form-group">
                    <label for="fullName" class="control-label">Senior's full name</label>
                    <div class="col-sm-9">
                        <input type="text" name="senior_name" placeholder="Full Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="control-label">Senior's date of birth</label>
                    <div class="col-sm-9">
                        <input type="date" name="senior_birthdate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="control-label">Senior's phone number</label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" name="senior_phone" placeholder="Phone number" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Address" class="control-label">Senior's address</label>
                    <div class="col-sm-9">
                        <input type="text" name="senior_address" placeholder="Please write your correct address" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="control-label">Senior's gender </label>
                    <select id="gender" class="form-control" name="senior_gender">
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                    </select>
                </div>

                <center>
                    <a href="/" class="btn btn-primary btn-block" style=background-color:grey;>Cancel</a>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button> 
                </center>

            </form>

</div><!-- ./container -->