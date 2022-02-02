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
                        <button type="button" class="btn btn-md btn-secondary" onclick="location.href='{{ url('adminHome') }}'">
                            <i class="fa fa-angle-left"></i> Back
                        </button>
                    </div>
                    <h1 class="h2"></h1>
                </div>

                <h4 class="mb-3">Edit device assignment</h4>   
                <div class="table-responsive border-bottom">
                    <table class="table table-borderless table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Selected device id</th>
                                <th scope="col">change wearer</th>
                                <th scope="col"></th>
                            </tr>                            
                        </thead>
                        <tbody>
                            <tr>
                                <form method="post" action="/editDeviceAssign/{{ $selectedDevice->id }}">
                                @method('PATCH')
                                @csrf
                                <td style="width:30%;">
                                    <select style="width:80%;" class="form-select form-select-sm" name="selected_device" aria-label=".form-select-sm example" disabled>
                                        <option selected>{{ $selectedDevice->id }}</option>
                                    </select>
                                </td>
                                <td style="width:40%;">
                                    <select style="width:80%;" class="form-select form-select-sm" name="new_senior" aria-label=".form-select-sm example">
                                        <option selected>[ID:{{ $selectedDevice->senior_id }}] {{ $selectedDevice->senior->senior_name }}</option>
                                        @foreach ($seniorsToDevice as $senior)
                                        <option value="{{ $senior->id }}">[ID:{{ $senior->id }}] {{ $senior->senior_name }}</option>
                                        @endforeach
                                        <option value="{{NULL}}">No wearer</option>
                                    </select>
                                </td>
                                <td><button type="submit" class="btn btn-sm btn-success">Save assignment</button></td>
                                </form>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

                <h4 class="mb-3 pt-3">Edit senior citizen assignment</h4>   
                <div class="table-responsive">
                    <table class="table table-borderless table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Selected senior citizen</th>
                                <th scope="col">change caretaker</th>
                                <th scope="col"></th>
                            </tr>                            
                        </thead>
                        <tbody>
                            <tr>
                                <form method="post" action="/editSeniorAssign/{{ $selectedDevice->senior->id }}">
                                @method('PATCH')
                                @csrf
                                <td style="width:30%;">
                                    <select style="width:80%;" class="form-select form-select-sm" name="selected_senior" aria-label=".form-select-sm example" disabled>
                                        <option selected>{{ $selectedDevice->senior->senior_name }}</option>
                                    </select>
                                </td>
                                <td style="width:40%;">
                                    <select style="width:80%;" class="form-select form-select-sm" name="new_caretaker" aria-label=".form-select-sm example">
                                        <option selected>[ID:{{ $selectedDevice->senior->user_id }}] {{ $selectedDevice->senior->user->name }}</option>
                                        @foreach ($users as $user)
                                        <option value="{{ $user->id }}">[ID:{{ $user->id }}] {{ $user->name }}</option>
                                        @endforeach
                                        <option value="{{NULL}}">No caretaker</option>
                                    </select>
                                </td>
                                <td><button type="submit" class="btn btn-sm btn-success">Save assignment</button></td>
                                </form>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

            </main>

        </div>
    </div>

</body>