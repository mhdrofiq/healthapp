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
                    <h1 class="h2">List of Devices</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button type="button" class="btn btn-sm btn-success">
                            <i class="fa fa-plus"></i> Add a new device
                        </button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Device ID</th>
                                <th scope="col">Wearer</th>
                                <th scope="col">Edit</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            @foreach ($devices as $device)
                            <tr>
                                <td>{{ $device->id }}</td>
                                @if ($device->senior != null)
                                <td>{{ $device->senior->senior_name }}</td> 
                                @else
                                <td>Device is unassigned</td>
                                @endif
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-danger"><i class="fa fa-times"></i></button>
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