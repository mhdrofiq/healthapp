<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css"/>
    <!-- Custom styles for this template -->
    
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <center>  
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form </h3> </center>
            <form action="\">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                  <input type="name" class="form-control form-control-lg" placeholder="Name" />
                    
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="email" class="form-control form-control-lg" placeholder="Email" />
                    
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline w-100">
                    <input
                      type="text"
                      class="form-control form-control-lg"
                      id="birthdayDate"
                      placeholder="Birthday Date"
                      onfocus="(this.type='date')"
                    />
                    
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="femaleGender"
                      value="option1"
                      checked
                    />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="maleGender"
                      value="option2"
                    />
                    <label class="form-check-label" for="maleGender">Male</label>
                   

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline w-100 ">
                     <input type="text" id="Address" class="form-control form-control-lg" placeholder="Address" />
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                     <input type="text" id="PhoneNum" class="form-control form-control-lg" placeholder="Phone Number" />
                   
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12">

                  <select class="select form-control-lg">
                    
                    <option value="2">Senior Citizen</option>
                    <option value="3">Care Taker</option>
                    
                  </select>
                  <label class="form-label select-label" >Register As</label>

                </div>
              </div>
            <center>
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                <a href="\" class="btn btn-primary btn-lg" name="cancel">Cancel</a>       
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 