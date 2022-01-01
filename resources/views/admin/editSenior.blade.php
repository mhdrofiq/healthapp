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
                    <h4 class="mb-3">Edit senior citizen information</h4>
                    <form method="post" action="/editSenior/{{ $senior->id }}" class="needs-validation">
                        @method('PATCH')
                        @csrf
                        <div class="row g-3">
                            <div class="col-8">
                                <label for="senior_name" class="form-label">Full name</label>
                                <input type="text" name="senior_name" class="form-control" id="fullname" value="{{ $senior->senior_name }}" required>
                                <div class="invalid-feedback">
                                    Valid full name is required.
                                </div>
                            </div>
            
                            <div class="col-8">
                                <label for="phone" class="form-label">Phone number</label>
                                <div class="input-group has-validation">
                                    <input type="tel" name="senior_phone" class="form-control" id="phone" value="{{ $senior->senior_phone }}" required>
                                    <div class="invalid-feedback">
                                        A phone number is required.
                                    </div>
                                </div>
                            </div>

                            <div class="col-8">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="senior_address" class="form-control" id="address" value="{{ $senior->senior_address }}" required>
                                <div class="invalid-feedback">
                                    Please enter the senior citizen's address.
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="birthdate" class="form-label">Date of birth</label>
                                <input type="date" name="senior_birthdate" class="form-control" id="birthdate" value="{{ $senior->senior_birthdate }}" required>
                                <div class="invalid-feedback">
                                    Please enter the senior citizen's birthdate.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="gender" class="form-label">Gender</label>
                                <div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" for="male" >
                                            <input id="male" value="Male" name="senior_gender" type="radio" class="form-check-input" {{ $senior->senior_gender == 'Male' ? 'checked' : ''}} required>Male
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" for="female">
                                            <input id="female" value="Female" name="senior_gender" type="radio" class="form-check-input" {{ $senior->senior_gender == 'Female' ? 'checked' : ''}} required>Female
                                        </label>
                                    </div>
                                </div>
                            </div>

                            @error('errormsg')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>                        

                        <button class="btn btn-success btn-md my-5 px-5" type="submit">Submit</button>
                        
                    </form>
                </div>
            </main>

        </div>
    </div>

</body>