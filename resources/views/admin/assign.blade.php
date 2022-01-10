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

                <h4 class="mb-3">New device assignment</h4>   
                <div class="table-responsive border-bottom">
                    <table class="table table-borderless table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Unassigned device IDs</th>
                                <th scope="col">Senior citizens without a device</th>
                                <th scope="col"></th>
                            </tr>                            
                        </thead>
                        <tbody>
                            <tr>
                                <form method="post" action="/assignDevice">
                                @csrf
                                <td style="width:30%;">
                                    @if($devices->isEmpty())
                                    <select style="width:80%;" class="form-select form-select-sm" name="selected_device" aria-label=".form-select-sm example" disabled>
                                        <option selected>All devices are assigned</option>
                                    </select>
                                    @else
                                    <select style="width:80%;" class="form-select form-select-sm" name="selected_device" aria-label=".form-select-sm example">
                                        <option selected>Select a device</option>
                                        @foreach ($devices as $device)
                                        <option value="{{ $device->id }}">{{ $device->id }}</option>
                                        @endforeach
                                    </select>
                                    @endif
                                </td>
                                <td style="width:40%;">
                                    @if($seniorsToDevice->isEmpty())
                                    <select style="width:80%;" class="form-select form-select-sm" name="selected_senior" aria-label=".form-select-sm example" disabled>
                                        <option selected>All seniors have been assigned a device</option>
                                    </select>
                                    @else
                                    <select style="width:80%;" class="form-select form-select-sm" name="selected_senior" aria-label=".form-select-sm example">
                                        <option selected>Select a senior</option>
                                        @foreach ($seniorsToDevice as $senior)
                                        <option value="{{ $senior->id }}">[ID:{{ $senior->id }}] {{ $senior->senior_name }}</option>
                                        @endforeach
                                    </select>
                                    @endif
                                </td>
                                <td><button type="submit" class="btn btn-sm btn-success">Save assignment</button></td>
                                </form>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

                <h4 class="mb-3 pt-3">New senior assignment</h4>   
                <div class="table-responsive">
                    <table class="table table-borderless table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Unmonitored senior citizens</th>
                                <th scope="col">All caretakers</th>
                                <th scope="col"></th>
                            </tr>                            
                        </thead>
                        <tbody>
                            <tr>
                                <form method="post" action="/assignSenior">
                                @csrf
                                <td style="width:30%;">
                                    @if($seniorsToUser->isEmpty())
                                    <select style="width:80%;" class="form-select form-select-sm" name="selected_senior" aria-label=".form-select-sm example" disabled>
                                        <option selected>All seniors are monitored by a caretaker</option>
                                    </select>
                                    @else
                                    <select style="width:80%;" class="form-select form-select-sm" name="selected_senior" aria-label=".form-select-sm example">
                                        <option selected>Select a senior citizen</option>
                                        @foreach ($seniorsToUser as $senior)
                                        <option value="{{ $senior->id }}">[ID:{{ $senior->id }}] {{ $senior->senior_name }}</option>
                                        @endforeach
                                    </select>
                                    @endif
                                </td>
                                <td style="width:40%;">
                                    @if($seniorsToUser->isEmpty())
                                    <select style="width:80%;" class="form-select form-select-sm" name="selected_user" aria-label=".form-select-sm example" disabled>
                                        <option selected>Senior citizen must be selected</option>
                                    </select>
                                    @else
                                    <select style="width:80%;" class="form-select form-select-sm" name="selected_user" aria-label=".form-select-sm example">
                                        <option selected>Select a caretaker</option>
                                        @foreach ($users as $user)
                                        <option value="{{ $user->id }}">[ID:{{ $user->id }}] {{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    @endif
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