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
                    <h1 class="h2">List of Senior Citizens</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button type="button" class="btn btn-sm btn-success" onclick="location.href='{{ url('addSenior') }}'">
                            <i class="fa fa-plus"></i> Add a new senior citizen
                        </button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Senior ID</th>
                                <th scope="col">Full name</th>
                                <th scope="col">Phone number</th>
                                <th scope="col">Address</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Date of birth</th>
                                <th scope="col">Edit</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            @foreach ($seniors as $senior)
                            <tr>
                                <td>{{ $senior->id }}</td>
                                <td>{{ $senior->senior_name }}</td>
                                <td>{{ $senior->senior_phone }}</td>
                                <td>{{ $senior->senior_address }}</td>
                                <td>{{ $senior->senior_gender }}</td>
                                <td>{{ $senior->senior_birthdate }}</td>
                                <td class="d-inline-flex">
                                    <form class="px-1">
                                        <a href="/editSenior/{{$senior->id}}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                    </form>
                                    <form method="post" action="/deleteSenior/{{ $senior->id }}">
                                        @method('delete')
                                        @csrf
                                        <button type="submit button" class="btn btn-sm btn-outline-danger" 
                                        onclick="return confirm('Do you really want to delete this senior citizen?')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </main>
        </div>
    </div> 
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</body>