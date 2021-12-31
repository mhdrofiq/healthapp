<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
        
    <!-- Custom styles for this template -->
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            @include('includes.adminSidebar')

            <main class="col-xl-10 col-lg-9 col-sm-10 ms-sm-auto px-md-4">

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button type="button" class="btn btn-md btn-secondary" onclick="location.href='{{ url('manageSeniors') }}'">
                            <i class="fa fa-angle-left"></i> Back
                        </button>
                    </div>
                    <h1 class="h2"></h1>
                </div>

                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Enter senior citizen information</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-8">
                                <label for="senior_name" class="form-label">Full name</label>
                                <input type="text" class="form-control" id="fullname" placeholder="Firstname Lastname" value="" required>
                                <div class="invalid-feedback">
                                    Valid full name is required.
                                </div>
                            </div>
            
                            <div class="col-8">
                                <label for="phone" class="form-label">Phone number</label>
                                <div class="input-group has-validation">
                                    <input type="tel" class="form-control" id="phone" placeholder="0123456789" required>
                                <div class="invalid-feedback">
                                    A phone number is required.
                                    </div>
                                </div>
                            </div>

                            <div class="col-8">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">
                                    Please enter the senior citizen's address.
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="birthdate" class="form-label">Date of birth</label>
                                <input type="date" class="form-control" id="birthdate" required>
                                <div class="invalid-feedback">
                                    Please enter the senior citizen's birthdate.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="gender" class="form-label">Gender</label>
                                <div>
                                    <div class="form-check-inline">
                                    <input id="male" name="gender" type="radio" class="form-check-input" checked required>
                                    <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check-inline">
                                    <input id="female" name="gender" type="radio" class="form-check-input" required>
                                    <label class="form-check-label" for="female">Female</label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <button class="btn btn-success btn-md my-5 px-5" type="submit">Submit</button>
                        
                    </form>
                </div>
            </main>

        </div>
    </div>

</body>