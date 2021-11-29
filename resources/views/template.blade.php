<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
    <title>Template</title>
    <!-- Custom styles for this template -->
    
</head>

<body>

    <header class="row">
        @include('includes.header')
    </header>

    <div class="col-lg-8 mx-auto p-3 py-md-5">
        
        <main>
            <h1>testing the registration feature</h1><br>
            <form method="POST" action="/register">
                @csrf
                <div class="form-group">
                    <label for="name">Full name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="name">Birth date</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="Enter birth date">
                </div>
                <div class="form-group">
                    <label for="phone">Phone number</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                </div>
                <div class="form-group">
                    <label for="usertype">User type</label>
                    <select id="usertype" class="form-control" name="usertype">
                        <option value="c">Caretaker</option>
                        <option value="s">Senior citizen</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" class="form-control" name="gender">
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </main>

        <footer class="pt-5 my-5 text-muted border-top">
            Created by the CareWare team &middot; &copy; 2021
        </footer>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


